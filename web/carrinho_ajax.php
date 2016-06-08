<?PHP if(!empty($_SESSION['pedido'])){ ?>
<div class="table-responsive">      
  <table class="table-cart table" cellspacing="0">
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
          <?PHP 
            $i = 0;
            foreach($_SESSION['pedido']['item'] as $item){?>
              <tr class="cart_item">

                  <td class="product-type">
                      <ul>
                        <?PHP if($item['Produto']['metade'] == 'S'){ ?>
                          <li>
                            <input type="checkbox" value="true" class="meia" plataforma="web" host="<?PHP echo $host; ?>/carrinho-ajax" 
                           id_produto="<?PHP echo $item['Produto']['id'] ?>" <?PHP if(!empty($item['Produto']['usuario_metade'])) echo "checked"; ?>
                           indice="<?PHP echo $i; ?>">                           
                            Meia
                            </li>
                          <?PHP } ?>
                          <?PHP if($item['Produto']['mini'] == 'S'){ ?>
                            <li>
                            <input type="checkbox" value="true" class="broto" plataforma="web" host="<?PHP echo $host; ?>/carrinho-ajax" 
                           id_produto="<?PHP echo $item['Produto']['id'] ?>" <?PHP if(!empty($item['Produto']['usuario_broto'])) echo "checked"; ?>
                           indice="<?PHP echo $i; ?>">                           
                              Broto
                            </li>
                          <?PHP } ?>
                      </ul>       
                  </td>

                  <td class="product-thumbnail">
                      <a href="#"><img width="120" src="<?PHP echo $item['Produto']['img']; ?>"></a>                            
                  </td>

                  <td class="product-name">
                      <a href="javascript:void(0);"><?PHP echo $item['Produto']['nome']; ?></a>                    
                  </td>

                  <td class="product-price">
                      <span class="amount">
                          <?PHP 
                            $valor = $item['Produto']['valor'];                                      
                            echo number_format($valor, 2, ',', '.');
                          ?>
                        </span>                   
                  </td>

                  <td class="product-remove">
                      <a href="javascript:void(0);" class="excluir" indice="<?PHP echo $i; ?>" 
                        plataforma="web" host="<?PHP echo $host; ?>/carrinho-ajax" 
                       id_produto="<?PHP echo $item['Produto']['id'] ?>" id_cliente="<?PHP echo $_SESSION['id_cliente']; ?>">
                      <img src="web/images/x.png" style=" height: 10px; width: 10px;">
                    </a>
                  </td>
              </tr>
          <?PHP 
            $i++;
            }
           ?>                     
        </tbody>
    </table>
    </div>
    <div class="options-cart">
    <?PHP if($_SESSION['pedido']['borda'] == 'S'){ ?>     
        <h6>Opções:</h6>
          <p>
            <input type="checkbox" 
          <?PHP if(!empty($_SESSION['pedido']['valor_borda']))
              {
                if($_SESSION['pedido']['valor_borda'] > 0)
                {
                  echo "checked";
                } 
              }
            ?>
            plataforma="web" host="<?PHP echo $host; ?>/carrinho-ajax" class="borda" value=""> 
            <span>Borda recheada</span>
          </p>                 
    <?PHP } ?>
    </div>
    <div class="cart-next">
        <h5>TOTAL <span>R$ <?PHP echo number_format($_SESSION['pedido']['total'], 2, ',', '.'); ?></span> </h5>
    </div>
    
    <div class="buttons-cart">
        <input type="submit" class="button limpar-carrinho" onclick="limparCarrinho()" value="Limpar carrinho"> 
        <input type="submit" class="dados-de-entrega" onclick="continuar()" value="Dados de Entrega">
    </div> 

<?PHP }else{ ?>
    
  <div class="row">
    <div class="carrinho-vazio">
      <div class="col-md-12">
        <h3>SEU CARRINHO ESTA VAZIO :(</h3>
      </div>
      <div class="col-md-12">
        <div class="buttons-cart">
          <input type="submit" class="button limpar-carrinho" onclick="gohistorico()" value="Historico de compras"></input>
          <input type="submit"  class="dados-de-entrega" onclick="returncardapio()" value="Realizar um Pedido Agora">         
        </div>
      </div>
    </div>
  </div>

<?PHP } ?>


<!--         <table>
          <tr>
            <th>
              <h1>SEU CARRINHO ESTA VAZIO :(</h1>
            </th>
            <th>
              <input type="submit" onclick="returncardapio()" value="Realizar um Pedido Agora"></input>
              <input type="submit" onclick="gohistorico()" value="Historico de compras"></input>
            </th>
          </tr>
        </table>        
      <br> -->