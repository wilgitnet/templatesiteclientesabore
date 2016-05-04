
<?php require_once('header.php'); ?>

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
  <form id="meus-dados" method="GET" >
   
    <br>


    
      <input type="text"  placeholder="Nome : Lucas Barbosa de Alencar" name="nome" id="nome" maxlength="50" />

      <input type="text"  placeholder="email : lelo245@hotmail.com" name="email" id="email" maxlength="30" />

      <input type="text"  placeholder="Celular: 11-11111-1111" name="celular" id="celular" maxlength="30" />

      <input type="text"  placeholder="CPF: 111.111.111-11" name="cpf" id="cpf" maxlength="30" />

      <input type="password" value="" placeholder="Senha : seilásuasenha" name="senha" id="senha" maxlength="20" />
    
      <input type="password" id="senha" value="" name="senha1" placeholder="Senha : seilásuasenha" maxlength="20" />
    
      <input type="text" placeholder="CEP : 01419100" name="cep" id="cep" maxlength="9" />                

      <input type="text" placeholder="Estado : São Paulo" name="cep" id="cep" maxlength="9" />                

        <br>
            <input type="text"  placeholder="Cidade : Santa Isabel" name="cidade" id="cidade" maxlength="50"/>

            <input type="text"  placeholder="Bairro : Eldorado" name="bairro" id="bairro" maxlength="50" />

        <br>
            <input type="text"  placeholder="Endereço : Benjamim Rodrigues" name="endereco" id="endereco" maxlength="150" />

            <input type="text" placeholder="Nº : 139" name="numero" id="number" maxlength="10" />

            <input type="text" placeholder="Complemento" name="complemento" id="complement" maxlength="150" /><br>
      
           
    
  </form>  
  <br>
<button type="submit" id="buttonmeusdados" value="Prosseguir para pagamento" />Editar</button>   </div> 
</div>  
<div class="clear"> </div>


<?php require_once('footer.php'); ?>
