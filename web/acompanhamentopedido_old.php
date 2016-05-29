<?php require_once('header.php'); ?>
<?PHP require_once('app/controller/acompanhamento_controller.php'); ?>

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
				<h1>Detalhes do pedido <?PHP echo $pedido['dados']['Pedido']['id']; ?></h1>
			</th>
			<th>
				<input type="submit" onclick="returnhistorico()" value="Retornar a historico"></input>
			</th>
			<th>
			<button id="buttoncam"><img src="<?PHP echo $host;?>/web/images/webcam.png" width="50" height="35" id="cam" >Acompanhe Online</button>
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

  <?PHP 
  $i = 0;  
  foreach($pedido['dados']['produtos'] as $produto){ ?>
  <tr>
  	<td>
      <div class="checkbox disabled">
        <label>
            <input type="checkbox" value="" disabled <?PHP if($pedido['dados']['PedidoProduto'][$i]['metade'] == 'S') echo "checked" ?>>
            Meia
        </label> 
        <label>
            <input type="checkbox" value="" disabled <?PHP if($pedido['dados']['PedidoProduto'][$i]['mini'] == 'S') echo "checked" ?>>
            Broto
        </label> 
      </div>
     </td>
    <td><img src="<?PHP echo $produto['Produto']['img']; ?>"></td>
    <td > <?PHP echo $produto['Produto']['nome']; ?> </td>
    <td>R$ <?PHP echo number_format($pedido['dados']['PedidoProduto'][$i]['valor'], 2, ',', '.'); ?></td>
  </tr>
<?PHP $i++; } ?>

  <tr id="linhatotal">
     <td>
        <input type="checkbox" value="" disabled checked> Borda recheada
     </td>
    <td>Quantidade de itens : <?PHP echo $i; ?></td>
    <td >Pagamento : <?PHP echo strtolower($pedido['dados']['FormaPagamento']['descricao']); ?> </td>
    <td><h2>Total : R$ <?PHP echo number_format($pedido['dados']['Pedido']['valor_total'], 2, ',', '.'); ?></h2></td>
  </tr>

</table>
	<br>

</div>
</div>

<div class="clear"> </div>
<?php require_once('footer.php'); ?>