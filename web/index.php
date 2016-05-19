<?php require_once('header.php'); ?>
<?php require_once('app/controller/index_controller.php'); ?>

<div class="content" style="min-height: 1800px;">

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

					<div class="col-md-4">
						<div class="more-buy">
							<img class="img-pizza" src="web/images/pizza4.jpg"/>
							<div class="description">
								<p class="name-product">Frango Catupiry</p>
								<p class="ingredientes-produto">Mussarela, tomate seco, azeitonas e folhas de majerição.</p>	
								<span class="preco">R$ 39,00</span>
								<div class="preco-line"></div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="more-buy">
							<img class="img-pizza" src="web/images/pizza5.jpg"/>
							<div class="description">
								<p class="name-product">Calabresa</p>
								<p class="ingredientes-produto">Mussarela, tomate seco, azeitonas e folhas de majerição.</p>	
								<span class="preco">R$ 39,00</span>
								<div class="preco-line"></div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="more-buy">
							<img class="img-pizza" src="web/images/pizza3.jpg"/>
							<div class="description">
								<p class="name-product">Mexicana</p>
								<p class="ingredientes-produto">Mussarela, tomate seco, azeitonas e folhas de majerição.</p>	
								<span class="preco">R$ 39,00</span>
								<div class="preco-line"></div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-md-3">
				<h2 class="sub-title-home">CÁRDAPIO</h2>
				<div class="nz-separator"></div>
				<div class="acordion">
					<span class="opcoes-cardapio">PIZZAS</span>
					<span class="arrow-acordion"></span>
				</div>
				<div class="acordion">
					<span class="opcoes-cardapio">SOBREMESSAS</span>
					<span class="arrow-acordion"></span>
				</div>

				<div class="acordion">
					<span class="opcoes-cardapio">BEBIDAS</span>
					<span class="arrow-acordion"></span>
				</div>

				
				<table class="meus-pedidos mgT50">
					<thead>
						<tr>
							<th>MEUS PEDIDOS</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Seu carrinho está vazio</td>
						</tr>
						<tr>
							<td><p class="sub-titulo-carrinho">TOTAL: </p><span class="carrinho-valor">R$ 0,00</span></td>
						</tr>
					</tbody>
				</table>	

			</div>
		</div>

		<div class="row mgT50">
			<div class="col-md-9">
				<h2 class="sub-title-home">SUGESTÕES PARA VOCÊ</h2>
				<div class="nz-separator"></div>
				<div class="row">

					<div class="col-md-4">
						<div class="more-buy">
							<img class="img-pizza" src="web/images/pizza2.jpg"/>
							<div class="description">
								<p class="name-product">Marguerita</p>
								<p class="ingredientes-produto">Mussarela, tomate seco, azeitonas e folhas de majerição.</p>	
								<span class="preco">R$ 39,00</span>
								<div class="preco-line"></div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="more-buy">
							<img class="img-pizza" src="web/images/pizza6.jpg"/>
							<div class="description">
								<p class="name-product">Calabresa com queijo</p>
								<p class="ingredientes-produto">Mussarela, tomate seco, azeitonas e folhas de majerição.</p>	
								<span class="preco">R$ 39,00</span>
								<div class="preco-line"></div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="more-buy">
							<img class="img-pizza" src="web/images/pizza7.jpg"/>
							<div class="description">
								<p class="name-product">Baiana</p>
								<p class="ingredientes-produto">Mussarela, tomate seco, azeitonas e folhas de majerição.</p>	
								<span class="preco">R$ 39,00</span>
								<div class="preco-line"></div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>

		

	</div>

</div>

<?php require_once('footer.php'); ?>
