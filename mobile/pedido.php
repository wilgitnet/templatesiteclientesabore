<?PHP 
	if(!empty($_SESSION['pedido']))
	{
	
?>
	<h5>
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
	</h5>
	<h5>Entrega:  <span>R$ <?PHP echo number_format($_SESSION['pedido']['total'], 2, ',', '.'); ?></span> </h5>			
	<h5>Pedido:  
		<span id="valor_cep">
			R$ 		
			<?PHP echo number_format($_SESSION['pedido']['valor_cep'], 2, ',', '.'); ?>
		</span>
		<span id="loading_cep_valor" style="display: none">
			Calculando<img src="images/loading.gif" width="25" height="25" align="right">
		</span>
	</h5>	
	<h6><a href="<?PHP echo $host; ?>/carrinho">Ver Pedido</a></h6>
	<h6><a href="pagamento.php">Finalizar</a></h6>					
	<br><br> 	
<?PHP }else{ ?>
	<h5>Seu carrinho.php esta vazio :(</h4>	
	<p>Total  <span>R$0,00</span></p>	
	<h6><a href="<?PHP echo $host; ?>/categoria">Realizar Pedido</a></h6>	
	<br><br> 	
<?PHP } ?>