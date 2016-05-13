<?php	
	
	
	if($part_url[2] == 'not')
	{
		header('LOCATION:'.$host.'/home');
	}

	if(empty($_SESSION['Usuario']))
	{	
		header('LOCATION:'.$host.'/login');	
	}

	##verificando se pedido é valido
	$pedido_id = $part_url[2];

	##realizar busca por dados de cliente aqui
	$pedido = 
		GoCURL(array('id_cliente'=>$_SESSION['id_cliente'], 'id_pedido'=>$pedido_id,'id_usuario'=>$_SESSION['Usuario']['id']), 'pedidos/validar');

	if(!$pedido['success'])
	{
		header('LOCATION:'.$host.'/home');
	}


?>