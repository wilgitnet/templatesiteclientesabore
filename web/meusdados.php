
<?php require_once('header.php'); ?>
<?PHP require_once('app/controller/registro_controller.php'); ?>
<script src="<?PHP echo $host; ?>/js/registro.js"></script>

        <?php 
        if($insertError)
        {
            echo "<div class='warning' id='errormsg'>
                  <strong>Ops!</strong>{$mensagem}.
                </div>
                ";

            foreach ($mensagemArray as $array) 
            {
                echo "<div class='alert' id='errormsg'>
                      {$array}.
                    </div>";
            }
        }

        //echo '<Pre>';print_r($_SESSION);exit;
    ?>

<script type="text/javascript">
  function returnhistorico()
{
location.href="<?PHP echo $host; ?>/historico"
}
</script>

<div class="grids1" id="compra_expand">
  <div class="feedback2" align="center"> 
  <table>
    <tr>
      <th>
        <h1>Meus dados</h1>
      </th>
      <th>
        <input type="submit" onclick="returnhistorico()" value="Historico de pedidos"></input>
      </th>
    </tr>
  </table>
  <form id="formularioRegistro" method="POST" action="<?PHP echo $host; ?>/meus-dados">
   
    <br>


    
      <input type="text" value="<?PHP echo $_SESSION['Usuario']['nome']; ?>"  placeholder="Nome" name="nome" id="nome" maxlength="50" />

      <input type="text"  placeholder="Sobrenome" value="<?PHP echo $_SESSION['Usuario']['sobrenome']; ?>" name="sobrenome" id="sobrenome" maxlength="30" />

      <input type="text" value="<?PHP echo $_SESSION['Usuario']['email']; ?>" placeholder="email" name="email" id="email" maxlength="30" />    

      <input type="text" placeholder="Celular:" value="<?PHP echo $_SESSION['Usuario']['celular']; ?>" name="celular" id="celular" maxlength="30" />         
      <input type="text" placeholder="CEP" value="<?PHP echo $_SESSION['Usuario']['cep']; ?>" name="cep" id="cep" maxlength="9" />                

      <input type="text" placeholder="Estado" value="<?PHP echo $_SESSION['Usuario']['estado']; ?>" name="estado" id="estado" maxlength="9" />                
        <br>
            <input type="text"  placeholder="Cidade" value="<?PHP echo $_SESSION['Usuario']['cidade']; ?>" name="cidade" id="cidade" maxlength="50"/>

            <input type="text"  placeholder="Bairro" value="<?PHP echo $_SESSION['Usuario']['bairro']; ?>" name="bairro" id="bairro" maxlength="50" />

        <br>
            <input type="text"  placeholder="Endereço" value="<?PHP echo $_SESSION['Usuario']['endereco']; ?>" name="endereco" id="endereco" maxlength="150" />

            <input type="text" placeholder="Nº" value="<?PHP echo $_SESSION['Usuario']['numero']; ?>" name="numero" id="number" maxlength="10" />

            <input type="text" placeholder="Complemento" value="<?PHP echo $_SESSION['Usuario']['complemento']; ?>" name="complemento" id="complement" maxlength="150" /><br>
      
           <input type="hidden" name="cliente_id" id="cliente_id" value="<?PHP echo $_SESSION['id_cliente']; ?>">
    
  
  <br>
<button type="submit" id="buttonmeusdados" value="Prosseguir para pagamento" name="submit_editar" />Editar</button>   </div> 
</form>  
</div>  
<div class="clear"> </div>


<?php require_once('footer.php'); ?>
