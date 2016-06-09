<?php require_once('app/controller/registro_controller.php');?>
<?php require_once('header.php'); ?>

<script src="<?PHP echo $host; ?>/js/registro.js"></script>

    <div class="nz-breadcrumbs">
        <div class="container">
            <a href="">Inicio</a>
            <i class="fa fa-angle-double-right"></i>
            <span>Cadastro</span>
        </div>
    </div>

    
    <div class="content content-checkout">
        <div class="container">

            <div class="register">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Realize seu cadastro</h4>
                        <p>Já possui conta? <a href="<?PHP echo $host; ?>/login">Faça login</a></p>
                    </div>
                </div>
                <?php 
                    if($insertError)
                    {                                                

                        foreach ($mensagemArray as $array) 
                        {
                            echo '
                                <div class="alert error">
                                    <div class="alert-message">'.$array.'.
                                </div><span class="close-alert">X</span></div>
                            ';                               
                        }
                    }
                ?>
                <form id="formularioRegistro" method="post" action="<?PHP echo $host; ?>/registro">

                    <div class="row">
                        <div class="col-md-6">                            
                            <label>Nome <span class="required">*</span></label>
                            <input type="text" value="<?PHP if(!empty($_POST['nome']))echo $_POST['nome']; ?>" placeholder="Nome" name="nome" id="nome" maxlength="50" />

                            <label>Sobrenome <span class="required">*</span></label>
                            <input type="text" value="<?PHP if(!empty($_POST['sobrenome']))echo $_POST['sobrenome']; ?>" placeholder="Sobrenome" name="sobrenome" id="sobrenome" maxlength="50" />

                            <label>Celular </label>
                            <input type="text" value="<?PHP if(!empty($_POST['celular']))echo $_POST['celular']; ?>" placeholder="Telefone celular" name="celular" id="celular" maxlength="30" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" />   

                            <label>Telefone </label>
                            <input type="text" value="<?PHP if(!empty($_POST['telefone']))echo $_POST['telefone']; ?>" placeholder="Telefone residencial" name="telefone" id="telefone" maxlength="30" />  

                            <label>E-mail <span class="required">*</span></label>
                            <input type="text" value="<?PHP if(!empty($_POST['email']))echo $_POST['email']; ?>" placeholder="Endereço de email" name="email" id="email" maxlength="30" />

                            <label>Senha <span class="required">*</span></label>
                            <input type="password" value="" placeholder="Senha" name="senha" id="senha" maxlength="20" />

                            <label>Confirmar senha <span class="required">*</span></label>
                            <input type="password" value="" placeholder="Repita sua senha" name="senha1" id="senha1" maxlength="20" />

                            <label>Genêro <span class="required">*</span></label>
                            <input type="radio" name="sexo" value="M"><span class="options-radio">Masculino</span>
                            <input type="radio" name="sexo" value="F"><span class="options-radio">Feminino</span>
                            <input type="hidden" name="cliente_id" id="cliente_id" value="<?PHP echo $_SESSION['id_cliente']; ?>">
                            
                        </div>
                        <div class="col-md-6 two-grid-register">
                            <label>CEP <span class="required">*</span></label>
                            <input type="text" value="<?PHP if(!empty($_POST['cep']))echo $_POST['cep']; ?>" placeholder="CEP" name="cep" id="cep" maxlength="9" />
                            <div id="loading" style="display:none">
                                <img src="<?PHP echo $host; ?>/images/loading.gif" width="25" height="25">
                            </div>        
                            <label>Estado <span class="required">*</span></label>
                            <input type="text" value="<?PHP if(!empty($_POST['estado']))echo $_POST['estado']; ?>" placeholder="Estado" Readonly="Readonly" name="estado" id="estado">  

                            <label>Cidade <span class="required">*</span></label>
                            <input type="text" value="<?PHP if(!empty($_POST['cidade']))echo $_POST['cidade']; ?>" placeholder="Cidade" Readonly="Readonly" name="cidade" id="cidade" maxlength="50"/>       

                            <label>Bairro <span class="required">*</span></label>
                            <input type="text" value="<?PHP if(!empty($_POST['bairro']))echo $_POST['bairro']; ?>" placeholder="Bairro" name="bairro" id="bairro" maxlength="50" />

                            <label>Logradouro <span class="required">*</span></label>
                            <input type="text" value="<?PHP if(!empty($_POST['endereco']))echo $_POST['endereco']; ?>" placeholder="Endereço residencial" name="endereco" id="endereco" maxlength="150" />

                            <label>Número <span class="required">*</span></label>
                            <input type="text" value="<?PHP if(!empty($_POST['numero']))echo $_POST['numero']; ?>" placeholder="Número" name="numero" id="numero" maxlength="10" />                                       

                            <label>Complemento </label>
                            <input type="text" value="<?PHP if(!empty($_POST['complemento']))echo $_POST['complemento']; ?>" placeholder="Complemento" name="complemento" id="complemento" maxlength="150" />  

                        </div>
                        <div class="col-md-12">
                            <input type="button" id="submitButton" name="submitButton" class="button mT30" value="FINALIZAR CADASTRO">
                        </div>
                    </div>

                </form>

            </div>
             
        </div>
    </div>
<?php require_once('footer.php'); ?>