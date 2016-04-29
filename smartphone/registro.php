
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
<script>
    $( document ).ready(function() {
        $("#documento").focus();
    });
</script>
    <script src="http://localhost/templatesiteclientesabore/js/registro.js"></script>
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
        <form id="formularioRegistro" action="registro.php" method="post">
        <h1>Crie sua conta      </h1><br>
         <a id="p1" href="login.php" >Já tem sua conta ? Clique para logar</a>
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
                    <img src="images/loading.gif" width="20" height="20" align="right">
                </div>
            <br><br>
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
            <br><br>
                <input type="text" value="<?PHP if(!empty($_POST['cidade']))echo $_POST['cidade']; ?>" placeholder="Cidade" name="cidade" id="cidade" maxlength="50"/>
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
