
<?php require_once('header.php'); ?>




<script src="http://localhost/templatesiteclientesabore/js/registro.js"></script>

<script type="text/javascript">
  

 $( document ).ready(function() {
        $("#documento").focus();
    });
</script>
<body>






<div class="container">
    <form id="formularioRegistro" method="post">
	<div class="feedback" id="geral">
        <h1>Realize seu cadastro</h1><br>
         <a id="p1" href="login.php" >Já tem sua conta ? Clique para logar</a>
   <br>        	<div>
            	<input type="text" value="" placeholder="CPF ou CNPJ" id="documento" name="documento" />
            <br><br>
            	<input type="text" value="" placeholder="Usuário" name="usuario" />
            <br><br>
                <input type="password" value="" placeholder="Senha" name="senha" />
            <br><br>
                <input type="password" value="" placeholder="Repita sua senha" name="senha1" />
            <br><br>
                <input type="text" value="" placeholder="Nome completo" name="nome" />
            <br><br>

                <input type="text" value="" placeholder="Endereço de email" name="email" />
            <br><br>
                <span><input type="text" value="" placeholder="Endereço residencial" name="endereco" />
            <br><br>
                <span><input type="text" value="" placeholder="Número" name="numero" />
            <br><br>
                <span><input type="text" value="" placeholder="Bairro" name="bairro" />
            <br><br>
                <span><input type="text" value="" placeholder="Cidade" name="cidade" />
            <br><br>
                <span><input type="text" value="" placeholder="Estado" name="estado" />
            <br><br>
                <span><input type="text" value="" placeholder="CEP" name="cep" />
            <br><br>
                <span><input type="text" value="" placeholder="Telefone residencial" name="telefone" />
            <br><br>
                <span><input type="text" value="" placeholder="Telefone celular" name="celular" />
            <br><br>Sexo:
            <input type="radio" name="optradio">Masculino
            <input type="radio" name="optradio">Feminino

            <br><br>
                <input type="checkbox" >Deseja receber Promoções em seu email?</input><br><br>
                <input class="submit" type="submit" value="Cadastrar" />
                	
                
            </div>
            </form>
        </div>

    </div>

    <div class="clear"></div>
</div>
</div>
	<div class="clear"> </div>
    </div>

<?php require_once('footer.php'); ?>
