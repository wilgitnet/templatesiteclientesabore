<?php

##verifica se esta buscando produtos de uma categoria
if($part_url[2] == 'not')
{
	header('LOCATION:'.$host.'/home');
}

$categoria = $part_url[2];

##realizar busca por dados de cliente aqui
$produtos = GoCURL(array('id_cliente'=>$_SESSION['id_cliente'], 'categoria_placeholder'=>$categoria), 'produtos/buscar');            

if(!$produtos['success'])
{
	header('LOCATION:'.$host.'/home');
}

?>