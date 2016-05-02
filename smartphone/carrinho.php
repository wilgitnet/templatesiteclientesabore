<?php require_once('header.php'); ?>
<script>
  function Nova()
{
location.href="compra.php"
}
  function Nova1()
{
location.href="cardapio.php"
}
</script>
<div class="feedback2">

      <div class="container" align="center">
        <h3 class="responsive" >Confira  os  itens  de  sua  compra</h3>
        <input type="submit" href="index.php" value="Continuar comprando" onclick="Nova1()"></input>
      </div>
  <br>



<table class="table table-action">
    
      <tr>  
        <th class="t-small"><h3>Qnt</h3></th>
        <th class="t-medium"><h3>Item</h3></th>
        <th><h3>Preço</h3></th>
        <th class="t-medium"><h3>Remover</h3></th>
      </tr>

      <tr>
    <td>
     <input type="radio" name="tamanho" value="1">Inteira<br>
     <input type="radio" name="tamanho" value="1/5">Meia
     </td>
        <td><img src="smartphone/images/thumb-1.png" class="img-responsive" >Broto mussarela</td>
        <td>R$50.00</td>
        <td><a><img src="smartphone/images/x.png" width="15" height="15"></a></td>
      </tr>
      <tr>
    <td>
     <input type="radio" name="tamanho1" value="1">Inteira<br>
     <input type="radio" name="tamanho1" value="1/5">Meia
     </td>
        <td><img src="smartphone/images/thumb-1.png" class="img-responsive" >Broto mussarela</td>
        <td>R$50.00</td>
        <td><img src="smartphone/images/x.png" width="15" height="15"></td>
      </tr>
      <tr>
    <td>
     <input type="radio" name="tamanho2" value="1">Inteira<br>
     <input type="radio" name="tamanho2" value="1/5">Meia
     </td>
        <td><img src="smartphone/images/thumb-1.png" class="img-responsive" >Broto mussarela</td>
        <td>R$50.00</td>
        <td><img src="smartphone/images/x.png" width="15" height="15"></td>
      </tr>
      <tr>
    <td>
     <input type="radio" name="tamanho3" value="1">Inteira<br>
     <input type="radio" name="tamanho3" value="1/5">Meia
     </td>
        <td><img src="smartphone/images/thumb-1.png" class="img-responsive" >Broto mussarela</td>
        <td>R$50.00</td>
        <td><a><img src="smartphone/images/x.png" width="15" height="15"></a></td>
      </tr>

    <tr>
        <td></td>
        <td></td>
        <th> Total : R$500,00 </th>
        <td></td>
    </tr>
  </table>
</div>
    <div class="container" align="center">
      <button id="button2" value="Limpar" class="btn btn-responsive" onclick="Nova()">Continuar compra</button>
      <button id="button1" value="Limpar" class="btn btn-responsive">Limpar carrinho</button>
      
    </div>
    <br>
<div class="clear"> </div>
<?php require_once('footer.php'); ?>