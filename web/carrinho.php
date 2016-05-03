<?php require_once('header.php'); ?>

<div class="feed2">
<div class="feedback2">
<script type="text/javascript">
function Nova()
{
location.href="<?PHP echo $host; ?>/compra"
}
  function Nova1()
{
location.href="<?PHP echo $host; ?>/categoria"
}
</script>
	<table>
		<tr>
			<th>
				<h1>Confira os itens de sua compra</h1>
			</th>
			<th>
				<input type="submit" onclick="Nova1()" value="Continuar comprando"></input>
			</th>
		</tr>
	</table>
<br>


<table>
  <tr>
    <th><h3>tipo</h3></th>
    <th></th>
    <th><h3>Item</h3></th>
    <th ><h3>QTD</h3></th>
    <th><h3>Preço</h3></th>
    <th ><h3>Remover</h3></th>

  </tr>


  <tr>
  	<td>
      <div class="checkbox">
        <label><input type="checkbox" value="">Meia</label>
        <label><input type="checkbox" value="">Broto</label> 
        <label><input type="checkbox" value="">Borda</label> Recheada?
      </div>
     </td>
    <td><img src="web/images/thumb-2.png"></td>
    <td > Mussarela </td>
    <td>1</td>
    <td>R$100</td>
    <td><a href="#"><img src="web/images/x.png" style=" height: 10px; width: 10px;"></a></td>
  </tr>


  <tr>
    <td>
      <div class="checkbox">
        <label><input type="checkbox" value="">Meia</label>
        <label><input type="checkbox" value="">Broto</label> 
        <label><input type="checkbox" value="">Borda</label> Recheada?
      </div>
     </td>
    <td><img src="web/images/thumb-2.png"></td>
    <td > Mussarela </td>
    <td>1</td>
    <td>R$150</td>
    <td><a href="#"><img src="web/images/x.png" style="height: 10px; width: 10px;"></a></td>
  </tr>


  <tr>
    <td>
      <div class="checkbox">
        <label><input type="checkbox" value="">Meia</label>
        <label><input type="checkbox" value="">Broto</label> 
        <label><input type="checkbox" value="">Borda</label> Recheada?
      </div>
     </td>
    <td><img src="web/images/thumb-2.png"></td>
    <td > Mussarela </td>
    <td>1</td>
    <td>R$300</td>
    <td><a href="#"><img src="web/images/x.png" style=" height: 10px; width: 10px;"></a></td>
  </tr>


  
  <tr>
    <td>
      <div class="checkbox">
        <label><input type="checkbox" value="">Meia</label>
        <label><input type="checkbox" value="">Broto</label> 
        <label><input type="checkbox" value="">Borda</label> Recheada?
      </div>
     </td>
    <td><img src="web/images/thumb-2.png"></td>
    <td > Mussarela </td>
    <td>1</td>
    <td>R$250</td>
    <td><a href="#"><img src="web/images/x.png" style=" height: 10px; width: 10px;"></a></td>
  </tr>



</table>
	<br>
	<table>


		<tr>
			<th>
				<h1 align="left">Total : R$500,00 </h1><br>
			</th>
			<th>
				<h1 align="left"></h1><br>
			</th>
		</tr>


		<tr>
			<th>
				<input type="submit" href="#" value="Limpar carrinho" align="left" id="button1"></input>
			</th>
			<th>
				<input type="submit" onclick="Nova()" value="Continuar compra" id="button2" ></input>
			</th>
		</tr>

	</table>
	<br>
</div>
</div>

<div class="clear"> </div>
<?php require_once('footer.php'); ?>