<?php
	
	##buscando pizzas 
	$pizzasHome = GoCURL(array('id_cliente'=>$_SESSION['id_cliente'], 'categoria_id'=>$_SESSION['categoria_id']), 'produtos/home');  

	if(!$pizzasHome['success'])
	{	
		echo $pizzasHome['message'];
		exit;
	}
	
?>