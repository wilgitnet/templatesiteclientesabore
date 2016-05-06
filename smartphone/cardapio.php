	<?php require_once('header.php'); ?>
	<?php require_once('app/controller/cardapio_controller.php'); ?>
	<script src="<?PHP echo $host; ?>/js/mobilesmart.js"></script>



<div class="boxes-cardapio">
	<div class="order">	
		<ul>
		
			<li>
				<h3 id="cardapio"><i class="glyphicon glyphicon-menu-down"></i>  Cardapio</h3>
				<div id="cardapio-expand" style="display: none">
				<?PHP require_once('cardapioarq.php') ?>
				</div>		
				<h3 id="pedido"><i class="glyphicon glyphicon-menu-down"></i>  Pedidos</h3>
				<div id="pedido-expand" style="display: none">
					<?PHP require_once('pedido.php') ?>
				</div>
			</li>
		</ul>
	</div>
</div>	




<div class="grids">
	<ul>
		<h4><?PHP echo $categoria; ?></h4>
		<?PHP foreach ($produtos['dados']['ProdutoArray'] as $key => $produto) { ?>	
		<li>
			<h3><?PHP echo $produto['Produto']['nome']; ?></h3>
			<img src="<?PHP echo $produto['Produto']['img']; ?>" width=280px> 
			<p><?PHP echo $produto['Produto']['descricao']; ?></p>
			<span>R$ <?PHP echo $produto['Produto']['valor']; ?></span>
			<a href="<?PHP echo $host; ?>/carrinho/<?PHP echo $produto['Produto']['id']; ?>">Comprar</a>
		</li>			
		<?PHP } ?>
	</ul>		
</div>
<div class="clear"> </div>

<?php require_once('footer.php'); ?>
