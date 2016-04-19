
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

	<div class="feed">
	<div class="feedback">
        <form>
        <h1>Crie sua conta      </h1><br>
         <a id="p1" href="login.php" >Já tem sua conta ? Clique para logar</a>
   <br>         <div>
                <input type="text" value="" id="documento" placeholder="CPF ou CNPJ" />
            <br><br>
                <input type="text" value="" placeholder="Usuário" />
            <br><br>
                <input type="password" class="" value="" placeholder="Senha" />
            <br><br>
                <input type="password" value="" placeholder="Repita sua senha" />
            <br><br>
                <input type="text" value="" placeholder="Nome completo" />
            <br><br>

                <input type="text" value="" placeholder="Endereço de email" />
            <br><br>
                <span><input type="text" value="" placeholder="Endereço residencial" />
            <br><br>
                <span><input type="text" value="" placeholder="Número" />
            <br><br>
                <span><input type="text" value="" placeholder="Bairro" />
            <br><br>
                <span><input type="text" value="" placeholder="Cidade" />
            <br><br>
                <span><input type="text" value="" placeholder="Estado" />
            <br><br>
                <span><input type="text" value="" placeholder="CEP" />
            <br><br>
                <span><input type="text" value="" placeholder="Telefone residencial" />
            <br><br>
                <span><input type="text" value="" placeholder="Telefone celular" />
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
