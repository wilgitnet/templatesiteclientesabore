
<?php require_once('header.php'); ?>
<script src="<?PHP echo $host; ?>/js/registro.js"></script>


<script type="text/javascript">
	
		$(document).ready( function() {

			compra_situacao = 'open';
			pagamento_situacao = 'close';
			dinheiro_situacao = 'close';
			ctcredito_situacao = 'close';

			$("#button3").click(function() {
				if(compra_situacao == 'open')
				{
					$("#compra_expand").hide();	
					compra_situacao = 'close';
				}
			});
					
			$("#button3").click(function() {
				if(pagamento_situacao == 'close')
				{
					$("#pagamento_expand").show();	
					pagamento_situacao = 'open';
				}
				
			});
				

			$("#dinheiro").click(function() 
			{				
				$("#ctcredito_expand").hide();					
				$("#ctdebito_expand").hide();	
				$("#dinheiro_expand").show();	
			});

			$("#cartaocredito").click(function() 
			{				
				$("#ctcredito_expand").show();					
				$("#ctdebito_expand").hide();	
				$("#dinheiro_expand").hide();	
			});

			$("#cartaodebito").click(function() {
				$("#ctcredito_expand").hide();					
				$("#ctdebito_expand").show();	
				$("#dinheiro_expand").hide();	
			});
		});	
</script>





