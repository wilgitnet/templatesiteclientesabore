 <?php require_once('header.php'); ?>  

    <div class="nz-breadcrumbs">
        <div class="container">
            <a href="">Inicio</a>
            <i class="fa fa-angle-double-right"></i>
            <span>Histórico de pedidos</span>
        </div>
    </div>

    <div class="content content-checkout pdB150">
        <div class="container">
          <h4 class="title-info">Histórico de pedidos</h4>

            <table class="table-cart historic-table" cellspacing="0">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Data</th>
                        <th>Valor</th>
                        <th>Status</th>
                        <th>Visualizar</th>
                    </tr>
                </thead>
                <tbody>

                  <tr class="cart_item">
                    <td>666</td>
                    <td>20/02/2016</td>
                    <td>R$ 39,90</td>
                    <td>Entregue</td>
                    <td><i class="fa fa-search"></i></td>                         
                  </tr>

                  <tr class="cart_item">
                    <td>666</td>
                    <td>20/02/2016</td>
                    <td>R$ 39,90</td>
                    <td>Entregue</td>
                    <td><i class="fa fa-search"></i></td>                         
                  </tr>

                </tbody>
            </table>
            <div class="botao-voltar">
              <input type="submit" class="button limpar-carrinho" value="Voltar">               
            </div>   
         
        </div>
    </div>

<?php require_once('footer.php'); ?>