<?php if(!empty($_SESSION['pedido'])){ ?>					

	<h3>Pedidos</h3>
	<h4>
		<?PHP 
			if(!empty($_SESSION['pedido']['item'][0])) 				
				echo $_SESSION['pedido']['item'][0]['Produto']['nome']."<BR>"; 
		?>		
		<?PHP 
			if(!empty($_SESSION['pedido']['item'][1])) 				
				echo $_SESSION['pedido']['item'][1]['Produto']['nome']."<BR>"; 
		?>		
		<?PHP 
			if(!empty($_SESSION['pedido']['item'][2])) 				
				echo $_SESSION['pedido']['item'][2]['Produto']['nome']."<BR>"; 
		?>
	</h4>	
	<p>Entrega:  <span>R$ <?PHP echo number_format($_SESSION['pedido']['valor_cep'], 2, ',', '.'); ?></span></p>
	<h5>Total:  <span>R$ <?PHP echo number_format($_SESSION['pedido']['total'], 2, ',', '.'); ?></span> </h5>
	<h6><a href="<?PHP echo $host; ?>/carrinho">Ver Completo</a></h6>
	<h6><a href="pagamento.php">Finalizar</a></h6>

<?php }else{ ?>

	<h3>Pedidos</h3>
	<h4>Seu carrinho esta vazio</h4>					
	<p>Total  <span>R$0:00</span></p>					
	<h6><a href="<?PHP echo $host; ?>/categoria">Realizar Pedido</a></h6>							

<?php } ?>