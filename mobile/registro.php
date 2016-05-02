
	<?php require_once('header.php'); ?>
    <?php require_once('app/controller/registro_controller.php');?>
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
<script src="<?PHP echo $host; ?>/js/registro.js"></script>

<div class="feed">
	<div class="feedback">
        <?php 
            if($insertError)
            {
                echo "<div class='warning'>
                      <strong>Ops!</strong>{$mensagem}.
                    </div>
                    ";

                foreach ($mensagemArray as $array) 
                {
                    echo "<div class='alert'>
                          {$array}.
                        </div>";
                }
            }
        ?>
<form name="formularioRegistro" id="formularioRegistro" action="<?PHP echo $host; ?>/registro" method="post">
        <h1>Crie sua conta       </h1><br>
         <a id="p1" href="<?PHP echo $host; ?>/login" >Já tem sua conta ? Clique para logar</a>
   <br>         <div>
                <input type="text" value="<?PHP if(!empty($_POST['documento']))echo $_POST['documento']; ?>" placeholder="CPF ou CNPJ (Somente Numeros)" id="documento" name="documento" maxlength="14" />
            <br><br>
                <input type="text" value="<?PHP if(!empty($_POST['celular']))echo $_POST['celular']; ?>" placeholder="Telefone celular" name="celular" id="celular" maxlength="30" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" />
            <br><br>
                <input type="text" value="<?PHP if(!empty($_POST['usuario']))echo $_POST['usuario']; ?>" placeholder="Usuário" name="usuario" id="usuario" maxlength="40" />
            <br><br>
                <input type="password" value="" placeholder="Senha" name="senha" id="senha" maxlength="20" />
            <br><br>
                <input type="password" value="" placeholder="Repita sua senha" name="senha1" id="senha1" maxlength="20" />
            <br><br>
                <input type="text" value="<?PHP if(!empty($_POST['nome']))echo $_POST['nome']; ?>" placeholder="Nome" name="nome" id="nome" maxlength="50" />
            <br><br>
                <input type="text" value="<?PHP if(!empty($_POST['sobrenome']))echo $_POST['sobrenome']; ?>" placeholder="Sobrenome" name="sobrenome" id="sobrenome" maxlength="50" />
            <br><br>
                <input type="text" value="<?PHP if(!empty($_POST['email']))echo $_POST['email']; ?>" placeholder="Endereço de email" name="email" id="email" maxlength="30" />
            <br><br>
                <input type="text" value="<?PHP if(!empty($_POST['cep']))echo $_POST['cep']; ?>" placeholder="CEP" name="cep" id="cep" maxlength="9" />                
                <div id="loading" style="display:none">
                    <img src="images/loading.gif" width="20" height="20" align="right"  >
                </div>
            <br><br>
                <input type="text" value="<?PHP if(!empty($_POST['estado']))echo $_POST['estado']; ?>" placeholder="Estado" Readonly="Readonly" name="estado" id="estado">
            <br><br>
                <input type="text" value="<?PHP if(!empty($_POST['cidade']))echo $_POST['cidade']; ?>" placeholder="Cidade" Readonly="Readonly" name="cidade" id="cidade" maxlength="50"/>
            <br><br>
                <input type="text" value="<?PHP if(!empty($_POST['bairro']))echo $_POST['bairro']; ?>" placeholder="Bairro" name="bairro" id="bairro" maxlength="50" />
            <br><br>
                <input type="text" value="<?PHP if(!empty($_POST['endereco']))echo $_POST['endereco']; ?>" placeholder="Endereço residencial" name="endereco" id="endereco" maxlength="150" />
            <br><br>                
                <input type="text" value="<?PHP if(!empty($_POST['numero']))echo $_POST['numero']; ?>" placeholder="Número" name="numero" id="numero" maxlength="10" />                                    
            <br><br>
                <input type="text" value="<?PHP if(!empty($_POST['complemento']))echo $_POST['complemento']; ?>" placeholder="Complemento" name="complemento" id="complemento" maxlength="150" />
            <br><br>
                <input type="text" value="<?PHP if(!empty($_POST['telefone']))echo $_POST['telefone']; ?>" placeholder="Telefone residencial" name="telefone" id="telefone" maxlength="30" />            
            <br><br>Sexo:
            <input type="radio" name="sexo" value="M">Masculino
            <input type="radio" name="sexo" value="F">Feminino
            <input type="hidden" name="submit" value="true">
            <br><br>
                <input type="hidden" name="cliente_id" id="cliente_id" value="<?PHP echo $_SESSION['id_cliente']; ?>"
                <input type="checkbox">Deseja receber Promoções em seu email?</input><br><br>
                <input type="submit" value="Cadastrar" />
                    
                
            </div>

        </form>
</div>
</div>
	<div class="clear"> </div>
    </div>

<?php require_once('footer.php'); ?>
