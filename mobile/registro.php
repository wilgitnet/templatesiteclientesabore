
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
<script src="http://localhost/templatesiteclientesabore/js/registro.js"></script>

<div class="feed">
	<div class="feedback">
<form name="formularioRegistro" id="formularioRegistro">
        <h1>Crie sua conta       </h1><br>
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
                <input type="text" value="" placeholder="CEP" name="cep" id="cep" maxlength="8" />                
                <div id="loading" style="display:none">
                    <img src="images/loading.gif">
                </div>
            <br><br>
                <select name="estado" id="estado">
                    <option value="">Selecione o Estado</option>                    
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espirito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
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
            <br><br>
                <input type="text" value="" placeholder="Cidade" name="cidade" id="cidade" />
            <br><br>
                <input type="text" value="" placeholder="Bairro" name="bairro" id="bairro" />
            <br><br>
                <input type="text" value="" placeholder="Endereço residencial" name="endereco" id="endereco" />
            <br><br>
                <input type="text" value="" placeholder="Complemento" name="complemento" id="complemento" />
            <br><br>
                <input type="text" value="" placeholder="Número" name="numero" id="numero" />                                    
            <br><br>
                <input type="text" value="" placeholder="Telefone residencial" name="telefone" />
            <br><br>
                <input type="text" value="" placeholder="Telefone celular" name="celular" />
            <br><br>Sexo:

            <input type="radio" name="optradio">Masculino
            <input type="radio" name="optradio">Feminino

            <br><br>
                <input type="checkbox">Deseja receber Promoções em seu email?</input><br><br>
                <input type="submit" value="Cadastrar" />
                    
                
            </div>

        </form>
</div>
</div>
	<div class="clear"> </div>
    </div>

<?php require_once('footer.php'); ?>
