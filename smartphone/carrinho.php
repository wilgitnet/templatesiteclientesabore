<?php require_once('header.php'); ?>
<?PHP require_once('app/controller/carrinho_controller.php'); ?>
<script src="<?PHP echo $host; ?>/js/carrinho.js"></script>

<script type="text/javascript">
    function continuar()
    {
      location.href="<?PHP echo $host; ?>/carrinho/validar-pedido"
    }
      function returncardapio()
    {
      location.href="<?PHP echo $host; ?>/categoria/<?PHP echo $_SESSION['placeholder']; ?>"
    }
    function gohistorico()
    {
      location.href="<?PHP echo $host; ?>/historico"
    }
    function limparCarrinho()
    {
      location.href="<?PHP echo $host; ?>/carrinho/limpar"
    }
</script>

<div class="feedback2">

	<?php            
                
        if(!empty($_SESSION['mensagem_erro']))
        {                        
            $mensagem = $_SESSION['mensagem_erro'];
            echo "<div class='alert'>
                {$mensagem}.
              </div>
              ";           

            unset($_SESSION['mensagem_erro']);
        }
    ?>

    <div id="refresh" style="display:none">
      <table>
          <tr>
            <th>
              <h4>Aguarde, estamos realizando sua solicitação</h4>              
              <img src="<?PHP echo $host; ?>/images/loading.gif" width="100" height="100">            
            </th>                          
          </tr>
        </table>                     
        <br>        
    </div>
<div id="pedido_ajax" class="pedido_ajax_class">
	<?PHP require_once('carrinho_ajax.php'); ?>
</div>

</div>
<div class="clear"> </div>
<?php require_once('footer.php'); ?>