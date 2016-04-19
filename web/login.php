
<?php require_once('header.php'); ?>

<script src="http://localhost/templatesiteclientesabore/js/login.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {
        $("#usuario").focus();
    });
</script>



<div class="container">
    <form id="formLogin" method="post">
	<div class="feedback" id="geral">
        <h1>Entre utilizando sua conta</h1>
            <br>
        	<div>
                <input type="text" value=""  placeholder="Usuário ou Email" name="login" id="login" />
            <br><br>
                <input type="password"  value="" placeholder="Senha" name="senha" id="senha" />
            <br>
                <a id="p1" href="registro.php">Ainda não tem sua conta ? Clique para registrar-se</a><br><br>
                <div>
                <input type="submit" value="Entrar"><br>
              <a id="p1" href="#">Esqueceu sua senha ?</a>
                </div>
              
                
                 <a href="index.html"><img src="web/images/facebook1.png"  alt="Logar" height="52" width="162" /><br>
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

