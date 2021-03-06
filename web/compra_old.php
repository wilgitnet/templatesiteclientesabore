
<?php require_once('header.php'); ?>
<?PHP require_once('app/controller/compra_controller.php'); ?>

<script src="<?PHP echo $host; ?>/js/compra.js"></script>
<script type="text/javascript">
    function returncarrinho()
    {
      location.href="<?PHP echo $host; ?>/carrinho"
    }	
    function returnendereco()
    {
      location.href="<?PHP echo $host; ?>/compra"
    }	

</script>


<div class="grids" id="compra_expand">
	<div class="feedback2" id="refresh" style="display:none">
		<br>
	      <table>
	          <tr>
	            <th>
	              <h4>Aguarde, realizando sua solicitação</h4>              
	              <img src="<?PHP echo $host; ?>/images/loading.gif" width="100" height="100">           
	            </th>                          
	          </tr>
	        </table>                     
	        <br>        
	</div>

	
	<div class='alert' id="cep-alert" style="display:none"></div>    
	<div id="endereco_completo">
		<h4>Endereço de Entrega</h4>				
		<form id="endereco_compra">
			<div class="feedback2">				
				<br>				
				<div id="refresh" style="display:none">
			      <table>
			          <tr>
			            <th>
			              <h4>Aguarde, verificando o valor da entrega</h4>              
			              <img src="<?PHP echo $host; ?>/images/loading.gif" width="100" height="100">            
			            </th>                          
			          </tr>
			        </table>                     
			                
			    </div>
			    		   
					<table>
		          <tr>
		            <th>
		              <h3 align="left">Digite as informações para entrega</h3>                    
		            </th>                          
		            <th>
		             <input type="button" id="buttonreturn1" value="Retornar ao carrinho" onclick="returncarrinho()"></input>
		            </th>
		          </tr>
		        </table>

				<br>										
					<div id="loading" style="display:none">
		                <img src="images/loading.gif" width="25" height="25" align="right">
		            </div>   
					<input type="text" placeholder="CEP" value="<?PHP if(!empty($_SESSION['pedido']['endereco']['cep'])) echo $_SESSION['pedido']['endereco']['cep']; ?>" name="cep" id="cep" maxlength="9" />      

		            <input type="text" value="<?PHP if(!empty($_SESSION['pedido']['endereco']['estado'])) echo $_SESSION['pedido']['endereco']['estado']; ?>" placeholder="Estado" Readonly="Readonly" name="estado" id="estado">  
		        <br>
		        	<input type="text" value="<?PHP if(!empty($_SESSION['pedido']['endereco']['endereco'])) echo $_SESSION['pedido']['endereco']['endereco']; ?>" placeholder="Endereço residencial" name="endereco" id="endereco" maxlength="150" />      

		            <input type="text" value="<?PHP if(!empty($_SESSION['pedido']['endereco']['cidade'])) echo $_SESSION['pedido']['endereco']['cidade']; ?>" placeholder="Cidade" Readonly="Readonly" name="cidade" id="cidade" maxlength="50"/>

		            <input type="text" value="<?PHP if(!empty($_SESSION['pedido']['endereco']['bairro'])) echo $_SESSION['pedido']['endereco']['bairro']; ?>" placeholder="Bairro" name="bairro" id="bairro" maxlength="50" />

		            <input type="text" value="<?PHP if(!empty($_SESSION['pedido']['endereco']['numero'])) echo $_SESSION['pedido']['endereco']['numero']; ?>" placeholder="Número" name="numero" id="number" maxlength="10" />

		            <input type="text" value="<?PHP if(!empty($_SESSION['pedido']['endereco']['complemento'])) echo $_SESSION['pedido']['endereco']['complemento']; ?>" placeholder="Complemento" name="complemento" id="complement" maxlength="150" />

		            <?PHP if(empty($_SESSION['Usuario'])){ ?>
				        <input type="text" value="" placeholder="Nome" name="nome" id="nome" maxlength="50" />
						<input type="text" value="" placeholder="Sobrenome" name="sobrenome" id="sobrenome" maxlength="50" />		
			        	<br>

				        <input type="text" value="" placeholder="Endereço de email" name="email" id="email" maxlength="100" />
						<input type="text" value="" placeholder="Telefone celular" name="celular" id="celular" maxlength="30" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" />
				        <input type="password" value="" placeholder="Senha para acompanhamento" name="senha" id="senha" maxlength="20" />		
						<input type="password" id="senha1" value="" name="senha1" placeholder="Repita sua senha" maxlength="20" />            
					<?PHP } ?>
		           <br>			
				<input type="hidden" name="cliente_id" id="cliente_id" value="<?PHP echo $_SESSION['id_cliente']; ?>">			
				<input type="hidden" name="valor_km_entrega" id="valor_km_entrega" value="<?PHP echo $_SESSION['valor_km_entrega']; ?>">			
			</div>
		</form>	 
		<button type="submit" id="button3" class="finalizar-endereco" value="Prosseguir para pagamento" />Prosseguir para Pagamento</button>	
	</div>	


