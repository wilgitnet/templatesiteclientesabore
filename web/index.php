<?php require_once('header.php'); ?>
<?php require_once('app/controller/index_controller.php'); ?>

<script>

    function finalizar()
    {
       location.href="<?PHP echo $host; ?>/carrinho"
    }

    var dominio = "<?PHP echo $host; ?>";
    var percentual = "<?PHP echo $percentual_definido; ?>";

    $(document).ready(function(){

		$('#produtos_ajax').on('click', '.buy', function(){            

                //realizar ajax para incluir valor no carrinho
                var Modal = '#myModal_' + $(this).attr('id_modal');                
                $.ajax({
                    url : dominio + '/app/controller/carrinho_controller.php', 
                    type : 'POST', 
                    data: 'produto_id_add=' + $(this).attr('id_modal') + '&ajax=true', 
                    dataType: 'json', 
                    success: function(data)
                    {
                        if(data.sucesso == true)
                        {                   
                            $.ajax({
                                url : dominio + '/app/controller/carrinho_controller.php', 
                                type : 'POST', 
                                data: 'pedido_loading=true&ajax=true&percentual_definido='+percentual+'&host='+dominio, 
                                dataType: 'html', 
                                success: function(data)
                                {
                                    //atualizando carrinho aqui 
                                    $("#pedido-show").html(data);
                                    $(Modal).modal();         
                                }
                            });             
                            
                        }
                        else
                        {
                        	if(data.mensagem == 'SITEFECHADO')
                        	{
                        		$("#FECHADO").modal(); 
                        	}
                        	else
                            {
                                alert(data.mensagem);
                            }
                        }
                        /*
                        var Modal = '#myModal_' + $(this).attr('id_modal');
                        $(Modal).modal();            
                        */
                    }
                }); 
                
            }); 
	 });
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
				<div id="produtos_ajax" class="produtos_ajax_class">
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
										<a class="buy" href="javascript:void(0);" id="modalCardapio" id_modal="<?PHP echo $pizza['Produto']['id']; ?>">COMPRAR</a>	
										<span class="preco">
											R$ <?PHP echo number_format($pizza['Produto']['valor'], 2, ',', '.'); ?>
										</span>								
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="myModal_<?PHP echo $pizza['Produto']['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	                      <div class="modal-dialog modal-confirma-add" role="document">
	                        <div class="modal-content confirmar-add">
	                          <div class="modal-header">
	                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                            <h4 class="modal-title" id="myModalLabel">Adicionado ao carrinho</h4>
	                          </div>
	                          <div class="modal-body">
	                            <p><?PHP echo $pizza['Produto']['nome']; ?> - R$ <?PHP echo number_format($pizza['Produto']['valor'], 2, ',', '.'); ?></p>
	                          </div>
	                          <div class="modal-footer">
	                            <button type="button" class="continuar-comprando" data-dismiss="modal">CONTINUAR COMPRANDO</button>
	                            <button type="button" class="finalizar-compra" onclick="finalizar()">FINALIZAR PEDIDO</button>
	                          </div>
	                        </div>
	                      </div>
	                    </div>   
					<?PHP } ?>
					</div>		
				
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
										<p class="ingredientes-produto">
										<?PHP 
											echo substr($pizza['Produto']['descricao'], 0, 50);
										?>
										</p>
										<a class="buy" href="javascript:void(0);" id="modalCardapio" id_modal="<?PHP echo $pizza['Produto']['id']; ?>">COMPRAR</a>	
										<span class="preco">
											R$ <?PHP echo number_format($pizza['Produto']['valor'], 2, ',', '.'); ?>
										</span>								
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="myModal_<?PHP echo $pizza['Produto']['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	                      <div class="modal-dialog modal-confirma-add" role="document">
	                        <div class="modal-content confirmar-add">
	                          <div class="modal-header">
	                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                            <h4 class="modal-title" id="myModalLabel">Adicionado ao carrinho</h4>
	                          </div>
	                          <div class="modal-body">
	                            <p><?PHP echo $pizza['Produto']['nome']; ?> - R$ <?PHP echo number_format($pizza['Produto']['valor'], 2, ',', '.'); ?></p>
	                          </div>
	                          <div class="modal-footer">
	                            <button type="button" class="continuar-comprando" data-dismiss="modal">CONTINUAR COMPRANDO</button>
	                            <button type="button" class="finalizar-compra" onclick="finalizar()">FINALIZAR PEDIDO</button>
	                          </div>
	                        </div>
	                      </div>
	                    </div>  
						<?PHP } ?>							
						</div>

					</div>
					<div class="col-md-3">
					<div class="modal fade" id="FECHADO" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog modal-confirma-add" role="document">
                    <div class="modal-content confirmar-add">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">SITE ESTA FECHADO PARA COMPRAS</h4>
                      </div>
                      <div class="modal-body">
                        <p>Ligue para 3234223432 para realizar seu pedido</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="continuar-comprando" data-dismiss="modal">Continuar Navegando</button>	                            
                      </div>
                    </div>
                  </div>
                </div>  
				</div>
			</div>
			</div>
			<div class="col-md-3">
				
				<?PHP
					 require_once('cardapioarq.php');
				 ?>
				<div id="pedido-show">
					<?PHP 
						require_once('pedido.php');					
					?>				
				</div>
			</div>
		</div>
		
	</div>

</div>

<?php require_once('footer.php'); ?>
