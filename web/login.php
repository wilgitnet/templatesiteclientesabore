 <?php require_once('app/controller/login_controller.php'); ?>
 <?php require_once('header.php'); ?>  

<script>
    $( document ).ready(function() {
        $("#usuario").focus();
    });
</script>
<script src="<?PHP echo $host; ?>/js/login.js"></script>

    <div class="nz-breadcrumbs">
        <div class="container">
            <a href="">Inicio</a>
            <i class="fa fa-angle-double-right"></i>
            <span>Login</span>
        </div>
    </div>

    <?PHP if($part_url[2] == 'esqueci-minha-senha') {?>
        <div class="content content-checkout">
        <div class="container">

            <div class="login">
            <?php 
                    if($error)
                    {
                        echo '
                            <div class="alert error">
                                <div class="alert-message">Senha ou email incorreto, tente novamente.
                            </div><span class="close-alert">X</span></div>
                            ';            
                    }

                    if($success)
                    {
                        echo '
                            <div class="alert success">
                                <div class="alert-message">Enviamos um email com procedimento para troca de senha.
                            </div><span class="close-alert">X</span></div>
                            ';            
                    }
                ?>
                <h4>Informe email para alterar senha</h4>
                <form id="formLogin" method="post" action="<?PHP echo $host; ?>/login/esqueci-minha-senha">                 
                    <label>Email</label>
                    <input type="text" name="email_troca" id="email_troca" />
                    <input type="checkbox" class="remember" checked="checked" /><span class="text-remember">Lembrar-me</span>                    
                    <input type="hidden" name="submit_email" value="true">  
                    <input type="submit" class="button" name="submit_email" value="Entrar" />
                </form>

                <!-- MENSAGEM DE ERRO COMENTADO AQUI EM BAIXO -->

                
                
                
                <h5>Ainda não tem conta? <a href="#">Registre-se.</a></h5>
                
            </div>            
        </div>
    </div>

    <?PHP } else { ?>
    <div class="content content-checkout">
        <div class="container">

            <div class="login">
            <?php 
                    if($error)
                    {
                        echo '
                            <div class="alert error">
                                <div class="alert-message">Senha ou email incorreto, tente novamente.
                            </div><span class="close-alert">X</span></div>
                            ';            
                    }
                ?>
                <h4>Realizar Login</h4>
                <form id="formLogin" method="post" action="<?PHP echo $host; ?>/login">
                    <label>Email*</label>
                    <input type="text" id="usuario" name="usuario"/>
                    <label>Senha*</label>
                    <input type="password" name="senha" id="senha" />
                    <input type="checkbox" class="remember" checked="checked" /><span class="text-remember">Lembrar-me</span>
                    <a href="<?PHP echo $host; ?>/login/esqueci-minha-senha" class="request-password">Esqueceu sua senha?</a> 
                    <input type="submit" class="button" name="submit" value="Entrar" />
                </form>
                                    
                <h5>Ainda não tem conta? <a href="#">Registre-se.</a></h5>                
            </div>            
        </div>
    </div>

    <?PHP } ?>
<?php require_once('footer.php'); ?>