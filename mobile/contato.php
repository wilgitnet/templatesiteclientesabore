
	<?php require_once('header.php'); ?>
<script>
    $( document ).ready(function() {
        $("#nome").focus();
    });
</script>
<script src="http://localhost/templatesiteclientesabore/js/contato.js"></script>

<div class="feed">
	<div class="feedback">
        <h1>Contato</h1>
        <form id="formularioContato">
        	<div>
            	<span><label>Nome</label></span>
            	<span><input type="text" id="nome" value="" name="nome" /></span>
            </div>
            <div>
            	<span><label>Email</label></span>
            	<span><input type="text" value="" name="email" /></span>
            </div>
        	<div>
            	<span><label>O que deseja nos falar?</label></span>
            	<span><textarea name="mensagem"></textarea></span>
            </div>
        	<div>
            	<span><input type="submit" value="Enviar" /></span>
            </div>
        </form>
    </div>
    <div class="map"><iframe width="100%" height="120" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Eiffel+Tower&amp;aq=&amp;sll=14.419385,79.988022&amp;sspn=0.112221,0.209255&amp;ie=UTF8&amp;hq=Eiffel+Tower&amp;t=m&amp;ll=48.858278,2.294254&amp;spn=0.014682,0.032015&amp;output=embed"></iframe><br /><small><a href="http://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Eiffel+Tower&amp;aq=&amp;sll=14.419385,79.988022&amp;sspn=0.112221,0.209255&amp;ie=UTF8&amp;hq=Eiffel+Tower&amp;t=m&amp;ll=48.858278,2.294254&amp;spn=0.014682,0.032015" style="color:#333;text-align:left">Abrir google maps</a></small></div>
    <div class="clear"></div>
</div>
</div>
	<div class="clear"> </div>
    </div>

<?php require_once('footer.php'); ?>
