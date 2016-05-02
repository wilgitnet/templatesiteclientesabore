<?php require_once('header.php'); ?>
<script>
  function Nova()
{
location.href="<?PHP echo $host; ?>/compra"
}
  function Nova1()
{
location.href="<?PHP echo $host; ?>/categoria"
}
</script>
<div class="feedback2">

      <div class="container" align="center">
        <h3 class="responsive" >Confira  os  itens  de  sua  compra</h3>
        <input type="submit" href="<?PHP echo $host; ?>/home" value="Continuar comprando" onclick="Nova1()"></input>
      </div>
<br>




<table class="table table-action">
    
      <tr>  
        <th class="t-small"><h3>Tipo</h3></th>
        <th class="t-medium"><h3></h3></th>
        <th class="t-medium"><h3>Item</h3></th>
        <th ><h3>QTD</h3></th>
        <th><h3>Preço</h3></th>
        <th class="t-medium"><h3>Remover</h3></th>
      </tr>

      <tr>
    <td>
      <div class="checkbox">
        <label><input type="checkbox" value="">Meia</label>
        <label><input type="checkbox" value="">Broto</label> 
        <label><input type="checkbox" value="">Borda</label> Recheada?
      </div>
     </td>
        <td><img src="mobile/images/thumb-1.png" class="img-responsive"></td>
        <td > Mussarela </td>
        <td>1</td>
        <td>R$50.00</td>
        <td><a><img src="mobile/images/x.png" width="15" height="15"></a></td>
      </tr>


      <tr>
    <td>
      <div class="checkbox">
        <label><input type="checkbox" value="">Meia</label>
        <label><input type="checkbox" value="">Broto</label> 
        <label><input type="checkbox" value="">Borda</label> Recheada?
      </div>
     </td>
        <td><img src="mobile/images/thumb-1.png" class="img-responsive"></td>
        <td > Mussarela </td>
        <td>1</td>
        <td>R$50.00</td>
        <td><img src="mobile/images/x.png" width="15" height="15"></td>
      </tr>


      <tr>
    <td>
      <div class="checkbox">
        <label><input type="checkbox" value="">Meia</label>
        <label><input type="checkbox" value="">Broto</label> 
        <label><input type="checkbox" value="">Borda</label> Recheada?
      </div>
     </td>
        <td><img src="mobile/images/thumb-1.png" class="img-responsive"></td>
        <td > Mussarela </td>
        <td>1</td>
        <td>R$50.00</td>
        <td><img src="mobile/images/x.png" width="15" height="15"></td>
      </tr>
      

      <tr>
    <td>
      <div class="checkbox">
        <label><input type="checkbox" value="">Meia</label>
        <label><input type="checkbox" value="">Broto</label> 
        <label><input type="checkbox" value="">Borda</label> Recheada?
      </div>
     </td>
        <td><img src="mobile/images/thumb-1.png" class="img-responsive"></td>
        <td > Mussarela </td>
        <td>1</td>        
        <td>R$50.00</td>
        <td><a><img src="mobile/images/x.png" width="15" height="15"></a></td>
      </tr>

    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <th> Total : R$500,00 </th>
        <td></td>
    </tr>
  </table>
</div>


    <div class="container" align="center">
      <button id="button1" value="Limpar" class="btn btn-responsive">Limpar carrinho</button>
      <button id="button2" value="Limpar" class="btn btn-responsive" onclick="Nova()">Continuar compra</button>
    </div>
    <br>
<div class="clear"> </div>
<?php require_once('footer.php'); ?>