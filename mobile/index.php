
<?php require_once('header.php'); ?>
<?php require_once('app/controller/index_controller.php'); ?>
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
					<?PHP 
						require_once('pedido.php');
					?>
				</div>
			</li>
		</ul>
	</div>
</div>	
	<div class="grids">
		<ul>
			<h4>Pizzas mais compradas</h4>
		<?php 
			foreach ($pizzasHome['dados']['destaques'] as $pizza) 
			{				
		?>			
			<li>
				<h3><?PHP echo $pizza['Produto']['nome']; ?></h3>
				<img src="<?PHP echo $pizza['Produto']['img']; ?>">
				<p><?PHP echo $pizza['Produto']['descricao']; ?></p>
				<span>R$ <?PHP echo $pizza['Produto']['valor']; ?></span>
				<a href="carrinho.php"> Comprar </a>
			</li>
		<?PHP } ?>			
		<a href="#">Ver todas</a>
		<div class="clear"> </div>
		<br>
		<h4>Sugestões para você</h4>
		<?php 
			foreach ($pizzasHome['dados']['aleatorios'] as $pizza) 
			{				
		?>			
			<li>
				<h3><?PHP echo $pizza['Produto']['nome']; ?></h3>
				<img src="<?PHP echo $pizza['Produto']['img']; ?>">
				<p><?PHP echo $pizza['Produto']['descricao']; ?></p>
				<span>R$ <?PHP echo $pizza['Produto']['valor']; ?></span>
				<a href="carrinho.php"> Comprar </a>
			</li>
		<?PHP } ?>	
		<a href="#">Ver todas</a>
		</ul>
		<div class="clear"> </div>
		</div>
	<div class="boxes">
		<div class="clear"> </div>
		<ul>
			<li>
			<h3>Horario de funcionamento</h3>
			<h4><?php echo $_SESSION['nome_fantasia']; ?></h4>
			<?PHP 
				if(!empty($_SESSION['funcionamento'][0]))
				{
					echo "<p>{$_SESSION['funcionamento'][0]}</p>";
				}
			?>			
			<?PHP 
				if(!empty($_SESSION['funcionamento'][1]))
				{
					echo "<p>{$_SESSION['funcionamento'][1]}</p>";
				}
			?>		
		</li>
		<div class="clear"> </div>
		</ul>
	</div>
	<div class="clear"> </div>
   	</div>
</div>

<?php require_once('footer.php'); ?>
