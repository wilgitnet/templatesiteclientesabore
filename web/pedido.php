<?php 
if(!empty($_SESSION['pedido'])){ 

	$valor_borda = 0;
	if(!empty($_SESSION['pedido']['valor_borda']))
		$valor_borda = $_SESSION['pedido']['valor_borda'];

	 ##calculando taxa e valores totais do pedido
	 $percentual = $percentual_definido / 100.0; 		 
	 $valor_total = $_SESSION['pedido']['total'] + $_SESSION['pedido']['valor_cep'];		 		 
	 $valor_total_antigo = $valor_total;
	 $valor_total = $valor_total + ($percentual * $valor_total);
	 $valor_percentual = $valor_total - $valor_total_antigo;
	 $valor_total_taxas = $valor_percentual + $_SESSION['pedido']['valor_cep'] + $valor_borda;

	?>					
<table class="meus-pedidos mgT50">
	<thead>
		<tr>
			<th>CARRINHO</th>
		</tr>
	</thead>
	<tbody>
		<?PHP foreach($_SESSION['pedido']['item'] as $item){ ?>
			<tr>
				<td>
					<p class="item-meus-pedidos"><?PHP echo $item['Produto']['nome']; ?> R$ :</p>
					<span class="valor-meus-pedidos">
						<?PHP echo number_format($item['Produto']['valor'], 2, ',', '.'); ?>
					</span>
				</td>
			</tr>
		<?PHP } ?>
		<?PHP if($valor_borda > 0){ ?>
		<tr>
			<td>
				<p class="item-meus-pedidos">Borda Recheada R$ :</p>
				<span class="valor-meus-pedidos">
					<?PHP echo number_format($valor_borda, 2, ',', '.'); ?>
				</span>
			</td>
		</tr>
		<?PHP } ?>
		<tr>
			<td><p class="sub-titulo-carrinho">Total Itens: </p>
				<span class="carrinho-valor">
					R$ <?PHP echo number_format($_SESSION['pedido']['total'], 2, ',', '.'); ?>
				</span>
			</td>
		</tr>
		<tr>
			<td>
				<p class="item-meus-pedidos">Frete:</p> 
				<span class="valor-meus-pedidos">
					<span id="valor_cep">					
						<?PHP echo number_format($_SESSION['pedido']['valor_cep'], 2, ',', '.'); ?>					
					</span>
				</span>
			</td>
		</tr>
		<tr>
			<td>
				<p class="item-meus-pedidos">Taxa do site: </p>
				<span class="valor-meus-pedidos">
					<span id="valor_cep">					
						<?PHP echo number_format($valor_percentual, 2, ',', '.'); ?>					
					</span>
				</span>
			</td>
		</tr>
		
	</tbody>
</table>
<a class="finalizar-pedido" href="<?PHP echo $host; ?>/carrinho">FINALIZAR PEDIDO</a>	
<?PHP }else{ ?>

<table class="meus-pedidos mgT50">
	<thead>
		<tr>
			<th>CARRINHO</th>
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

