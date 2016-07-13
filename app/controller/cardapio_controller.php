<?php

if(!empty($_POST['ajax']))
{
	session_start();
	require_once('../function.php');

	##realizar busca por dados de cliente aqui
	$produtos = GoCURL(array('cliente_id'=>$_SESSION['id_cliente'], 'pesquisa'=>$_POST['pesquisa']), 'produtos/buscar');	
	require_once('../../web/produtos_ajax.php');
	exit();
}


##verifica se esta buscando produtos de uma categoria
if($part_url[2] == 'not')
{
	header('LOCATION:'.$host.'/home');
}

$categoria = $part_url[2];

##realizar busca por dados de cliente aqui
$produtos = GoCURL(array('cliente_id'=>$_SESSION['id_cliente'], 'categoria_placeholder'=>$categoria), 'produtos/buscar');            

if(!$produtos['success'])
{
	header('LOCATION:'.$host.'/home');
}

?>