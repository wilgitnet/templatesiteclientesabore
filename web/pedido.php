<?php if(!empty($_SESSION['pedido'])){ ?>				

	<h3>Pedidos</h3>
	<h4>1-Pizza Calabresa<br> 1-Pizza Mussarela<br>1-Pizza Frango Catupiry</h4>
	<!--- <p>Descontos  <span>R$0.00</span></p> -->
	<p>Total  <span>R$40.00</span></p>
	<h5>Tarifa de entrega incluída</h5>
	<h6><a href="<?PHP echo $host; ?>/carrinho">Ver Pedido</a></h6>
	<h6><a href="pagamento.php">Finalizar</a></h6>

<?php }else{ ?>

	<h3>Pedidos</h3>
	<h4>Seu carrinho esta vazio</h4>					
	<p>Total  <span>R$0:00</span></p>					
	<h6><a href="<?PHP echo $host; ?>/categoria">Realizar Pedido</a></h6>							

<?php } ?>