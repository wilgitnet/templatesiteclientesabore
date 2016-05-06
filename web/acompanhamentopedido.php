<?php require_once('header.php'); ?>

<div class="feed2">
<div class="feedback2">
<script type="text/javascript">
  function returnhistorico()
{
location.href="<?PHP echo $host; ?>/historico"
}
</script>
	<table>
		<tr>
			<th>
				<h1>Detalhes do pedido 666</h1>
			</th>
			<th>
				<input type="submit" onclick="returnhistorico()" value="Retornar a historico"></input>
			</th>
			<th>
			<button id="buttoncam"><img src="web/images/webcam.png" width="50" height="35" id="cam" >Acompanhe Online</button>
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


  </tr>


  <tr>
  	<td>
      <div class="checkbox disabled">
        <label><input type="checkbox" value="" disabled>Meia</label>
        <label><input type="checkbox" value="" disabled checked>Broto</label> 
      </div>
     </td>
    <td><img src="web/images/thumb-2.png"></td>
    <td > Mussarela </td>
    <td>R$100</td>
  </tr>


  <tr>
    <td>
      <div class="checkbox disabled">
        <label><input type="checkbox" value="" disabled>Meia</label>
        <label><input type="checkbox" value="" disabled checked>Broto</label> 
      </div>
     </td>
    <td><img src="web/images/thumb-2.png"></td>
    <td > Mussarela </td>
    <td>R$100</td>
  </tr>


  <tr>
    <td>
      <div class="checkbox disabled">
        <label><input type="checkbox" value="" disabled>Meia</label>
        <label><input type="checkbox" value="" disabled checked>Broto</label> 
      </div>
     </td>
    <td><img src="web/images/thumb-2.png"></td>
    <td > Mussarela </td>
    <td>R$100</td>
  </tr>

  
  <tr>
    <td>
      <div class="checkbox disabled">
        <label><input type="checkbox" value="" disabled>Meia</label>
        <label><input type="checkbox" value="" disabled checked>Broto</label> 
      </div>
     </td>
    <td><img src="web/images/thumb-2.png"></td>
    <td > Mussarela </td>
    <td>R$100</td>
  </tr>

  <tr id="linhatotal">
     <td>
        <input type="checkbox" value="" disabled checked> Borda recheada
     </td>
    <td>Quantidade de itens : 10</td>
    <td >Pagamento : Dinheiro </td>
    <td><h2>Total : R$500.00</h2></td>
  </tr>

</table>
	<br>

</div>
</div>

<div class="clear"> </div>
<?php require_once('footer.php'); ?>