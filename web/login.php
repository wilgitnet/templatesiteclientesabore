 <?php require_once('header.php'); ?> 
    <div class="nz-breadcrumbs">
        <div class="container">
            <a href="">Inicio</a>
            <i class="fa fa-angle-double-right"></i>
            <span>Login</span>
        </div>
    </div>

    
    <div class="content content-checkout">
        <div class="container">

            <div class="login">
                <h4>SIGN IN</h4>
                <form>
                    <label>Usuário ou e-mail*</label>
                    <input type="text" />
                    <label>Senha*</label>
                    <input type="password" />
                    <input type="checkbox" class="remember" checked="checked" /><span class="text-remember">Lembrar-me</span>
                    <a href="#" class="request-password">Esqueceu sua senha?</a> 
                    <input type="button" class="button" value="Entrar" />
                </form>

                <!-- MENSAGEM DE ERRO COMENTADO AQUI EM BAIXO -->

                <!-- <div class="alert error">
                    <div class="alert-message">Senha incorreta, tente novamente.
                </div><span class="close-alert">X</span></div> -->
                
                <h5>Ainda não tem conta? <a href="#">Registre-se.</a></h5>

                
            </div>
             
        </div>
    </div>
<?php require_once('footer.php'); ?>