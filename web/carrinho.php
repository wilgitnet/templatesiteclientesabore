 <?php require_once('header.php'); ?> 
    <div class="nz-breadcrumbs">
        <div class="container">
            <a href="">Inicio</a>
            <i class="fa fa-angle-double-right"></i>
            <span>Carrinho</span>
        </div>
    </div>

    
    <div class="content content-checkout">
        <div class="container">

            <div class="cart-header">

                <h4>CONFIRA OS ITENS DE SUA COMPRA</h4> 

                <select>
                  <option value="pizzas">PIZZAS</option>
                  <option value="bebidas">BEBIDAS</option>
                </select>

            </div>

            <table class="table-cart" cellspacing="0">
                <thead>
                    <tr>
                        <th class="product-type-th">Tipo</th>
                        <th class="product-thumbnail-th"></th>
                        <th class="product-name-th">Item</th>
                        <th class="product-price-th">Preço</th>
                        <th class="product-remove-th">Remover</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="cart_item">

                        <td class="product-type">
                            <ul>
                                <li><input type="checkbox"> Meia</li>
                                <li><input type="checkbox"> Inteira</li>
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

                        <td class="product-remove">
                            <a href="#">×</a>
                        </td>
                    </tr>

                    <tr class="cart_item">

                        <td class="product-type">
                            <ul>
                                <li><input type="checkbox"> Meia</li>
                                <li><input type="checkbox"> Inteira</li>
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

                        <td class="product-remove">
                            <a href="#">×</a>
                        </td>
                    </tr>
                    <tr class="cart_item">

                        <td class="product-type">
                            <ul>
                                <li><input type="checkbox"> Meia</li>
                                <li><input type="checkbox"> Inteira</li>
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

                        <td class="product-remove">
                            <a href="#">×</a>
                        </td>
                    </tr>                    

                </tbody>
            </table>
            <div class="options-cart">
                <h6>Opções:</h6><p><input type="checkbox"> <span>Borda recheada</span></p>                 
            </div>
            <div class="cart-next">
                <h5>TOTAL <span>R$ 200,26</span> </h5>
            </div>
            
            <div class="buttons-cart">
                <input type="submit" class="button limpar-carrinho" value="Limpar carrinho"> 
                <input type="submit" class="dados-de-entrega" value="Dados de Entrega">
            </div> 
             
        </div>
    </div>
<?php require_once('footer.php'); ?>