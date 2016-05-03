<?php require_once('header.php'); ?>
<script>

  function menu()
{
location.href="<?PHP echo $host; ?>/categoria"
}
</script>
<div class="feedback2">

      <div class="container" align="center">
        <h3 class="responsive" >Historico</h3>
        <input type="submit" href="<?PHP echo $host; ?>/home" value="Continuar comprando" onclick="menu()"></input>
      </div>
<br>




<table class="table table-action">
    
      <tr>  
        <th class="t-small"><h3>Cód Pedido</h3></th>
        <th class="t-medium"><h3>Data</h3></th>
        <th class="t-medium"><h3>Status</h3></th>
        <th class="t-medium"></th>
      </tr>

  <tr>
    <td>666</td>
    <td>20/02/2016</td>
    <td>Entregue</td>
    <td><a href="acompanhamento">Ver Detalhes</a></td>
  </tr>


  <tr>
    <td>666</td>
    <td>20/02/2016</td>
    <td>Entregue</td>
    <td><a href="acompanhamento">Ver Detalhes</a></td>
  </tr>

  <tr>
    <td>666</td>
    <td>20/02/2016</td>
    <td>Entregue</td>
    <td><a href="acompanhamento">Ver Detalhes</a></td>
  </tr>
      
  <tr>
    <td>666</td>
    <td>20/02/2016</td>
    <td>Entregue</td>
    <td><a href="acompanhamento">Ver Detalhes</a></td>
  </tr>

  </table>
</div>


    <br>
<div class="clear"> </div>
<?php require_once('footer.php'); ?>