
<?php require_once('app/controller/cardapio_controller.php'); ?>
<?php require_once('header.php'); ?>
<script>

    function finalizar()
    {
       location.href="<?PHP echo $host; ?>/carrinho"
    }

    var dominio = "<?PHP echo $host; ?>";
    var percentual = "<?PHP echo $percentual_definido; ?>";

    $(document).ready(function(){

            $('#produtos_ajax').on('click', '.buy-two', function(){            

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


            $("#pesquisa").keyup(function() {

                if($("#pesquisa").val().length >= 1)
                {
                    $.ajax({
                        url : dominio + '/app/controller/cardapio_controller.php', 
                        type : 'POST', 
                        data: 'ajax=true&pesquisa='+$("#pesquisa").val(), 
                        dataType: 'html', 
                        success: function(data)
                        {                            
                            $("#produtos_ajax").html(data);                            
                        }
                    }); 
                }
                else
                {                    
                    $.ajax({
                        url : dominio + '/app/controller/cardapio_controller.php', 
                        type : 'POST', 
                        data: 'ajax=true&pesquisa=firstcodeTreeLongBeth', 
                        dataType: 'html', 
                        success: function(data)
                        {                            
                            $("#produtos_ajax").html(data);                            
                        }
                    });    
                }

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
                    <h2 class="sub-title-home"><?PHP echo strtoupper($categoria); ?></h2>
                    <div class="nz-separator"></div>
                    <div id="produtos_ajax" class="produtos_ajax_class">
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
                                            <div class="description">
                                                <p class="name-product"><?PHP echo $produto['Produto']['nome']; ?></p>
                                                <p class="ingredientes-produto"><?PHP echo $produto['Produto']['descricao']; ?></p>
                                                <span class="preco-two">R$ <?PHP echo number_format($produto['Produto']['valor'], 2, ',', '.'); ?></span>

                                                <a class="buy-two" href="javascript:void(0);" id="modalCardapio" id_modal="<?PHP echo $produto['Produto']['id']; ?>">
                                                    COMPRAR
                                                </a>       
                                                <!-- Modal -->
                                                <div class="modal fade" id="myModal_<?PHP echo $produto['Produto']['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                  <div class="modal-dialog modal-confirma-add" role="document">
                                                    <div class="modal-content confirmar-add">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Adicionado ao carrinho</h4>
                                                      </div>
                                                      <div class="modal-body">
                                                        <p><?PHP echo $produto['Produto']['nome']; ?> - R$ <?PHP echo number_format($produto['Produto']['valor'], 2, ',', '.'); ?></p>
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="continuar-comprando" data-dismiss="modal">CONTINUAR COMPRANDO</button>
                                                        <button type="button" class="finalizar-compra" onclick="finalizar()">FINALIZAR PEDIDO</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>                     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                        <?PHP } ?>
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
                <div class="col-md-3">
                    <h2 class="sub-title-home">PESQUISAR</h2>
                    <div class="nz-separator"></div>
                    <div class="search-grid">
                        <input type="text" placeholder="Pesquise aqui" id="pesquisa" name="pesquisa">
                    </div>
                    <?PHP 
                    	require_once('cardapioarq.php')
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

