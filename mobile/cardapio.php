
	<?php require_once('header.php'); ?>
	<script>
		cardapio_situacao = 'close';
		$(document).ready( function() {

			$("#cardapio").click(function() {
				if(cardapio_situacao == 'close')
				{
					$("#cardapio-expand").show();	
					cardapio_situacao = 'open';
				}
				else
				{
					$("#cardapio-expand").hide();	
					cardapio_situacao = 'close';	
				}
				
			});
		});

				pedido_situacao = 'close';
		$(document).ready( function() {

			$("#pedido").click(function() {
				if(pedido_situacao == 'close')
				{
					$("#pedido-expand").show();	
					pedido_situacao = 'open';
				}
				else
				{
					$("#pedido-expand").hide();	
					pedido_situacao = 'close';	
				}
				
			});
		});
	</script>





<div class="boxes-cardapio">
	<div class="order">	
		<ul>
			<li>
				<h3 id="cardapio">Cardapio</h3>
				<div id="cardapio-expand" style="display: none">
					<h5>Bebidas</h5><hr>
					<h5>Bebidas</h5><hr>
					<h5>Bebidas</h5><hr>									
					<h5>Vinhos</h5><hr>
					<h5>Pizzas Doces</h5><hr>
					<h5>Pizzas Salgadas</h5><hr>
					<h5>Sobremesas</h5><hr>
					<h5>Sobremesas</h5>
				</div>		
				<h3 id="pedido">Pedidos</h3>
				<div id="pedido-expand" style="display: none">
					<h5>1-Pizza Calabresa<br> 1-Pizza Mussarela<br> 1-Pizza Mussarela<br> 1-Pizza Mussarela<br> 1-Pizza Mussarela</h4>
					<p>Descontos  <span>R$0.00</span></p>
					<p>Total  <span>R$40.00</span></p>
					<h5>Tarifa de entrega incluída</h5>
					<h6><a href="#">Finalizar</a></h6>
					<h6><a href="#">Limpar</a></h6>					
					<br><br> 	
				</div>
			</li>
		</ul>
	</div>
</div>	

				<!--
			<li>
			<h3>Pedidos</h3>
			<h4>Sem nenhum produto adicionado</h4>
			<p>Descontos  <span>R$0:00</span></p>
			<p>Total  <span>R$0:00</span></p>
			<h5>Tarifa de entrega incluída</h5>
			<h6><a href="#">Pedidos</a></h6>
			<h6><a href="#">Comprar</a></h6>
				-->





	<div class="grids">
		<ul>
			<h4>Pizzas mais compradas</h4>
		<li>
			<h3>Pizza de calabresa</h3>
			<img src="mobile/images/thumb-1.png">
			<p>Calabresa, molho, tomate, queijo</p>
			<span>R$40.00</span>
			<a href="#">Comprar</a>
		</li>
		<li>
			<h3>Pizza de calabresa</h3>
			<img src="mobile/images/thumb-2.png">
			<p>Calabresa, molho, tomate, queijo</p>
			<span>R$40.00</span>
			<a href="#">Comprar</a>
		</li>
		


		<div class="clear"> </div>
		<br>

		<li>
			<h3>Pizza de calabresa</h3>
			<img src="mobile/images/thumb-1.png">
			<p>Calabresa, molho, tomate, queijo</p>
			<span>R$40.00</span>
			<a href="#">Comprar</a>
		</li>
		<li>
			<h3> Pizza de 4 Queijos</h3>
			<img src="mobile/images/thumb-2.png">
			<p>Calabresa, molho, tomate, queijo</p>
			<span>R$40.00</span>
			<a href="#">Comprar</a>
		</li>
		</ul>

		<div class="clear"> </div>
		<br>

		<li>
			<h3>Pizza de calabresa</h3>
			<img src="mobile/images/thumb-1.png">
			<p>Calabresa, molho, tomate, queijo</p>
			<span>R$40.00</span>
			<a href="#">Comprar</a>
		</li>
		<li>
			<h3> Pizza de 4 Queijos</h3>
			<img src="mobile/images/thumb-2.png">
			<p>Calabresa, molho, tomate, queijo</p>
			<span>R$40.00</span>
			<a href="#">Comprar</a>
		</li>
		</ul>
		
		<div class="clear"> </div>
		</div>










		<div class="clear"> </div>



<?php require_once('footer.php'); ?>
