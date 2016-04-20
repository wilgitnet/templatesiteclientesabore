
	<?php require_once('header.php'); ?>

 
<script>
    $( document ).ready(function() {
        $("#usuario").focus();
    });
</script>
<script src="http://localhost/templatesiteclientesabore/js/login.js"></script>
<div class="feed">
	<div class="feedback">
                       <form id="formLogin">
        <h1>Entre utilizando sua conta       </h1><br>
         
            <div>
                <input type="text" value="" id="usuario" placeholder="Usuário ou Email" name="usuario" />
            <br><br>
                <input type="password" class="" value="" placeholder="Senha" name="senha" />
            <br>
                <a id="p1" href="registro.php">Ainda não tem sua conta ? Clique para registrar-se</a><br><br>
               <div> <input type="submit" value="Entrar">
                <a id="p1" href="#">Esqueceu sua senha ?</a>
               </div>
                <a href="index.html"><img src="mobile/images/facebook1.png"  alt="Favorita" height="46" width="135" /></a>
            </div>
                    
                
            </div>

        </form>
</div>
</div>
	<div class="clear"> </div>
    </div>

<?php require_once('footer.php'); ?>
