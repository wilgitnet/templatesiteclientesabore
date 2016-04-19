
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
        $("#usuario").focus();
    });
</script>
<div class="feed">
	<div class="feedback">
                       <form>
        <h1>Entre utilizando sua conta       </h1><br>
         
            <div>
                <input type="text" value="" id="usuario" placeholder="Usuário ou Email" />
            <br><br>
                <input type="password" class="" value="" placeholder="Senha" />
            <br>
                <a id="p1" href="registro.php">Ainda não tem sua conta ? Clique para registrar-se</a><br><br>
                <input type="submit" value="Entrar">

                <img src="images/faceb.png"><br>

                <a id="p1" href="#">Esqueceu sua senha ?<a><br>
                
            </div>
                    
                
            </div>

        </form>
</div>
</div>
	<div class="clear"> </div>
    </div>

<?php require_once('footer.php'); ?>
