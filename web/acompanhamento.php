<?php require_once('header.php'); ?>

<div class="feed2">
<div class="feedback2">
<script type="text/javascript">
function continuar()
{
location.href="<?PHP echo $host; ?>/compra"
}
  function returncardapio()
{
location.href="<?PHP echo $host; ?>/categoria"
}
</script>
	<table>
		<tr>
			<th>
				<h1>Seus ultimos pedidos</h1>
			</th>
			<th>
				<input type="submit" onclick="returncardapio()" value="Continuar comprando"></input>
			</th>
		</tr>
	</table>
<br>


<table>
  <tr>
    <th><h3>Cód Prod.</h3></th>
    <th></th>
    <th><h3>Item</h3></th>
    <th ><h3>QTD</h3></th>
    <th><h3>Data do pedido</h3></th>
    <th ><h3>Status</h3></th>
    <th ><h3>Acompanhe ao vivo</h3></th>
  </tr>


  <tr>
  	<td>666</td>
    <td><img src="web/images/thumb-2.png"></td>
    <td > Mussarela </td>
    <td>1</td>
    <td>20/02/2016</td>
    <td>Entregue</td> 
    <td></td>
  </tr>


  <tr>
    <td>666</td>
    <td><img src="web/images/thumb-2.png"></td>
    <td > Mussarela </td>
    <td>1</td>
    <td>20/02/2016</td>
    <td>Entregue</td> 
    <td></td>
  </tr>


  <tr>
    <td>666</td>
    <td><img src="web/images/thumb-2.png"></td>
    <td > Mussarela </td>
    <td>1</td>
    <td>20/02/2016</td>
    <td>Entregue</td> 
    <td></td>
    </tr>


  
  <tr>
    <td>666</td>
    <td><img src="web/images/thumb-2.png"></td>
    <td > Mussarela </td>
    <td>1</td>
    <td>20/02/2016</td>
    <td>Entregue</td> 
    <td></td>
  </tr>
</table>
</div>
</div>
<br>

<div class="clear"> </div>
<?php require_once('footer.php'); ?>