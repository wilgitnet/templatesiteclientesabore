<?PHP require_once('app/controller/acompanhamento_controller.php'); ?>
<?php require_once('header.php'); ?>  
<script src="<?PHP echo $host; ?>/js/acompanhamentopedido.js"></script>
 <div class="nz-breadcrumbs">
    <div class="container">
        <a href="">Inicio</a>
        <i class="fa fa-angle-double-right"></i>
        <span>Histórico de pedidos</span>
        <i class="fa fa-angle-double-right"></i>
        <span>Detalhes do pedido</span>
    </div>
</div>

<div class="content content-checkout pdB150">
    <div class="container">

        <h4 class="title-info">
            <input type="hidden" name="pedido_id" id="pedido_id" value="<?PHP echo $pedido['dados']['Pedido']['id']; ?>">
            <input type="hidden" name="acompanhamento" id="acompanhamento" value="<?PHP echo $pedido['dados']['Pedido']['acompanhamento']; ?>">
            DETALHES DO PEDIDO Nº <?PHP echo $pedido['dados']['Pedido']['id']; ?> <br />
            <p class="status-pedido">Status: <span id="status_online"><?PHP echo $pedido['dados']['SituacaoPedido']['descricao']; ?></span>
            <?PHP if($pedido['dados']['Pedido']['acompanhamento'] == 'S'){ ?>
            <img src="<?PHP echo $host; ?>/web/images/update.png" onclick="atualizar();">
            <?PHP } ?></p>
            <div id="loading" style="display: none">
                Atualizando Status <img src="<?PHP echo $host; ?>/images/loading.gif" width="25" height="25">
            </div>        
            </h4>
        <div class="row">
            <div class="col-md-12">
                <div class="info-cliente">
                    <p><i class="fa fa-user" aria-hidden="true"></i> 
                         <?PHP echo $_SESSION['Usuario']['nome']; ?>
                         <?PHP echo $_SESSION['Usuario']['sobrenome']; ?>
                    </p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> <?PHP echo $_SESSION['Usuario']['email']; ?></p>
                    <p>
                        <i class="fa fa-map-marker" aria-hidden="true"></i> 
                        <?PHP echo $pedido['dados']['Pedido']['endereco'] ?>, 
                        <?PHP echo $pedido['dados']['Pedido']['numero'] ?> - 
                        <?PHP echo $pedido['dados']['Pedido']['bairro'] ?>,
                        <?PHP echo $pedido['dados']['Pedido']['cidade'] ?>                        
                    </p>
                </div>
            </div>
        </div>
        <div class="table-responsive">  
            <table class="table-cart table" cellspacing="0">
                <thead>
                    <tr>
                        <th class="product-type-th">Tipo</th>
                        <th class="product-thumbnail-th"></th>
                        <th class="product-name-th">Item</th>
                        <th class="product-price-th">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <?PHP                                 
                      $i = 0;  
                      foreach($pedido['dados']['produtos'] as $produto){                     
                        ?>                                    
                        <tr class="cart_item">
                            <td class="product-type">
                                <ul>
                                    <?PHP if($produto['Produto']['metade'] == 'S'){ ?>
                                    <li>
                                        <input type="checkbox" disabled 
                                        <?PHP if($pedido['dados']['PedidoProduto'][$i]['metade'] == 'S') echo "checked" ?>
                                        > 
                                        Meia
                                    </li>
                                    <?PHP } ?>
                                    <?PHP if($produto['Produto']['mini'] == 'S'){ ?>
                                    <li>
                                        <input type="checkbox" disabled 
                                        <?PHP if($pedido['dados']['PedidoProduto'][$i]['mini'] == 'S') echo "checked" ?>
                                        > 
                                        Broto
                                    </li>
                                    <?PHP } ?>
                                </ul>       
                            </td>
                            <td class="product-thumbnail">
                                <a href="javascript:void(0);"><img width="120" src="<?PHP echo $produto['Produto']['img']; ?>"></a>                            
                            </td>
                            <td class="product-name">
                                <a href="javascript:void(0);"><?PHP echo $produto['Produto']['nome']; ?></a>                    
                            </td>
                            <td class="product-price">
                                <span class="amount">
                                    R$ <?PHP echo number_format($pedido['dados']['PedidoProduto'][$i]['valor'], 2, ',', '.'); ?>
                                </span>                   
                            </td>
                        </tr>       
                   <?PHP $i++; } ?>
                </tbody>
            </table>
        </div>
        <div class="options-cart">
            <h6>Opções:</h6><p><input type="checkbox" disabled> Borda recheada</p>                 
        </div>
        <div class="info-pedido">
            <div class="row">
                <div class="col-md-6">
                    <h3>FORMA DE PAGAMENTO: <?PHP echo strtolower($pedido['dados']['FormaPagamento']['descricao']); ?></h3>
                </div>
                <div class="col-md-6">
                    <h4>VALOR TOTAL <span>R$ <?PHP echo number_format($pedido['dados']['Pedido']['valor_total'], 2, ',', '.'); ?></span></h4>    
                </div>
            </div>

           <!--  QUANDO ESCOLHER DINHEIRO -->
           <?PHP if($pedido['dados']['Pedido']['forma_pagamento_id'] == 3){ ?>
            <div class="row">
                <div class="col-md-12">
                    <h5>TROCO 
                        <span>
                            R$ <?PHP echo number_format($pedido['dados']['Pedido']['troco'], 2, ',', '.'); ?>
                        </span>
                    </h5>  
                </div>
            </div>
            <?PHP } ?>
        </div>     
    </div>
</div>


<?php require_once('footer.php'); ?>