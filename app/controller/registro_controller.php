<?php
if(!empty($_POST['search']))
{
	require_once('../function.php');
	$cep = $_POST['cep'];

	##realizar busca por cep
	$endereco = GoCURL(array('cep'=>$cep), 'cliente/cep');            	
	echo json_encode($endereco);
	exit;
}

?>