<div class="grids" id="compra_expand">
	<h4>Endereço</h4>
	<form id="endereco" method="GET">
		<div class="feedback2">
		<br>
		<h3> Complete para continuar a compra </h3>
		<br>

		<!--
			<input type="text" value="<?PHP if(!empty($_POST['nome']))echo $_POST['nome']; ?>" placeholder="Nome" name="nome" id="nome" maxlength="50" />

			<input type="text" value="<?PHP if(!empty($_POST['sobrenome']))echo $_POST['sobrenome']; ?>" placeholder="Sobrenome" name="sobrenome" id="sobrenome" maxlength="50" />

			<input type="text" value="<?PHP if(!empty($_POST['email']))echo $_POST['email']; ?>" placeholder="Endereço de email" name="email" id="email" maxlength="30" />

			<input type="text" value="<?PHP if(!empty($_POST['celular']))echo $_POST['celular']; ?>" placeholder="Telefone celular" name="celular" id="celular" maxlength="30" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" />

			<input type="password" value="" placeholder="Senha para acompanhamento" name="senha" id="senha" maxlength="20" />
		
			<input type="password" id="senha" value="" name="senha1" placeholder="Repita sua senha" maxlength="20" />
		-->
			<input type="text" placeholder="CEP" name="cep" id="cep" maxlength="9" />                

            <select name="estado" id="estado">
                    <option value="">Selecione o Estado</option>                    
                    <option value="AC" <?PHP if($_POST['estado'] == 'AC')echo"selected"; ?>>Acre</option>
                    <option value="AL" <?PHP if($_POST['estado'] == 'AL')echo"selected"; ?>>Alagoas</option>
                    <option value="AP" <?PHP if($_POST['estado'] == 'AP')echo"selected"; ?>>Amapá</option>
                    <option value="AM" <?PHP if($_POST['estado'] == 'AM')echo"selected"; ?>>Amazonas</option>
                    <option value="BA" <?PHP if($_POST['estado'] == 'BA')echo"selected"; ?>>Bahia</option>
                    <option value="CE" <?PHP if($_POST['estado'] == 'CE')echo"selected"; ?>>Ceará</option>
                    <option value="DF" <?PHP if($_POST['estado'] == 'DF')echo"selected"; ?>>Distrito Federal</option>
                    <option value="ES" <?PHP if($_POST['estado'] == 'ES')echo"selected"; ?>>Espirito Santo</option>
                    <option value="GO" <?PHP if($_POST['estado'] == 'GO')echo"selected"; ?>>Goiás</option>
                    <option value="MA" <?PHP if($_POST['estado'] == 'MA')echo"selected"; ?>>Maranhão</option>
                    <option value="MT" <?PHP if($_POST['estado'] == 'MT')echo"selected"; ?>>Mato Grosso</option>
                    <option value="MS" <?PHP if($_POST['estado'] == 'MS')echo"selected"; ?>>Mato Grosso do Sul</option>
                    <option value="MG" <?PHP if($_POST['estado'] == 'MG')echo"selected"; ?>>Minas Gerais</option>
                    <option value="PA" <?PHP if($_POST['estado'] == 'PA')echo"selected"; ?>>Pará</option>
                    <option value="PB" <?PHP if($_POST['estado'] == 'PB')echo"selected"; ?>>Paraiba</option>
                    <option value="PR" <?PHP if($_POST['estado'] == 'PR')echo"selected"; ?>>Paraná</option>
                    <option value="PE" <?PHP if($_POST['estado'] == 'PE')echo"selected"; ?>>Pernambuco</option>
                    <option value="PI" <?PHP if($_POST['estado'] == 'PI')echo"selected"; ?>>Piauí</option>
                    <option value="RJ" <?PHP if($_POST['estado'] == 'RJ')echo"selected"; ?>>Rio de Janeiro</option>
                    <option value="RN" <?PHP if($_POST['estado'] == 'RN')echo"selected"; ?>>Rio Grande do Norte</option>
                    <option value="RS" <?PHP if($_POST['estado'] == 'RS')echo"selected"; ?>>Rio Grande do Sul</option>
                    <option value="RO" <?PHP if($_POST['estado'] == 'RO')echo"selected"; ?>>Rondônia</option>
                    <option value="RR" <?PHP if($_POST['estado'] == 'RR')echo"selected"; ?>>Roraima</option>
                    <option value="SC" <?PHP if($_POST['estado'] == 'SC')echo"selected"; ?>>Santa Catarina</option>
                    <option value="SP" <?PHP if($_POST['estado'] == 'SP')echo"selected"; ?>>São Paulo</option>
                    <option value="SE" <?PHP if($_POST['estado'] == 'SE')echo"selected"; ?>>Sergipe</option>
                    <option value="TO" <?PHP if($_POST['estado'] == 'TO')echo"selected"; ?>>Tocantis</option>
                </select>
        <br>
            <input type="text" value="<?PHP if(!empty($_POST['cidade']))echo $_POST['cidade']; ?>" placeholder="Cidade" name="cidade" id="cidade" maxlength="50"/>

            <input type="text" value="<?PHP if(!empty($_POST['bairro']))echo $_POST['bairro']; ?>" placeholder="Bairro" name="bairro" id="bairro" maxlength="50" />

        <br>
            <input type="text" value="<?PHP if(!empty($_POST['endereco']))echo $_POST['endereco']; ?>" placeholder="Endereço residencial" name="endereco" id="endereco" maxlength="150" />

            <input type="text" value="<?PHP if(!empty($_POST['numero']))echo $_POST['numero']; ?>" placeholder="Número" name="numero" id="number" maxlength="10" />

            <input type="text" value="<?PHP if(!empty($_POST['complemento']))echo $_POST['complemento']; ?>" placeholder="Complemento" name="complemento" id="complement" maxlength="150" /><br>
			
           
		</div>
	</form>	 
	<button type="submit" id="button3" value="Prosseguir para pagamento" />Continuar compra</button>	
</div>







<div class="grids" id="pagamento_expand" style="display: none">
	<h4>Escolha seu método de pagamento</h4>
	<form id="pagamento" method="GET">
		<div class="feedback2">
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
				<input type="text" placeholder="EXEMPLO:R$18,70"></input>
				<button type="submit" id="button4"/>Finalizar pedido</button> 
			</div>
		</div>




		<div class="feedback3" style="display: none" id="ctcredito_expand" align="center">
		<br>
			<h3> Cartão de crédito ? Clique para finalizar e Finalizarmos seu pedido</h3>
			<button type="submit" id="button4"/>Finalizar pedido</button> 
		</div>




		<div class="feedback3" style="display: none" id="ctdebito_expand" align="center">
		<br>
			<h3>Cartão de Débito ? Clique para finalizar e Finalizarmos seu pedido</h3>
			<button type="submit" id="button4"/>Finalizar pedido</button> 
		</div>






	</form>	
	
</div>



<div class="boxes">
		<div class="order">
			<ul>
				<li>
					<li>
					<?PHP 
					require_once('pedido.php');
					?>
				</li>															
				</li>	
			</ul>
		</div>
	</div>



	
<div class="clear"> </div>


<?php require_once('footer.php'); ?>

