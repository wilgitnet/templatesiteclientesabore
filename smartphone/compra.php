
<?php require_once('header.php'); ?>

 <script src="<?PHP echo $host; ?>/js/compra.js"></script>

 <script>
 	$(document).ready( function() {
 		
 		$("#dinheiro").click(function() 
	      {       
	        $("#button4").focus();
	      });

 		$("#cartaocredito").click(function() 
	      {       
	        $("#button5").focus();
	      });

	    $("#cartaodebito").click(function() 
	      {       
	        $("#button6").focus();
	      });

 	});
 </script>


	<div class="order">
		<ul>
			<li>
				<li>
					<h3 id="pedido"><i class="glyphicon glyphicon-menu-down"></i>Pedidos</h3>
					<div id="pedido-expand" style="display: none">
					<?PHP require_once('pedido.php') ?>
					</div>
				</li>															
			</li>	
		</ul>
	</div>



<div class="grids" id="compra_expand" align="center">
	<h4>Endereço</h4>
	<form id="endereco" method="GET" >
	
		<div class="feedback2" align="center">
		<h3> Complete para continuar a compra </h3><br>
				<!--
				<input type="text" value="<?PHP if(!empty($_POST['nome']))echo $_POST['nome']; ?>" placeholder="Nome" name="nome" id="nome" maxlength="50" />

				<input type="text" value="<?PHP if(!empty($_POST['sobrenome']))echo $_POST['sobrenome']; ?>" placeholder="Sobrenome" name="sobrenome" id="sobrenome" maxlength="50" /><br>

				<input type="text" value="<?PHP if(!empty($_POST['email']))echo $_POST['email']; ?>" placeholder="Endereço de email" name="email" id="email" maxlength="30" />

				<input type="text" value="<?PHP if(!empty($_POST['celular']))echo $_POST['celular']; ?>" placeholder="Telefone celular" name="celular" id="celular" maxlength="30" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" /><br>

				<input type="password" value="" placeholder="Senha para acompanhamento" name="senha" id="senha" maxlength="20" />
			
				<input type="password" id="senha" value="" name="senha1" placeholder="Repita sua senha" maxlength="20" /><br>
			-->
				<input type="text" placeholder="CEP" name="cep" id="cep" maxlength="9" />                

	            <select name="estado" id="estado">
	                                       <option value="">Selecione o Estado</option>                    
                    <option value="AC" >Acre</option>
                    <option value="AL" >Alagoas</option>
                    <option value="AP" >Amapá</option>
                    <option value="AM" >Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE" >Ceará</option>
                    <option value="DF" >Distrito Federal</option>
                    <option value="ES" >Espirito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA" >Maranhão</option>
                    <option value="MT" >Mato Grosso</option>
                    <option value="MS" >Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraiba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantis</option>
	                </select>
	        <br>
	            <input type="text" value="<?PHP if(!empty($_POST['cidade']))echo $_POST['cidade']; ?>" placeholder="Cidade" name="cidade" id="cidade" maxlength="50"/>
	            <input type="text" value="<?PHP if(!empty($_POST['bairro']))echo $_POST['bairro']; ?>" placeholder="Bairro" name="bairro" id="bairro" maxlength="50" />
	        <br>
	            <input type="text" value="<?PHP if(!empty($_POST['endereco']))echo $_POST['endereco']; ?>" placeholder="Endereço residencial" name="endereco" id="endereco" maxlength="150" />
	            <input type="text" value="<?PHP if(!empty($_POST['complemento']))echo $_POST['complemento']; ?>" placeholder="Complemento" name="complemento" id="complement" maxlength="150" />
	            <input type="text" value="<?PHP if(!empty($_POST['numero']))echo $_POST['numero']; ?>" placeholder="Número" name="numero" id="number" maxlength="10" />
				
	           
		</div>
	</form>	 
	<button type="submit" id="button3" value="Prosseguir para pagamento"/>Continuar compra</button>	
</div>







<div class="grids" id="pagamento_expand" style="display: none">
	<h4>Escolha seu método de pagamento</h4><br>
	<form id="pagamento" method="GET">
				<div id="dinheiro" align="center"><img src="smartphone/images/icondinheiro.png"  width="130" height="90"><h3>Dinheiro</h3><br></div>
				<div id="cartaocredito" align="center"><img src="smartphone/images/credito.png"  width="130" height="90"><h3>Cartão de crédito</h3><br></div>
				<div id="cartaodebito" align="center" ><img src="smartphone/images/debito.png"  width="130" height="90"><h3>Cartão de débito</h3><br></div>






		<div class="feedback3" style="display: none" id="dinheiro_expand" align="center">
			<div class="feedback5">
				<h3>Sera necessário Troco ? Digite a baixo o valor </h3>
				<input type="text" placeholder="EXEMPLO:R$18,70" align="center" id="troco"></input>
				<button type="submit" id="button4"/>Finalizar pedido</button> 
			</div>
		</div>



		<div class="feedback3" style="display: none" id="ctcredito_expand" align="center"><br>
			<h3> Cartão de crédito ? Clique para finalizar e Finalizarmos seu pedido</h3><br>
			<button type="submit" id="button5"/>Finalizar pedido</button> 
		</div>




		<div class="feedback3" style="display: none" id="ctdebito_expand" align="center"><br>

			<h3>Cartão de Débito ? Clique para finalizar e Finalizarmos seu pedido</h3><br>
			<button type="submit" id="button6"/>Finalizar pedido</button> 
		</div>
	</form>	
</div>

	
<div class="clear"> </div>


<?php require_once('footer.php'); ?>

