<?php
$insertError = false;

##buscando CEP
if(!empty($_POST['search']))
{	
	require_once('../function.php');
	$cep = $_POST['cep'];

	##realizar busca por cep
	$endereco = GoCURL(array('cep'=>$cep, 'cliente_id'=>$_POST['cliente_id'], 'calcula_distancia'=>'true'), 'cliente/cep');            	
	echo json_encode($endereco);
	exit;
}

##realizando insert
if(!empty($_POST['nome']))
{		
	$tipoPessoa = 'F';
	$receberPromocao = 'N';

	if(!empty($_POST['receber_promocao']))
		$receberPromocao = 'S';
	
	$arrayDados = array('celular'=>$_POST['celular'],
						'senha'=>$_POST['senha'],
						'nome'=>$_POST['nome'], 'sobrenome'=>$_POST['sobrenome'],
						'email'=>$_POST['email'], 'estado'=>$_POST['estado'],
						'cep'=>$_POST['cep'], 'cidade'=>$_POST['cidade'],
						'bairro'=>$_POST['bairro'], 'endereco'=>$_POST['endereco'],
						'numero'=>$_POST['numero'], 'complemento'=>$_POST['complemento'],
						'telefone'=>$_POST['telefone'], 'sexo'=>$_POST['sexo'],
						'tipo_documento'=>$tipoPessoa, 'receber_promocao'=>$receberPromocao);
	
	//enviando requisicao para api	
	$insert = GoCURL($arrayDados, 'usuario/salvar'); 
	
	if(!$insert['success'])
	{
		$mensagem = $insert['message'];
		$mensagemArray = $insert['message_array'];
		$insertError = true;
	}
	else
	{		
		//enviando requisicao para api	
		$login = GoCURL(array('usuario'=>$_POST['email'], 'senha'=>md5($_POST['senha'])), 'usuario/login');

		if(!$login['success'])
		{
			$mensagem = 'Ocorreu um erro no seu cadastro. Tente novamente';
			$error = true;
		}	
		else
		{
			$_SESSION['Usuario'] = $login['dados']['Usuario'];	
			$_SESSION['Usuario']['logado']	= true;
			header('Location:'.$host.'/categoria');
		}
	}
}

if(!empty($_POST['submit_editar']))
{
	$arrayDados = array('celular'=>$_POST['celular'],						
						'nome'=>$_POST['nome'], 'sobrenome'=>$_POST['sobrenome'],
						'email'=>$_POST['email'], 'estado'=>$_POST['estado'],
						'cep'=>$_POST['cep'], 'cidade'=>$_POST['cidade'],
						'bairro'=>$_POST['bairro'], 'endereco'=>$_POST['endereco'],
						'numero'=>$_POST['numero'], 'complemento'=>$_POST['complemento'], 'id'=>$_SESSION['Usuario']['id']);
		
	//enviando requisicao para api	
	$update = GoCURL($arrayDados, 'usuario/editar'); 

	if(!$update['success'])
	{
		$mensagem = $update['message'];
		$mensagemArray = $update['message_array'];
		$insertError = true;
	}
	else
	{				
		unset($_POST['submit_editar']);
		unset($_POST['cliente_id']);
		$id = $_SESSION['Usuario']['id'];
		$_SESSION['Usuario'] = $_POST;
		$_SESSION['Usuario']['id'] = $id;
	}
}

?>