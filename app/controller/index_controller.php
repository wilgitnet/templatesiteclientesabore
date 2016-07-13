<?php
	
	##buscando pizzas 
	$pizzasHome = GoCURL(array('cliente_id'=>$_SESSION['id_cliente'], 'categoria_id'=>$_SESSION['categoria_id']), 'produtos/home');  

	if(!$pizzasHome['success'])
	{	
		echo $pizzasHome['message'];
		exit;
	}
	
?>