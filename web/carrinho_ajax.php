<?PHP if(!empty($_SESSION['pedido'])){ ?>      

      <table>
      <tr>
        <th>
          <h1>Confira os itens de sua compra</h1>
        </th>
        <th>
          <select class="selectpicker" id="menu-rapido" style="width: 130px;">          
            <option>Menu rápido</option>
            <?PHP foreach($_SESSION['menu'] as $menu){ ?>
              <option value="<?PHP echo $host."/categoria/".$menu['Categorias']['placeholder']; ?>">
                <?PHP echo $menu['Categorias']['nome']; ?>
              </option>            
            <?PHP } ?>
          </select>
        </th>
      </tr>
    </table>
  <br>

  <table>
    <tr>
      <th><h3>tipo</h3></th>
      <th></th>
      <th><h3>Item</h3></th>      
      <th><h3>Preço</h3></th>
      <th ><h3>Remover</h3></th>

    </tr>
    <?PHP 
    	$i = 0;
    	foreach($_SESSION['pedido']['item'] as $item){?>
      <tr>
        <td>
          <div class="checkbox">
            <?PHP if($item['Produto']['metade'] == 'S'){ ?>
              <label>
              	<input type="checkbox" value="true" class="meia" plataforma="web" host="<?PHP echo $host; ?>/carrinho-ajax" 
        	   id_produto="<?PHP echo $item['Produto']['id'] ?>" <?PHP if(!empty($item['Produto']['usuario_metade'])) echo "checked"; ?>
        	   indice="<?PHP echo $i; ?>"
        	   >
              	Meia
              </label>
            <?PHP } ?>
            <?PHP if($item['Produto']['mini'] == 'S'){ ?>
              <label>
              	<input type="checkbox" value="true" class="broto" plataforma="web" host="<?PHP echo $host; ?>/carrinho-ajax" 
        	   id_produto="<?PHP echo $item['Produto']['id'] ?>" <?PHP if(!empty($item['Produto']['usuario_broto'])) echo "checked"; ?>
        	   indice="<?PHP echo $i; ?>"
        	   >
              		Broto
              	</label> 
            <?PHP } ?>                       
          </div>
         </td>
        <td><img src="<?PHP echo $item['Produto']['img']; ?>"></td>
        <td><?PHP echo $item['Produto']['nome']; ?></td>        
        <td>R$ 
          <?PHP 
            $valor = $item['Produto']['valor'];                                      
              echo number_format($valor, 2, ',', '.');
          ?>
        </td>
        <td>
        	<a href="javascript:void(0);" class="excluir" indice="<?PHP echo $i; ?>" plataforma="web" host="<?PHP echo $host; ?>/carrinho-ajax" 
        	   id_produto="<?PHP echo $item['Produto']['id'] ?>" id_cliente="<?PHP echo $_SESSION['id_cliente']; ?>">
        		<img src="web/images/x.png" style=" height: 10px; width: 10px;">
        	</a>
        </td>
      </tr>  
    <?PHP 
    	$i++;
    	}
     ?>
  </table>
  		<?PHP if($_SESSION['pedido']['borda'] == 'S'){ ?>  		
    		<label><input type="checkbox" 
    			<?PHP if(!empty($_SESSION['pedido']['valor_borda']))
	    			{
	    				if($_SESSION['pedido']['valor_borda'] > 0)
	    				{
	    					echo "checked";
	    				}	
	    			}
    			?>
    			plataforma="web" host="<?PHP echo $host; ?>/carrinho-ajax" class="borda" value="">Borda Recheada?</label>  
    	<?PHP } ?>
    <br>
    <table>
      <tr>
        <th>
          <h1 align="left">Total : R$ <?PHP echo number_format($_SESSION['pedido']['total'], 2, ',', '.'); ?> </h1><br>
        </th>
        <th>
          <h1 align="left"></h1><br>
        </th>
      </tr>
      <tr>
        <th>
          <input type="submit" href="javascript:void(0);" onclick="limparCarrinho()" value="Limpar carrinho" align="left" id="button1">
        </th>
        <th>
          <input type="submit" onclick="continuar()" value="Dados de entrega" id="button2" >
        </th>
      </tr>

    </table>
    </div>
    


      <?PHP }else{ ?>
    
        <table>
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
      <br>

      <?PHP } ?>