<div id="pagamento_expand" style="display: none">
	
	<h4>Escolha seu método de pagamento</h4>
				

		<div class="feedback2">
		<table>
		          <tr>
		            <th>
		              <h3 align="left">Opa, quase acabando!!</h3>                    
		            </th>                          
		            <th>
		             <input type="button" id="buttonreturn2" value="Retornar ao endereco" class="returnendereco" onclick="returnendereco()"></input>
		            </th>
		          </tr>
		        </table>
			<table width="100%">
				<tr>
					<th id="dinheiro"><img src="web/images/icondinheiro.png" height="100" width="140"><h3>Dinheiro</h3></th>
					<th></th>
					<th id="cartaocredito"><img src="web/images/credito.png" height="100" width="140"><h3>Cartão de crédito</h3></th>
					<th id="cartaodebito"><img src="web/images/debito.png" height="100" width="140"><h3>Cartão de débito</h3></th>
				</tr>
			</table>
		</div>		


		<div class="feedback3" style="display: none" id="dinheiro_expand" align="center">
			<div class="feedback2" align="center">
			<br>
				<h3>Sera necessário Troco ? Digite a baixo o valor </h3>
				<input type="text" name="troco" id="troco" placeholder="EXEMPLO:R$18,70"></input>
				<button type="submit" id="button4" class="finalizar-pedido"/>Finalizar pedido</button> 
			</div>
			<br><br>
		</div>


		<div class="feedback3" style="display: none" id="ctcredito_expand" align="center">
		<br>
			<h3> Cartão de crédito ? Clique para finalizar e Finalizarmos seu pedido</h3>
			<button type="submit" id="button4" class="finalizar-pedido"/>Finalizar pedido</button> 
			<br><br>
		</div>


		<div class="feedback3" style="display: none" id="ctdebito_expand" align="center">
		<br>
			<h3>Cartão de Débito ? Clique para finalizar e Finalizarmos seu pedido</h3>
			<button type="submit" id="button4" class="finalizar-pedido"/>Finalizar pedido</button> 
			<br><br>
		</div>

		<input type="hidden" name="tipo_pagamento" id="tipo_pagamento" value="">	
		<input type="hidden" name="host" id="host" value="<?PHP echo $host; ?>">	

		<?PHP 

			$valor_borda = 0;
			if(!empty($_SESSION['pedido']['valor_borda']))
				$valor_borda = $_SESSION['pedido']['valor_borda'];

			 ##calculando taxa e valores totais do pedido
			 $percentual = 3 / 100.0; 		 
			 $valor_total = $_SESSION['pedido']['total'] + $_SESSION['pedido']['valor_cep'];		 		 
			 $valor_total_antigo = $valor_total;
			 $valor_total = $valor_total + ($percentual * $valor_total);
			 $valor_percentual = $valor_total - $valor_total_antigo;
			 $valor_total_taxas = $valor_percentual + $_SESSION['pedido']['valor_cep'] + $valor_borda;
			
		 ?>
	<div class="feedback3">
		<div class="container" align="center">
			<table style="border: 1px white;width: 100%; ">
				<tr>
				<td align="center"><h3>Pedido : R$ <?PHP echo number_format($_SESSION['pedido']['total'], 2, ',', '.'); ?></h3></td>
				<td align="center"><h3>Frete : $ <?PHP echo number_format($_SESSION['pedido']['valor_cep'], 2, ',', '.'); ?></h3></td>
				<td align="center"><h3>Taxa do site : R$ <?PHP echo number_format($valor_percentual, 2, ',', '.'); ?></h3></td>
				</tr>

				<tr id="linhatotal">
				<td></td>
				<td align="center" >Valor total: R$ <?PHP echo number_format($valor_total, 2, ',', '.'); ?></td>
				<td></td>
				</tr>

			</table>
		</div>
	</div>
	</form>		
</div>
<!-- Div id = Pagamento_expand fechando aqui-->
</div>
<!-- GRID FECHANDO AQUI -->

<div class="boxes">
		<div class="order">
			<ul>
				<li>
					
					<?PHP 
					require_once('pedido.php');
					?>
																			
				</li>	
			</ul>
		</div>
	</div>

<div class="clear"> </div>

<?php require_once('footer.php'); ?>

