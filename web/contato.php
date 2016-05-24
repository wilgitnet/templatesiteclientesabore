
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
        <div class="content pdB60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-contact">ENTRE EM CONTATO</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="title-send-message">
                        <h2>ENVIE UMA MENSAGEM</h2>
                        <p>Fale conosco, teremos o prazer em atendê-lo(a).</p>
                    </div>
                </div>  
            </div>
            <div class="row">
                <div class="col-md-6">                    
                    <form id="formularioContato" class="contact-form" method="post" action="<?PHP echo $host; ?>/contato">

                        <input type="text" placeholder="Nome" id="nome" value="" name="nome" title="* Por favor informe o seu nome.">

                        <input type="text" placeholder="E-mail" name="email" title="* Por favor, informe um endereço de e-mail válido.">

                        <input type="text" placeholder="Telefone" name="telefone">

                        <textarea placeholder="Mensagem" name="mensagem" title="* Por favor, informe sua mensagem."></textarea>

                        <input class="button-contact-form" type="submit" value="ENVIAR">

                    </form>

                </div>
                <div class="col-md-6">
                    <div class="info-contact pdL70">
                        <h2><?PHP echo $_SESSION['nome_fantasia']; ?></h2>
                        <h4>ENDEREÇO:</h4>
                        <p><?PHP echo $_SESSION['endereco']; ?></p>
                        <h4>HORÁRIO DE ATENDIMENTO:</h4>
                        <p><?PHP echo $_SESSION['funcionamento'][0]; ?></p>
                        <p><?PHP echo $_SESSION['funcionamento'][1]; ?></p>
                    </div>
                </div>
            </div>             
        </div>
    </div>
       
    <div class="maps">
        <iframe width="1345" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com.br/maps?q=<?PHP echo $endereco; ?>,%20Brasil&output=embed"></iframe>        
    </div>
    <div class="clear"></div>
</div>
</div>
	<div class="clear"> </div>
    </div>
        


<?php require_once('footer.php'); ?>
