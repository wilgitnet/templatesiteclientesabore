<?php require_once('header.php'); ?>
<script>
  function historico()
{
location.href="<?PHP echo $host; ?>/historico"
}

</script>
<div class="feedback2">

      <div class="container" align="center">
        <h3 class="responsive" >Detalhes do pedido 666</h3>
        <input type="submit" href="<?PHP echo $host; ?>/home" value="RETORNAR A HISTORICO" onclick="historico()"></input>
      <button id="buttoncam"><img src="mobile/images/webcam.png" width="50" height="35" id="cam" >Acompanhe Online</button>
      </div>
  <br>




<table class="table table-action">
    
      <tr>  
        <th class="t-small"><h3>Tipo</h3></th>
        <th class="t-medium" style="width: 250px;"></th>
        <th class="t-medium"><h3>Item</h3></th>
        <th><h3>Preço</h3></th>
      </tr>

      <tr>
    <td>
      <div class="checkbox disabled">
        <label><input type="checkbox" value="" disabled>Meia</label>
        <label><input type="checkbox" value="" disabled checked>Broto</label> 
      </div>
     </td>
      <td><img src="mobile/images/thumb-1.png" class="img-responsive" ></td>
      <td> Mussarela </td>    
      <td>R$50.00</td>
      </tr>


      <tr>
    <td>
      <div class="checkbox disabled">
        <label><input type="checkbox" value="" disabled>Meia</label>
        <label><input type="checkbox" value="" disabled checked>Broto</label> 
      </div>
     </td>
      <td><img src="mobile/images/thumb-1.png" class="img-responsive" ></td>
      <td> Mussarela </td>    
      <td>R$50.00</td>
      </tr>


      <tr>
    <td>
      <div class="checkbox disabled">
        <label><input type="checkbox" value="" disabled>Meia</label>
        <label><input type="checkbox" value="" disabled checked>Broto</label> 
      </div>
     </td>
      <td><img src="mobile/images/thumb-1.png" class="img-responsive" ></td>
      <td> Mussarela </td>    
      <td>R$50.00</td>
      </tr>
      

      <tr>
    <td>
      <div class="checkbox disabled">
        <label><input type="checkbox" value="" disabled>Meia</label>
        <label><input type="checkbox" value="" disabled checked>Broto</label> 
      </div>
     </td>
      <td><img src="mobile/images/thumb-1.png" class="img-responsive" ></td>
      <td> Mussarela </td>    
      <td>R$50.00</td>
      </tr>

      <tr id="linhatotal">
    <td>
      <div class="checkbox disabled">
        <label><input type="checkbox" value="" disabled checked>Borda</label> Recheada
      </div>
     </td>
      <td>Total de itens : 10</td>
      <td>Pagamento : Dinheiro</td>    
      <td>Total : R$500.00</td>
      </tr>

  </table>

</div>


    <br>
<div class="clear"> </div>
<?php require_once('footer.php'); ?>