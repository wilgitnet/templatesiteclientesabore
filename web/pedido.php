<?php if(!empty($_SESSION['pedido'])){ ?>					
<table class="meus-pedidos mgT50">
	<thead>
		<tr>
			<th>MEUS PEDIDOS</th>
		</tr>
	</thead>
	<tbody>
		<?PHP foreach($_SESSION['pedido']['item'] as $item){ ?>
			<tr>
				<td>
					<?PHP echo $item['Produto']['nome']; ?> R$ :
					<font color="red">
						<?PHP echo number_format($item['Produto']['valor'], 2, ',', '.'); ?>
					</font>
				</td>
			</tr>
		<?PHP } ?>
		<tr>
			<td>
				Frete: 
				<font color="red">
					<span id="valor_cep">					
						<?PHP echo number_format($_SESSION['pedido']['valor_cep'], 2, ',', '.'); ?>					
					</span>
				</font>
			</td>
		</tr>
		<tr>
			<td><p class="sub-titulo-carrinho">TOTAL: </p>
				<span class="carrinho-valor">
					R$ <?PHP echo number_format($_SESSION['pedido']['total'], 2, ',', '.'); ?>
				</span>
			</td>
		</tr>
	</tbody>
</table>
<a class="finalizar-pedido" href="<?PHP echo $host; ?>/carrinho">Ver Pedido Completo</a>	
<?PHP }else{ ?>

<table class="meus-pedidos mgT50">
	<thead>
		<tr>
			<th>MEUS PEDIDOS</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Seu carrinho está vazio</td>
		</tr>
		<tr>
			<td><p class="sub-titulo-carrinho">TOTAL: </p><span class="carrinho-valor">R$ 0,00</span></td>
		</tr>
	</tbody>
</table>
<a class="finalizar-pedido" href="<?PHP echo $host; ?>/categoria/<?PHP echo $_SESSION['placeholder']; ?>">REALIZAR PEDIDO</a>	

<?PHP } ?>

