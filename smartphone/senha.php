
<?php require_once('header.php'); ?>
<?php require_once('app/controller/senha_controller.php'); ?>

<script>
    $( document ).ready(function() {
        $("#usuario").focus();
    });
</script>
<script src="<?PHP echo $host; ?>/js/login.js"></script>

<div class="feed">
    <div class="feedback">
        <form id="frm_senha" method="post" action="<?PHP echo $host ?>/trocar-senha/token/<?PHP echo $token; ?>">
            <h1>Informe sua nova Senha</h1>
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
            <?PHP if($input){ ?>
            <div>
                <input type="password" value=""  placeholder="Informar nova senha" name="senha" id="senha" />
            <br><br>
                <input type="password"  value="" placeholder="Confirmar sua nova Senha" name="confirmar_senha" id="confirmar_senha" />
                <input type="hidden" name="submit_senha" value="true">
            <br>                
            <br>
                <input type="submit" value="Entrar">                
                        
            </div>                                         
            <?PHP } ?>
        </form>
    </div>
</div>

<div class="clear"></div>

<?php require_once('footer.php'); ?>
