
	<?php require_once('header.php'); ?>

    <style>
#geral {
position: relative;
left:50%;
margin-left:-250px;
}
#p1 {
font-size: 11px;
}

</style>
<script>
    $( document ).ready(function() {
        $("#documento").focus();
    });
</script>
    <script src="http://localhost/templatesiteclientesabore/js/registro.js"></script>
	<div class="feed">
	<div class="feedback">
        <form id="formularioRegistro">
        <h1>Crie sua conta      </h1><br>
         <a id="p1" href="login.php" >Já tem sua conta ? Clique para logar</a>
   <br>         <div>
                <input type="text" value="" id="documento" placeholder="CPF ou CNPJ" name="documento" />
            <br><br>
                <input type="text" value="" placeholder="Usuário" name="usuario" />
            <br><br>
                <input type="password" class="" value="" placeholder="Senha" name="senha" />
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

            <label class="radio-inline"><input type="radio" name="optradio">Masculino</label>
            <label class="radio-inline"><input type="radio" name="optradio">Feminino</label>

            <br><br>
                <input type="checkbox">Deseja receber Promoções em seu email?</input><br><br>
                <input type="submit" value="Cadastrar" />
                    
                
            </div>

        </form>
    </div>

    <div class="clear"></div>
</div>
</div>
	<div class="clear"> </div>
</div>
<?php require_once('footer.php'); ?>
