<?PHP 
	if(!empty($_SESSION['pedido']))
	{
	
?>
	<h5>1-Pizza Calabresa<br> 1-Pizza Mussarela<br> 1-Pizza Mussarela<br> 1-Pizza Mussarela<br> 1-Pizza Mussarela</h4>
	<p>Descontos  <span>R$0.00</span></p>
	<p>Total  <span>R$40.00</span></p>
	<h5>Tarifa de entrega incluída</h5>
	<h6><a href="carrinho.php">Ver Pedido</a></h6>
	<h6><a href="pagamento.php">Finalizar</a></h6>					
	<br><br> 	
<?PHP }else{ ?>
	<h5>Seu carrinho esta vazio :(</h4>	
	<p>Total  <span>R$0,00</span></p>	
	<h6><a href="cardapio.php">Realizar Pedido</a></h6>	
	<br><br> 	
<?PHP } ?>