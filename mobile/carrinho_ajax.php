<?PHP if(!empty($_SESSION['pedido'])){ ?>     
	<script src="<?PHP echo $host; ?>/js/mobilesmart.js"></script>



<div class="boxes-cardapio">
	<div class="order">	
		<ul>
			<li>
				<h3 id="cardapio"><i class="glyphicon glyphicon-menu-down"></i>  Cardapio</h3>
				<div id="cardapio-expand" style="display: none">
				<?PHP require_once('cardapioarq.php') ?>
				</div>		
			</li>
		</ul>
	</div>
</div>	


	   <div class="container" align="center">
	        <h3 class="responsive" >Confira  os  itens  de  sua  compra</h3>
	        <input type="submit" href="javascript:void(0);" value="Continuar comprando" onclick="returncardapio()"></input>
	      </div>
		<br>

	<table class="table table-action">
	    
	      <tr>  
	        <th class="t-small"><h3>Tipo</h3></th>
	        <th class="t-medium"><h3></h3></th>
	        <th class="t-medium"><h3>Item</h3></th>	        
	        <th><h3>Preço</h3></th>
	        <th class="t-medium"><h3>Remover</h3></th>
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
		        <td><img src="<?PHP echo $item['Produto']['img']; ?>" class="img-responsive"></td>
		        <td><?PHP echo $item['Produto']['nome']; ?></td>		        
		        <td>R$ <?PHP echo number_format($item['Produto']['valor'], 2, ',', '.'); ?></td>
		        <td>
		        <a href="javascript:void(0);" class="excluir" indice="<?PHP echo $i; ?>" plataforma="web" host="<?PHP echo $host; ?>/carrinho-ajax" 
        	   id_produto="<?PHP echo $item['Produto']['id'] ?>" id_cliente="<?PHP echo $_SESSION['id_cliente']; ?>">
		        		<img src="mobile/images/x.png" width="15" height="15">
		        	</a>
		        </td>
		   </tr>	
		<?PHP 
	    $i++;
	    	}
     	?>    
	    <tr>
	        <td>
	        	<?PHP if($_SESSION['pedido']['borda'] == 'S'){ ?>  		
	    		<input type="checkbox" 
	    			<?PHP if(!empty($_SESSION['pedido']['valor_borda']))
		    			{
		    				if($_SESSION['pedido']['valor_borda'] > 0)
		    				{
		    					echo "checked";
		    				}	
		    			}
	    			?>
	    			plataforma="web" host="<?PHP echo $host; ?>/carrinho-ajax" class="borda" value="">Borda Recheada?
	    	<?PHP } ?>
    		<br>
    	</td>
	        <td></td>
	        <td></td>
	        <td></td>
	        <th> Total : R$ <?PHP echo number_format($_SESSION['pedido']['total'], 2, ',', '.'); ?> </th>
	        <td></td>
	    </tr>
	  </table>	  

	    <div class="container" align="center">
	      <button id="button1" value="Limpar" class="btn btn-responsive" onclick="limparCarrinho()">Limpar carrinho</button>
	      <button id="button2" value="Limpar" class="btn btn-responsive" onclick="continuar()">Dados de entrega</button>
	    </div>
	    <br>
	  <?PHP }else{ ?>
	  	<div class="container" align="center">
	        <h3 class="responsive" ><h2>SEU CARRINHO ESTA VAZIO :(</h3>
	        <input type="submit" href="<?PHP echo $host; ?>/home" value="Realizar um Pedido Agora" onclick="returncardapio()"></input>
	        <input type="submit" href="<?PHP echo $host; ?>/historico" value="Historico de pedidos" onclick="gohistorico()"></input>
	      </div>
		<br>	

	  <?PHP } ?>