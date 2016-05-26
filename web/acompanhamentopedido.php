 <?php require_once('header.php'); ?>  

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

        <h4 class="title-info">DETALHES DO PEDIDO Nº 666</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="info-cliente">
                    <p><i class="fa fa-user" aria-hidden="true"></i>  Wilson Junior</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> wilson@seguidoresdofeliciano.com.br</p>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> Rua Pastor Marco Feliciano, 171 - Papuda, DF</p>
                </div>
            </div>
        </div>
        <table class="table-cart" cellspacing="0">
            <thead>
                <tr>
                    <th class="product-type-th">Tipo</th>
                    <th class="product-thumbnail-th"></th>
                    <th class="product-name-th">Item</th>
                    <th class="product-price-th">Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr class="cart_item">
                    <td class="product-type">
                        <ul>
                            <li><input type="checkbox" disabled> Meia</li>
                            <li><input type="checkbox" checked="checked" disabled> Inteira</li>
                        </ul>       
                    </td>
                    <td class="product-thumbnail">
                        <a href="#"><img width="120" src="<?PHP echo $host; ?>/web/images/pizza4.jpg"></a>                            
                    </td>
                    <td class="product-name">
                        <a href="">Pizza Frango com catupiry</a>                    
                    </td>
                    <td class="product-price">
                        <span class="amount">R$ 39,00</span>                   
                    </td>
                </tr>       
            </tbody>
        </table>
        <div class="options-cart">
            <h6>Opções:</h6><p><input type="checkbox" disabled> Borda recheada</p>                 
        </div>
        <div class="info-pedido">
            <div class="row">
                <div class="col-md-6">
                    <h3>FORMA DE PAGAMENTO: DINHEIRO</h3>
                </div>
                <div class="col-md-6">
                    <h4>VALOR TOTAL <span>R$ 39,00</span></h4>    
                </div>
            </div>

           <!--  QUANDO ESCOLHER DINHEIRO -->

           <!--  <div class="row">
                <div class="col-md-12">
                    <h5>TROCO <span>R$ 11,00</span></h5>  
                </div>
            </div> -->
        </div>     
    </div>
</div>


<?php require_once('footer.php'); ?>