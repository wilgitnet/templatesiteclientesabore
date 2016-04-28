<?php require_once('header.php'); ?>

<div class="feed2">
<div class="feedback2">
<script type="text/javascript">
  function Nova()
{
location.href="compra.php"
}
  function Nova1()
{
location.href="cardapio.php"
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
    <th><h3>Qnt</h3></th>
    <th></th>
    <th><h3>Item</h3></th>
    <th ></th>
    <th><h3>Preço</h3></th>
    <th ></th>
    <th ><h3>Remover</h3></th>
    <th ></th>
  </tr>
  <tr>
  	<td>1/2</td>
    <td><img src="web/images/thumb-2.png"></td>
    <td >Pizza Mussarela</td>
    <td></td>
    <td>R$100</td>
    <td></td>
    <td><a href="#"><img src="web/images/x.png" style=" height: 10px; width: 10px;"></a></td>
    <td></td>
  </tr>
  <tr>
  	<td>1</td>
    <td><img src="web/images/thumb-2.png"></td>
    <td>Broto Calabresa</td>
    <td></td>
    <td>R$150</td>
    <td></td>
    <td><a href="#"><img src="web/images/x.png" style="height: 10px; width: 10px;"></a></td>
    <td></td>
  </tr>
  <tr>
  	<td>1</td>
    <td><img src="web/images/thumb-2.png"></td>
    <td>Pizza Mortadela</td>
    <td></td>
    <td>R$300</td>
    <td></td>
    <td><a href="#"><img src="web/images/x.png" style=" height: 10px; width: 10px;"></a></td>
    <td></td>
  </tr>
  <tr>
  	<td>1</td>
    <td><img src="web/images/thumb-2.png"></td>
    <td>Broto Pepinão</td>
    <td></td>
    <td>R$250</td>
    <td></td>
    <td><a href="#"><img src="web/images/x.png" style=" height: 10px; width: 10px;"></a></td>
    <td></td>
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
	<div>

	</div>
</div>
</div>

<div class="clear"> </div>
<?php require_once('footer.php'); ?>