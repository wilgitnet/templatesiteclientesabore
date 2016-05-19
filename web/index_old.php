
<?php require_once('header.php'); ?>
<?php require_once('app/controller/index_controller.php'); ?>
<script src="<?PHP echo $host; ?>/js/modal_produto.js"></script>
	
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
				<p id="modal" id_produto="#<?PHP echo $pizza['Produto']['id']; ?>" class="modal">
					<?PHP 
						echo substr($pizza['Produto']['descricao'], 0, 30);
					?>
				</p>								
				<div class="window" id="<?PHP echo $pizza['Produto']['id']; ?>">
				    <a href="#" class="fechar">X Fechar</a>
				    <h4>Descrição</h4>
				    <p><?PHP echo $pizza['Produto']['descricao']; ?></p>				    
				</div>
				<div id="mascara"></div>
				<button>
						R$ <?PHP echo $pizza['Produto']['valor']; ?>
				</button>				
				<a href="<?PHP echo $host; ?>/carrinho/<?PHP echo $pizza['Produto']['id']; ?>">Comprar</a>
			</li>
		<?PHP } ?>				
		<div class="clear"> </div>
		
		<h4>Sugestões para você</h4>
		<?php 
			foreach ($pizzasHome['dados']['aleatorios'] as $pizza) 
			{				
		?>			
			<li>
				<h3><?PHP echo $pizza['Produto']['nome']; ?></h3>
				<img src="<?PHP echo $pizza['Produto']['img']; ?>">
				<p id="modal" id_produto="#<?PHP echo $pizza['Produto']['id']; ?>" class="modal">
					<?PHP 
						echo substr($pizza['Produto']['descricao'], 0, 30);
					?>
				</p>								
				<div class="window" id="<?PHP echo $pizza['Produto']['id']; ?>">
				    <a href="#" class="fechar">X Fechar</a>
				    <h4>Descrição</h4>
				    <p><?PHP echo $pizza['Produto']['descricao']; ?></p>				    
				</div>
				<div id="mascara"></div>			
				<button>					
					R$ <?PHP echo $pizza['Produto']['valor']; ?>
				</button>					
				<a href="<?PHP echo $host; ?>/carrinho/<?PHP echo $pizza['Produto']['id']; ?>">Comprar</a>
			</li>
		<?PHP } ?>		
		</ul>
		<div class="clear"> </div>
	</div>

	<div class="boxes">
		<div class="order">
			<ul>			
				<li>					
				<?PHP 
					 require_once('cardapioarq.php');
					?>															
				</li>
			</ul>
		</div>
		<div class="clear"> </div>
		<div class="order">
			<ul>
				<li>
					<li>
					<?PHP 
					 require_once('pedido.php');
					?>
				</li>															
				</li>	
			</ul>
		</div>



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

