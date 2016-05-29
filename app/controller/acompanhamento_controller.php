<?php	
	
	if(!empty($_POST['ajax']))
	{
		##para requisicoes ajax é necessário realizar inclue de funcao goCURL e session_start();		
		if(!empty($_POST['acompanhamento']))
		{
			$status = GoCURL(array('pedido_id'=>$_POST['pedido_id']), 
							'pedidos/acompanhamento');						
			echo json_encode($status['dados']['status']);
			exit;
		}

	}
	
	if($part_url[2] == 'not')
	{
		header('LOCATION:'.$host.'/home');
	}

	if(empty($_SESSION['Usuario']))
	{	
		header('LOCATION:'.$host.'/login');	
	}

	
	$pedido_id = $part_url[2];	
	
	##realizar busca por dados de cliente aqui
	$pedido = 
		GoCURL(array('id_cliente'=>$_SESSION['id_cliente'], 'id_pedido'=>$pedido_id,'id_usuario'=>$_SESSION['Usuario']['id']), 'pedidos/validar');

	if(!$pedido['success'])
	{
		header('LOCATION:'.$host.'/home');
	}


?>