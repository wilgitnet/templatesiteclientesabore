
	<?php require_once('header.php'); ?>


<script>
    $( document ).ready(function() {
        $("#login").focus();
    });
</script>
<script src="http://localhost/templatesiteclientesabore/js/login.js"></script>
	<div class="feed">
	<div class="feedback">
        <form id="formLogin">
        <h1>Entre utilizando sua conta       </h1><br>
         
            <div>
                <input type="text" value="" id="usuario" placeholder="Usuário ou Email" name="login" id="login" />
            <br><br>
                <input type="password" class="" value="" placeholder="Senha" name="senha" id="senha" />
            <br>
                <a id="p1" href="registro.php">Ainda não tem sua conta ? Clique para registrar-se</a><br><br>
               
                <input type="submit" value="Entrar">
                <div><a id="p1" href="#">Esqueceu sua senha ?<a>
                </div><br>

                
            <a href="index.html"><img src="smartphone/images/facebook1.png"  alt="Favorita" height="46" width="135" /></a>    
            </div> 
                    
                
            </div>

        </form>
    </div>

    <div class="clear"></div>
</div>
</div>
	<div class="clear"> </div>
</div>
<?php require_once('footer.php'); ?>
