
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
    
    <div class="container">
      <div class="row">
          <div class="col-md-6">
            <h4 class="title-register">Meus dados</h4>            
          </div>
          <div class="col-md-6">
            <input class="button-regiter" type="submit" onclick="returnhistorico()" value="Historico de pedidos"></input>
          </div>
      </div>
    </div>
  
    <div class="content content-checkout">
      <div class="container">
        <div class="register">
          <form id="formularioRegistro" method="POST" action="<?PHP echo $host; ?>/meus-dados">

            <div class="row">
              <div class="col-md-6">                            
                <label>Nome <span class="required">*</span></label>
                <input type="text" value="<?PHP echo $_SESSION['Usuario']['nome']; ?>"  placeholder="Nome" name="nome" id="nome" maxlength="50" />

                <label>Sobrenome <span class="required">*</span></label>
                <input type="text"  placeholder="Sobrenome" value="<?PHP echo $_SESSION['Usuario']['sobrenome']; ?>" name="sobrenome" id="sobrenome" maxlength="30" />

                <label>Celular </label>
                <input type="text" placeholder="Celular:" value="<?PHP echo $_SESSION['Usuario']['celular']; ?>" name="celular" id="celular" maxlength="30" />  

                <label>Telefone </label>
                <input type="text" placeholder="Telefone:" value="<?PHP echo $_SESSION['Usuario']['telefone']; ?>" name="telefone" id="telefone" maxlength="30" />    

                <label>E-mail <span class="required">*</span></label>
                <input type="text" value="<?PHP echo $_SESSION['Usuario']['email']; ?>" placeholder="email" name="email" id="email" maxlength="30" /> 

                <label>CEP <span class="required">*</span></label>
                <input type="text" placeholder="CEP" value="<?PHP echo $_SESSION['Usuario']['cep']; ?>" name="cep" id="cep" maxlength="9" />     
              </div>

              <div class="col-md-6">
                      
                <label>Estado <span class="required">*</span></label>
                <input type="text"  placeholder="Estado" value="<?PHP echo $_SESSION['Usuario']['estado']; ?>" name="estado" id="estado" maxlength="50"/>

                <label>Cidade <span class="required">*</span></label>
                <input type="text"  placeholder="Cidade" value="<?PHP echo $_SESSION['Usuario']['cidade']; ?>" name="cidade" id="cidade" maxlength="50"/>     

                <label>Bairro <span class="required">*</span></label>
                <input type="text"  placeholder="Bairro" value="<?PHP echo $_SESSION['Usuario']['bairro']; ?>" name="bairro" id="bairro" maxlength="50" />

                <label>Logradouro <span class="required">*</span></label>
                <input type="text"  placeholder="Endereço" value="<?PHP echo $_SESSION['Usuario']['endereco']; ?>" name="endereco" id="endereco" maxlength="150" />

                <label>Número <span class="required">*</span></label>
                <input type="text" placeholder="Nº" value="<?PHP echo $_SESSION['Usuario']['numero']; ?>" name="numero" id="number" maxlength="10" />                                       

                <label>Complemento </label>
                <input type="text" placeholder="Complemento" value="<?PHP echo $_SESSION['Usuario']['complemento']; ?>" name="complemento" id="complement" maxlength="150" /><br>

                <input type="hidden" name="cliente_id" id="cliente_id" value="<?PHP echo $_SESSION['id_cliente']; ?>">
                
              </div>

              <div class="col-md-12 mgT30">
                <button type="submit" id="buttonmeusdados"  name="submit_editar" />Editar</button>
              </div>
            </div>   
          </form>
        </div>
      </div>
    </div>  




<?php require_once('footer.php'); ?>
