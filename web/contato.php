
<?php require_once('header.php'); ?>
<?php require_once('app/controller/contato_controller.php'); ?>

<script src="http://localhost/templatesiteclientesabore/js/contato.js"></script>

<div class="feed">
	<div class="feedback">        
        <?php 
            if(!empty($mensagem))
            {
                echo "<h3 class='h3St'>{$mensagem}</h3>";
            }
            else
            {
                echo "<br>";
            }
        ?>
        
        <h1>Entre em contato</h1>        
        <form id="formularioContato" method="post" action="contato.php">
        	<div>
            	<span><input type="text" id="nome" value="" name="nome" placeholder="Nome" /></span>
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
    <div class="map">
        <iframe width="350" height="290" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com.br/maps?q=<?PHP echo $endereco; ?>,%20Brasil&output=embed"></iframe>        
    </div>
    <div class="clear"></div>
</div>
</div>
	<div class="clear"> </div>
    </div>
        


<?php require_once('footer.php'); ?>
