<?php require_once('header.php'); ?>
<?php require_once('app/controller/index_controller.php'); ?>
<script>
	function GoMenu(categoria)
    {    	
      location.href="<?PHP echo $host; ?>/categoria/"+categoria;
    }
</script>
<div class="content">

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="title-home ">ESCOLHA SUA PIZZA</h2>
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
						<div class="more-buy">
							<img class="img-pizza" src="<?PHP echo $pizza['Produto']['img']; ?>"/>
							<div class="description">
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
								<div class="more-buy">
									<img class="img-pizza" src="<?PHP echo $pizza['Produto']['img']; ?>"/>
									<div class="description">
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
						<?PHP } ?>							
						</div>
					</div>
					<div class="col-md-3">

					</div>
				</div>
			</div>
			<div class="col-md-3">
				<h2 class="sub-title-home">CÁRDAPIO</h2>
				<div class="nz-separator"></div>
				<?PHP foreach($_SESSION['menu'] as $menu){ ?>
					<div class="acordion">
						<span class="opcoes-cardapio" onclick="GoMenu('<?PHP echo $menu['Categorias']['placeholder'] ?>');">
							<?PHP echo $menu['Categorias']['nome']; ?>
						</span>
						<span class="arrow-acordion"></span>
					</div>
				<?PHP } ?>				

				<?PHP 
					require_once('pedido.php');					
				?>				
			</div>
		</div>
		
	</div>

</div>

<?php require_once('footer.php'); ?>
