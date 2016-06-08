<?PHP require_once('app/controller/acompanhamento_controller.php'); ?>
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
            <div class="table-responsive"> 
                <table class="table-cart historic-table table" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Data</th>
                            <th>Valor</th>
                            <th>Status</th>
                            <th>Em Andamento</th>
                            <th>Visualizar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?PHP 
                        if(count($pedidos['dados']) > 0){

                            foreach($pedidos['dados'] as $pedido)
                            {                            
                    ?>
                              <tr class="cart_item">
                                <td>
                                    <a href="<?PHP echo $host; ?>/acompanhamento/<?PHP echo $pedido['Pedido']['id']; ?>">
                                        <?PHP echo $pedido['Pedido']['id']; ?>
                                    </a>
                                </td>
                                <td><?php echo date('d/m/y H:i', strtotime($pedido['Pedido']['data_pedido'])); ?></td>
                                <td>R$ <?PHP echo number_format($pedido['Pedido']['valor_total'], 2, ',', '.'); ?></td>
                                <td><?PHP echo $pedido['SituacaoPedido']['descricao']; ?></td>
                                <td>
                                    <?PHP 
                                        if($pedido['Pedido']['acompanhamento'] == 'S')
                                        {
                                            echo "SIM";
                                        }
                                        else
                                        {
                                            echo "NÃO";
                                        }
                                     ?>
                                </td>
                                <td>
                                    <a href="<?PHP echo $host; ?>/acompanhamento/<?PHP echo $pedido['Pedido']['id']; ?>">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </td>                         
                              </tr>                
                        <?PHP } ?>
                      <?PHP } ?>
                    </tbody>
                </table>
            </div>
         
        </div>
    </div>

<?php require_once('footer.php'); ?>