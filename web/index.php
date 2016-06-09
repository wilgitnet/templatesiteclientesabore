<?php require_once('header.php'); ?>
<?php require_once('app/controller/index_controller.php'); ?>

<div class="content">

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="title-home ">ESCOLHA SUA PIZZA</h2>
		    </div>
		</div>
					<!-- Button trigger modal -->
		<button type="button" class="" data-toggle="modal" data-target="#myModal">
		 MODAL PARA CONFIRMAR A COMPRA
		</button>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog modal-confirma-add" role="document">
		    <div class="modal-content confirmar-add">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Adicionado ao carrinho</h4>
		      </div>
		      <div class="modal-body">
		        <p>01 Pizza de Frango com Catupity </p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="continuar-comprando" data-dismiss="modal">CONTINUAR COMPRANDO</button>
		        <button type="button" class="finalizar-compra">FINALIZAR PEDIDO</button>
		      </div>
		    </div>
		  </div>
		</div>
		
		<div class="row">
			<div class="col-md-9">
				<h2 class="sub-title-home">PIZZAS MAIS COMPRADAS</h2>
				<div class="nz-separator"></div>
				<div class="row">

				<?php 
					foreach ($pizzasHome['dados']['destaques'] as $pizza) 
					{				
				?>				
					<div class="col-md-4">
					    <div class="itens-produto-home">
							<div class="more-buy">
								<img class="img-pizza" src="<?PHP echo $pizza['Produto']['img']; ?>"/>
								<div class="description-home">
									<p class="name-product"><?PHP echo $pizza['Produto']['nome']; ?></p>
									<p class="ingredientes-produto">
									<?PHP 
										echo substr($pizza['Produto']['descricao'], 0, 50);
									?>
									</p>
									<a class="buy" href="<?PHP echo $host; ?>/carrinho/<?PHP echo $pizza['Produto']['id']; ?>">COMPRAR</a>	
									<span class="preco">
										R$ <?PHP echo number_format($pizza['Produto']['valor'], 2, ',', '.'); ?>
									</span>								
								</div>
							</div>
						</div>
					</div>
				<?PHP } ?>
									
				</div>

				<div class="row mgT50">
					<div class="col-md-12">
						<h2 class="sub-title-home">SUGESTÕES PARA VOCÊ</h2>
						<div class="nz-separator"></div>
						<div class="row">

						<?php 
							foreach ($pizzasHome['dados']['aleatorios'] as $pizza) 
							{				
						?>
							<div class="col-md-4">
								<div class="itens-produto-home">
									<div class="more-buy">
										<img class="img-pizza" src="<?PHP echo $pizza['Produto']['img']; ?>"/>
										<div class="description-home">
											<p class="name-product"><?PHP echo $pizza['Produto']['nome']; ?></p>
											<p class="ingredientes-produto-home">
											<?PHP 
												echo substr($pizza['Produto']['descricao'], 0, 50);
											?>
											</p>
											<a class="buy" href="<?PHP echo $host; ?>/carrinho/<?PHP echo $pizza['Produto']['id']; ?>">COMPRAR</a>	
											<span class="preco">
												R$ <?PHP echo number_format($pizza['Produto']['valor'], 2, ',', '.'); ?>
											</span>
										</div>
									</div>
								</div>
							</div>
						<?PHP } ?>							
						</div>
					</div>
					<div class="col-md-3">

					</div>
				</div>
			</div>
			<div class="col-md-3">
				
				<?PHP
					 require_once('cardapioarq.php');
				 ?>

				<?PHP 
					require_once('pedido.php');					
				?>				
			</div>
		</div>
		
	</div>

</div>

<?php require_once('footer.php'); ?>
