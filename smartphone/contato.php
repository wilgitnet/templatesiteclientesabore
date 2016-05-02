
	<?php require_once('header.php'); ?>
    <?php require_once('app/controller/contato_controller.php'); ?>
    <script src="<?PHP echo $host; ?>/js/contato.js"></script>
	<div class="feed">
	<div class="feedback">
        <?php 
            if(!empty($mensagem) && !$error)
            {
                echo "<h3 class='h3St'>{$mensagem}</h3>";
            }
            
            if($error)
            {
                echo "<div class='alert'>
                          {$mensagem}.
                      </div>";
            }

        ?>
        <h1>Entre em contato</h1>
        <form id="formularioContato" method="post" action="<?PHP echo $host; ?>/contato">
        	<div>
            	
            	<span><input type="text" placeholder="Nome" value="" name="nome" /></span>
            </div>
            <div>
            	
            	<span><input type="text" value="" name="email" placeholder="Email" /></span>
            </div>
        	<div>
            	
            	<span><textarea name="mensagem" placeholder="O que deseja nos falar?"></textarea></span>
            </div>
        	<div>
            	<span><input type="submit" value="Enviar" /></span>
            </div>
            <input type="hidden" value="<?php echo $cliente['dados']['Cliente']['email']; ?>" name="email_to"  />
        </form>
    </div>
    <div class="map"><iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com.br/maps?q=<?PHP echo $endereco; ?>,%20Brasil&output=embed"></iframe><br /></div>
    <div class="clear"></div>
</div>
</div>
	<div class="clear"> </div>
</div>
<?php require_once('footer.php'); ?>
