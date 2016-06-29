<script>
    function finalizar()
    {
       location.href="<?PHP echo $host; ?>/carrinho"
    }
</script>
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
                                                        <button type="button" class="finalizar-compra">FINALIZAR PEDIDO</button>
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