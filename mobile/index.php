
	<?php require_once('header.php'); ?>
<script type="text/javascript">
	
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
				<h3 id="pedido"><i class="glyphicon glyphicon-menu-down"></i>  Pedidos</h3>
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
	<div class="grids">
		<ul>
			<h4>Pizzas mais compradas</h4>
		<li>
			<h3>Pizza de calabresa</h3>
			<img src="mobile/images/thumb-1.png">
			<p>Calabresa, molho, tomate, queijo</p>
			<span>R$40.00</span>
		</li>
		<li>
			<h3>Pizza de calabresa</h3>
			<img src="mobile/images/thumb-2.png">
			<p>Calabresa, molho, tomate, queijo</p>
			<span>R$40.00</span>
		</li>
		<a href="#">Veja todas</a>
		<div class="clear"> </div>
		<br>
		<h4>Sugestões para você</h4>
		<li>
			<h3>Pizza de calabresa</h3>
			<img src="mobile/images/thumb-1.png">
			<p>Calabresa, molho, tomate, queijo</p>
			<span>R$40.00</span>
		</li>
		<li>
			<h3> Pizza de 4 Queijos</h3>
			<img src="mobile/images/thumb-2.png">
			<p>Calabresa, molho, tomate, queijo</p>
			<span>R$40.00</span>
		</li>
		<a href="#">Veja todas</a>
		</ul>
		<div class="clear"> </div>
		</div>
	<div class="boxes">
		<div class="clear"> </div>
		<ul>
			<li>
			<h3>Horario de funcionamento</h3>
			<h4>Pizzarias </h4>
			<p>Terça a sexta  11:00 - 22:30</p>
			<p>Sábado e domingo 11:00 - 00:00</p>

			<!--	CASO DE TER ALMOÇO
			<h4>Lunch </h4>
			<p>Monday - Friday &nbsp;&nbsp; 11 am - 03 pm</p>
			<p>Saturaday - Sunday &nbsp;&nbsp; 11 am - 04 pm</p>
			-->

		</li>
		<div class="clear"> </div>
		</ul>
	</div>
	<div class="clear"> </div>
   	</div>
</div>

<?php require_once('footer.php'); ?>
