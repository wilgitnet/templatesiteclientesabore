<?php	
	$mensagem = '';
	$error = false;

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

		##excluindo um registro via ajax
		if(!empty($_POST['exc']))
		{					
			$exc_produto = GoCURL(array('id_cliente'=>$_SESSION['id_cliente'], 'produto_id'=>$_POST['produto_id'], 
										'carrinho'=>$c, 'indice' => $_POST['indice']), 
								'produtos/excluir');

			if($exc_produto['success'])
			{
				$_SESSION['pedido'] = $exc_produto['dados']['carrinho'];
			}

			echo json_encode($exc_produto);
			exit;
		}

		##add meia ao produto informado
		else if(!empty($_POST['meia']))
		{						
			$meia = GoCURL(array('id_cliente'=>$_SESSION['id_cliente'], 'produto_id'=>$_POST['produto_id'], 
								 'carrinho'=>$c, 'inteira'=>$_POST['inteira'], 'meia'=>'true', 'indice'=>$_POST['indice']), 
							'produtos/meia-inteira');

			if($meia['success'])
			{
				$_SESSION['pedido'] = $meia['dados']['carrinho'];
			}

			echo json_encode($meia);
			exit;
		}	

		##add broto ou inteira
		else if(!empty($_POST['broto']))
		{						
			$broto = GoCURL(array('id_cliente'=>$_SESSION['id_cliente'], 'produto_id'=>$_POST['produto_id'], 
								 'carrinho'=>$c, 'inteira'=>$_POST['inteira'], 'broto'=>'true', 'indice' => $_POST['indice']), 
							'produtos/broto');

			if($broto['success'])
			{
				$_SESSION['pedido'] = $broto['dados']['carrinho'];
			}

			echo json_encode($broto);
			exit;
		}	

		##add meia ao produto informado
		else if(!empty($_POST['borda']))
		{									
			$borda = GoCURL(array('id_cliente'=>$_SESSION['id_cliente'],
								 'carrinho'=>$c, 'borda'=>$_POST['recheada']), 
							'produtos/borda');

			
			if($borda['success'])
			{
				$_SESSION['pedido'] = $borda['dados']['carrinho'];
			}

			echo json_encode($borda);
			exit;
		}	
	}
	
	##requisicao para add de produto
	else if($part_url[2] != 'not')
	{		
		 ##limpando carrinho
		if($part_url[2] == 'limpar')
		{
		 	unset($_SESSION['pedido']);
		 	header('LOCATION:'.$host.'/carrinho');
		}
		else if($part_url[2] == 'validar-pedido')
		{
			if(empty($_SESSION['pedido']))
			{								
				$_SESSION['mensagem_erro'] = 'Não existe nenhum pedido para finalizar';
				header('LOCATION:'.$host.'/carrinho');
				exit;
			}

			$carrinho = base64_encode(json_encode($_SESSION['pedido']));
			$validar_pedido = GoCURL(array('id_cliente'=>$_SESSION['id_cliente'], 'carrinho' => $carrinho), 'produtos/validar-pedido');
			
			if(!$validar_pedido['success'])
			{				
				$_SESSION['mensagem_erro'] = $validar_pedido['message'];								
				header('LOCATION:'.$host.'/carrinho');
				exit;
			}		
			else
			{
				header('LOCATION:'.$host.'/compra');
				exit;
			}

		}
		else
		{
			##verifica se produto é válido
			$produto = GoCURL(array('id_cliente'=>$_SESSION['id_cliente'], 'produto_id'=>$part_url[2]), 'produtos/validar');
			
			if(!$produto['success'])
			{
				$mensagem = $produto['message'];
				$error = true;
			}		
			else
			{			
				$carrinho = '';
				if(!empty($_SESSION['pedido']))				
					$carrinho = base64_encode(json_encode($_SESSION['pedido']));				

				$dados = array('id_cliente'=>$_SESSION['id_cliente'], 
							   'produto_id'=>$part_url[2], 
							   'add'=>'true', 
							   'carrinho' => $carrinho);				
							
				##gerando ou atualizando carrinho
				$carrinho = GoCURL($dados, 'produtos/adicionar');				
				$_SESSION['pedido'] = $carrinho['dados']['carrinho'];
			}

			if(!$error)
				header('LOCATION:'.$host.'/carrinho');	
		}	
	}
	
?>