
<?php require_once('header.php'); ?>
<?php require_once('app/controller/index_controller.php'); ?>

<script src="<?PHP echo $host; ?>/js/mobilesmart.js"></script>



<div class="boxes-cardapio">
	<div class="order">	
		<ul>
			<li>
				<h3 id="cardapio"><i class="glyphicon glyphicon-menu-down"></i> Cardapio</h3>
				<div id="cardapio-expand" style="display: none">
					<?PHP 
						require_once('cardapioarq.php');
					?>
				</div>
				<h3 id="pedido"><i class="glyphicon glyphicon-menu-down"></i> Pedidos</h3>
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
				<a href="<?PHP echo $host; ?>/carrinho/<?PHP echo $pizza['Produto']['id']; ?>">Comprar</a>
			</li>
		<?PHP } ?>
				
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
				<a href="<?PHP echo $host; ?>/carrinho/<?PHP echo $pizza['Produto']['id']; ?>">Comprar</a>
			</li>
		<?PHP } ?>
		
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
