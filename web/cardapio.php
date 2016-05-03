
<?php require_once('header.php'); ?>
<?php require_once('app/controller/cardapio_controller.php'); ?>
<script src="<?PHP echo $host; ?>/js/modal_produto.js"></script>
	
	<div class="grids">
		<ul>
			<h4><?PHP echo $categoria; ?></h4>		
			<?PHP foreach ($produtos['dados']['ProdutoArray'] as $key => $produto) { ?>			
			<li>
				<h3><?PHP echo $produto['Produto']['nome']; ?></h3>
				<img src="<?PHP echo $produto['Produto']['img']; ?>">				
				<p id="modal" id_produto="#<?PHP echo $produto['Produto']['id']; ?>" class="modal">
					<?PHP 
						echo substr($produto['Produto']['descricao'], 0, 30);
					?>
				</p>								
				<div class="window" id="<?PHP echo $produto['Produto']['id']; ?>">
				    <a href="#" class="fechar">X Fechar</a>
				    <h4>Descrição</h4>
				    <p><?PHP echo $produto['Produto']['descricao']; ?></p>				    
				</div>
				<div id="mascara"></div>
				<button>R$ <?PHP echo $produto['Produto']['valor']; ?></button>
				<a href="<?PHP echo $host; ?>/carrinho/<?PHP echo $produto['Produto']['id']; ?>">Comprar</a>
			</li>
		<?PHP } ?>		

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
	</div>	
	<div class="clear"> </div>
   
</div>

<?php require_once('footer.php'); ?>

