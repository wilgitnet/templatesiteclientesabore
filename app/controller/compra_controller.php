<?php	
	
	if(empty($_SESSION['pedido']['endereco']) && !empty($_SESSION['Usuario']) && empty($_POST['ajax']) && !empty($_SESSION['pedido']))
	{
		$_SESSION['pedido']['endereco']['cep'] 			= $_SESSION['Usuario']['cep'];
		$_SESSION['pedido']['endereco']['estado'] 		= $_SESSION['Usuario']['estado'];
		$_SESSION['pedido']['endereco']['endereco'] 	= $_SESSION['Usuario']['endereco'];
		$_SESSION['pedido']['endereco']['cidade'] 		= $_SESSION['Usuario']['cidade'];
		$_SESSION['pedido']['endereco']['bairro'] 		= $_SESSION['Usuario']['bairro'];
		$_SESSION['pedido']['endereco']['numero'] 		= $_SESSION['Usuario']['numero'];
		$_SESSION['pedido']['endereco']['complemento'] 	= $_SESSION['Usuario']['complemento'];
		$_SESSION['pedido']['usuario_id']				= $_SESSION['Usuario']['id'];	

		##realizar calculo de frete baseado na distancia de enderecos
		$endereco = GoCURL(array('cep'=>$_SESSION['pedido']['endereco']['cep'], 'cliente_id'=>$_SESSION['id_cliente'], 'calcula_distancia'=>'true'), 'cliente/cep');

		if(!$endereco['success'])
		{
			$_SESSION['mensagem_erro'] = 'Ocorreu um erro no calculo do frete. Tente novamente ou atualize o seu endereço';
			header('LOCATION:'.$host.'/carrinho');
			exit;

		}

		if($endereco['dados']['KM'] == 0)
		{
			$endereco['dados']['KM'] = 1;
		}
		
		$_SESSION['pedido']['valor_cep'] = $_SESSION['valor_km_entrega'] * $endereco['dados']['KM'];		
	}

	##requisicao ajax
	if(!empty($_POST['ajax']))
	{
		##para requisicoes ajax é necessário realizar inclue de funcao goCURL e session_start();
		session_start();
		require_once('../function.php');

		if(!empty($_SESSION['pedido']))
		{
			$c = base64_encode(json_encode($_SESSION['pedido']));	
		}

		##calculando valor de cep
		if(!empty($_POST['calc_km']) && !empty($_POST['valor_km_entrega']) && !empty($_POST['km_distancia']))
		{						
			$valor = $_POST['valor_km_entrega'] * $_POST['km_distancia'];
			echo json_encode(array('success'=>true, 'valor'=>number_format($valor, 2, ',', '.')));
			exit;
		}

		##finalizando endereco
		if(!empty($_POST['finalizar_endereco']))
		{

			##validacao de endereco enviado
			if(empty($_POST['cep']) || empty($_POST['estado']) || empty($_POST['endereco']) || empty($_POST['cidade']) || empty($_POST['bairro']) || empty($_POST['numero']))
			{
				echo json_encode(array('success'=>false, 'mensagem'=>'Informar todos os campos obrigatorios do endereco'));
				exit;
			}			

			if(empty($_SESSION['Usuario']))
			{				
				$tipoPessoa = 'F';				

				$arrayDados = array('celular'=>$_POST['celular'],
									'senha'=>$_POST['senha'],
									'nome'=>$_POST['nome'], 'sobrenome'=>$_POST['sobrenome'],
									'email'=>$_POST['email'], 'estado'=>$_POST['estado'],
									'cep'=>$_POST['cep'], 'cidade'=>$_POST['cidade'],
									'bairro'=>$_POST['bairro'], 'endereco'=>$_POST['endereco'],
									'numero'=>$_POST['numero'], 'complemento'=>$_POST['complemento'],
									'tipo_documento'=>$tipoPessoa);									
				
				//enviando requisicao para api	
				$insert = GoCURL($arrayDados, 'usuario/salvar'); 				
				if(!$insert['success'])
				{
					echo json_encode(array('success'=>false, 'mensagem'=>$insert['message_array'][0]));
					exit;
				}			

				//enviando requisicao para api	
				$login = GoCURL(array('usuario'=>$_POST['email'], 'senha'=>md5($_POST['senha'])), 'usuario/login');
				if(!$login['success'])
				{
					echo json_encode(array('success'=>false, 'mensagem'=>$insert['message']));
					exit;
				}	
				else
				{
					$_SESSION['Usuario'] = $login['dados']['Usuario'];	
					$_SESSION['Usuario']['logado']	= true;
					
				}
			}		

			$_SESSION['pedido']['endereco']['cep'] 			= $_POST['cep'];
			$_SESSION['pedido']['endereco']['estado'] 		= $_POST['estado'];
			$_SESSION['pedido']['endereco']['endereco'] 	= $_POST['endereco'];
			$_SESSION['pedido']['endereco']['cidade'] 		= $_POST['cidade'];
			$_SESSION['pedido']['endereco']['bairro'] 		= $_POST['bairro'];
			$_SESSION['pedido']['endereco']['numero'] 		= $_POST['numero'];
			$_SESSION['pedido']['endereco']['complemento'] 	= $_POST['complemento'];
			$_SESSION['pedido']['usuario_id']				= $_SESSION['Usuario']['id'];

			##realizar calculo de frete baseado na distancia de enderecos
			$endereco = GoCURL(array('cep'=>$_SESSION['pedido']['endereco']['cep'], 'cliente_id'=>$_SESSION['id_cliente'], 'calcula_distancia'=>'true'), 'cliente/cep');

			if(!$endereco['success'])
			{
				echo json_encode(array('success'=>false, 'mensagem'=>'Ocorreu um erro no calculo do frete. Tente novamente'));
				exit;
			}

			if($endereco['dados']['KM'] == 0)
			{
				$endereco['dados']['KM'] = 1;
			}

			$_SESSION['pedido']['valor_cep'] = $_SESSION['valor_km_entrega'] * $endereco['dados']['KM'];		

			##redirecionar para pagina de pagamento
			echo json_encode(array('success'=>true));
			exit;
		}	

		##finalizando compra
		if(!empty($_POST['finalizar']))
		{
			if(empty($_POST['tipo_pagamento']))
			{				
				echo json_encode(array('success'=>false, 'mensagem'=>'Informar o tipo de pagamento'));
				exit;				
			}
			
			$pedido = GoCURL(array('tipo_pagamento'=>$_POST['tipo_pagamento'], 'cliente_id'=>$_SESSION['id_cliente'], 'carrinho'=>$c, 'troco'=>$_POST['troco']), 'pedidos/finalizar');

			if(!$pedido['success'])
			{
				echo json_encode(array('success'=>false, 'mensagem'=>$pedido['message']));
				exit;				
			}
			
			echo json_encode(array('success'=>true));
			exit;				
		}
	}
	
	
?>