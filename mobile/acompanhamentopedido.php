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
      </div>
  <br>




<table class="table table-action">
    
      <tr>  
        <th class="t-small"><h3>Tipo</h3></th>
        <th class="t-medium"><h3>Item</h3></th>
        <th><h3>Preço</h3></th>
        <th class="t-medium"><h3>Método Pagamento</h3></th>
        <th><h3> Acompanhe<br> da pizzaria</h3> </th>
      </tr>

      <tr>
    <td>
      <div class="checkbox disabled">
        <label><input type="checkbox" value="" disabled>Meia</label>
        <label><input type="checkbox" value="" disabled checked>Broto</label> 
        <label><input type="checkbox" value="" disabled>Borda</label> Recheada?
      </div>
     </td>
      <td><img src="mobile/images/thumb-1.png" class="img-responsive" >1 Mussarela</td>    
      <td>R$50.00</td>
      <td>Dinheiro</td>
      <td><img src="mobile/images/cam-icon.png" width="60" height="60"></td>
      </tr>


      <tr>
    <td>
      <div class="checkbox disabled">
        <label><input type="checkbox" value="" disabled>Meia</label>
        <label><input type="checkbox" value="" disabled checked>Broto</label> 
        <label><input type="checkbox" value="" disabled>Borda</label> Recheada?
      </div>
     </td>
      <td><img src="mobile/images/thumb-1.png" class="img-responsive" >1 Mussarela</td>    
      <td>R$50.00</td>
      <td>Dinheiro</td>
      <td><img src="mobile/images/cam-icon.png" width="60" height="60"></td>
      </tr>


      <tr>
    <td>
      <div class="checkbox disabled">
        <label><input type="checkbox" value="" disabled>Meia</label>
        <label><input type="checkbox" value="" disabled checked>Broto</label> 
        <label><input type="checkbox" value="" disabled>Borda</label> Recheada?
      </div>
     </td>
      <td><img src="mobile/images/thumb-1.png" class="img-responsive" >1 Mussarela</td>    
      <td>R$50.00</td>
      <td>Dinheiro</td>
      <td><img src="mobile/images/cam-icon.png" width="60" height="60"></td>
      </tr>
      

      <tr>
    <td>
      <div class="checkbox disabled">
        <label><input type="checkbox" value="" disabled>Meia</label>
        <label><input type="checkbox" value="" disabled checked>Broto</label> 
        <label><input type="checkbox" value="" disabled>Borda</label> Recheada?
      </div>
     </td>
      <td><img src="mobile/images/thumb-1.png" class="img-responsive" >1 Mussarela</td>    
      <td>R$50.00</td>
      <td>Dinheiro</td>
      <td><img src="mobile/images/cam-icon.png" width="60" height="60"></td>
      </tr>
  </table>
  <p align="center"> Total : R$500.00 </p>
</div>


    <br>
<div class="clear"> </div>
<?php require_once('footer.php'); ?>