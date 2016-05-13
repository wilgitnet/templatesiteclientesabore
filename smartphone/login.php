
<?php require_once('header.php'); ?>
<?php require_once('app/controller/login_controller.php'); ?>

<script>
    $( document ).ready(function() {
        $("#usuario").focus();
    });
</script>
<script src="<?PHP echo $host; ?>/js/login.js"></script>

<?PHP if($part_url[2] == 'esqueci-minha-senha') {?>

<div class="feed">
	<div class="feedback">
        <form id="formLogin" method="post" action="<?PHP echo $host; ?>/login/esqueci-minha-senha">
            <h1>Email para troca de senha</h1>
            <?php 
            if($error)
            {
                echo "<div class='alert'>
                      {$mensagem}.
                    </div>
                    ";            
            }

            if($success)
            {
                echo "<div class='success'>
                      {$mensagem}.
                    </div>
                    ";            
            }
        ?>
            <br>        
            <div>
                <input type="text" value="" id="email_troca" placeholder="Email" name="email_troca" />
                <input type="hidden" name="submit_email" value="true">            
            <br><br>                

                <input type="submit" value="Entrar">                
                        
            </div>                                         

        </form>
    </div>
</div>

<?PHP }else{ ?>

<div class="feed">
    <div class="feedback">
        <form id="formLogin" method="post" action="<?PHP echo $host; ?>/login">
            <h1>Entre utilizando sua conta</h1>
            <?php 
                if($error)
                {
                    echo "<div class='alert'>
                          <strong>Ops! </strong>{$mensagem}.
                        </div>
                        ";            
                }
            ?>
            <br>        
            <div>
                <input type="text" value="" id="usuario" placeholder="Email" name="usuario" id="usuario" />
            <br><br>
                <input type="password" class="" value="" placeholder="Senha" name="senha" id="senha" />
                <input type="hidden" value="true" name="submit">
            <br>
                <a id="p1" href="<?PHP echo $host; ?>/registro">Ainda não tem sua conta ? Clique para registrar-se</a><br><br>
               
                <input type="submit" value="Entrar">
                <a id="p1" href="<?PHP echo $host; ?>/login/esqueci-minha-senha">Esqueceu sua senha ?</a>
                        
            </div>                                         

        </form>
    </div>
</div>

<?PHP } ?>
<div class="clear"></div>

<?php require_once('footer.php'); ?>
