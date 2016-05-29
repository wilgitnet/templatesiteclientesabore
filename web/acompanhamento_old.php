<?php require_once('header.php'); ?>

<div class="feed2">
<div class="feedback2">
<script type="text/javascript">
function returnhome()
{
location.href="<?PHP echo $host; ?>/"
}
</script>
	<table>
		<tr>
			<th>
				<h1>Historico de Compras</h1>
			</th>
			<th>
				<input type="submit" onclick="returnhome()" value="Retornar para Home"></input>
			</th>
		</tr>
	</table>
<br>


<table>
  <tr>
    <th><h3>Cód Pedido</h3></th>
    <th><h3>Data do pedido</h3></th>
    <th ><h3>Valor</h3></th>
    <th ><h3>Status</h3></th>
    <th></th>
  </tr>


  <tr>
  	<td>666</td>
    <td>20/02/2016</td>
    <td>R$50.00 </td>
    <td>Entregue</td>
    <td><a href="acompanhamento">Ver detalhes</a></td>
  </tr>


  <tr>
    <td>666</td>
    <td>20/02/2016</td>
    <td>R$50.00 </td>
    <td>Entregue</td>
    <td><a href="#">Ver detalhes</a></td>
  </tr>


  <tr>
    <td>666</td>
    <td>20/02/2016</td>
    <td>R$50.00 </td>
    <td>Entregue</td>
    <td><a href="#">Ver detalhes</a></td>
  </tr>


  
  <tr>
    <td>666</td>
    <td>20/02/2016</td>
    <td>R$50.00 </td>
    <td>Entregue</td>
    <td><a href="#">Ver detalhes</a></td>
  </tr>
</table>
</div>
</div>
<br>

<div class="clear"> </div>
<?php require_once('footer.php'); ?>