
<?php require_once('header.php'); ?>
<?php require_once('app/controller/cardapio_controller.php'); ?>

<div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-home ">O QUE VOCÊ DESEJA?</h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-9">
                    <h2 class="sub-title-home"><?PHP echo strtoupper($categoria); ?></h2>
                    <div class="nz-separator"></div>

                    <?PHP foreach ($produtos['dados']['ProdutoArray'] as $key => $produto) { ?>	
                    <!-- ITEN DO CARDAPIO -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="more-buy-carpadio">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="img-product-cardapio" src="<?PHP echo $produto['Produto']['img']; ?>"/> 
                                    </div>
                                    <div class="col-md-9">
                                        <div class="description pdL0">
                                            <p class="name-product"><?PHP echo $produto['Produto']['nome']; ?></p>
                                            <p class="ingredientes-produto"><?PHP echo $produto['Produto']['descricao']; ?></p>
                                            <span class="preco-two">R$ <?PHP echo number_format($produto['Produto']['valor'], 2, ',', '.'); ?></span>
                                            <a class="buy-two" href="<?PHP echo $host; ?>/carrinho/<?PHP echo $produto['Produto']['id']; ?>">
                                            	COMPRAR
                                            </a>                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <?PHP } ?>
                    <!-- ITEN DO CARDAPIO -->

                    
                </div>
                <div class="col-md-3">
                    <?PHP 
                    	require_once('cardapioarq.php')
                    ?>

                    
                    <?PHP 
						require_once('pedido.php');					
					?>	

                </div>
            </div>              
        </div>
    </div>

<?php require_once('footer.php'); ?>

