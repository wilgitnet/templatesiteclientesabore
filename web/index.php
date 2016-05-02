
<?php require_once('header.php'); ?>
<?php require_once('app/controller/index_controller.php'); ?>
	
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
				<button>R$ <?PHP echo $pizza['Produto']['valor']; ?></button>
				<a href="carrinho.php"> Comprar </a>
			</li>
		<?PHP } ?>		
		<a href="#">Ver todas</a>
		<div class="clear"> </div>
		
		<h4>Sugestões para você</h4>
		<?php 
			foreach ($pizzasHome['dados']['aleatorios'] as $pizza) 
			{				
		?>			
			<li>
				<h3><?PHP echo $pizza['Produto']['nome']; ?></h3>
				<img src="<?PHP echo $pizza['Produto']['img']; ?>">
				<p><?PHP echo $pizza['Produto']['descricao']; ?></p>
				<button>R$ <?PHP echo $pizza['Produto']['valor']; ?></button>
				<a href="carrinho.php"> Comprar </a>
			</li>
		<?PHP } ?>
		<a href="#">Ver todas</a>
		</ul>
		<div class="clear"> </div>
	</div>



	<div class="boxes">
		<div class="order">
		<ul>
			<li>	
				<?PHP 
					require_once('pedido.php');
				?>
			</li>
		</ul>
		</div>
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
		<li>
			<h3>Novidades e promoção</h3>
			<p>As melhores pizzas da região para todos os cidadão de santa isabel</p>
			<button>Confira já</button>
			<h3>Quem somos</h3>
			<p><?PHP echo substr($_SESSION['quem_somos'], 0, 74); ?></p>
			<button>Leia mais</button>
		</li>
		<div class="clear"> </div>
		</ul>
	</div>
	<div class="clear"> </div>
    </div>
</div>

<?php require_once('footer.php'); ?>

