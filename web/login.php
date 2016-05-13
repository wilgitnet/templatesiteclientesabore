
<?php require_once('header.php'); ?>
<?php require_once('app/controller/login_controller.php'); ?>
<script src="<?PHP echo $host; ?>/js/login.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {
        $("#usuario").focus();
    });
</script>


<?PHP if($part_url[2] == 'esqueci-minha-senha') {?>
    <div class="container">
        <form id="formLogin" method="post" action="<?PHP echo $host; ?>/login/esqueci-minha-senha">
           <div class="feedback" id="geral">                
            <h1>Digite seu email para realizar troca de senha</h1>
            <?php 
                if($error)
                {
                    echo "<div class='alert'>
                          <strong>Ops! </strong>{$mensagem}.
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
                    <input type="text" value=""  placeholder="Usuário ou Email" name="email_troca" id="email_troca" />
                    <input type="hidden" name="submit_email" value="true">
                <br><br>                                        
                    <div>
                    <input type="submit" value="Entrar"><br>                  
                    </div>                            
                </div>
            </form>
        </div>
    </div>
<?PHP }else{?>

    <div class="container">
        <form id="formLogin" method="post" action="<?PHP echo $host; ?>/login">
    	   <div class="feedback" id="geral">                
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
                    <input type="text" value=""  placeholder="Email" name="usuario" id="usuario" />
                <br><br>
                    <input type="password"  value="" placeholder="Senha" name="senha" id="senha" />
                <br>
                    <input type="hidden" value="true" name="submit">
                    <a id="p1" href="<?PHP echo $host; ?>/registro">Ainda não tem sua conta ? Clique para registrar-se</a><br><br>
                    <div>
                    <input type="submit" value="Entrar"><br>
                    <a id="p1" href="<?PHP echo $host; ?>/login/esqueci-minha-senha">Esqueceu sua senha ?</a>
                    </div>                            
                </div>
            </form>
        </div>
    </div>
<?PHP } ?>

    <div class="clear"></div>
</div>
</div>
	<div class="clear"> </div>
    </div>

<?php require_once('footer.php'); ?>

