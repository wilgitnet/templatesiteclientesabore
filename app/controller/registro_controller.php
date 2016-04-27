<?php
$insertError = false;
if(empty($_POST['estado']))
	$_POST['estado'] = '';

##buscando CEP
if(!empty($_POST['search']))
{
	require_once('../function.php');
	$cep = $_POST['cep'];

	##realizar busca por cep
	$endereco = GoCURL(array('cep'=>$cep), 'cliente/cep');            	
	echo json_encode($endereco);
	exit;
}

##realizando insert
if(!empty($_POST['submit']))
{	
	$tipoPessoa = 'F';
	$receberPromocao = 'N';

	if(count($_POST['documento']) > 11)
		$tipoPessoa = 'J';

	if(!empty($_POST['receber_promocao']))
		$receberPromocao = 'S';
	
	$arrayDados = array('documento'=>$_POST['documento'], 'celular'=>$_POST['celular'],
						'usuario'=>$_POST['usuario'], 'senha'=>$_POST['senha'],
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
		echo "realizar login aqui";exit;
	}
}

?>