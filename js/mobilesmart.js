
        
        pedido_situacao = 'close';
    $(document).ready( function() {

      $("#pedido").click(function() {
        if(pedido_situacao == 'close')
        {
          $("#pedido-expand").show(); 
          pedido_situacao = 'open';
        }
        else
        {
          $("#pedido-expand").hide(); 
          pedido_situacao = 'close';  
        }
      });
        cardapio_situacao='close';
      $("#cardapio").click(function() {
        if(cardapio_situacao == 'close')
        {
          $("#cardapio-expand").show(); 
          cardapio_situacao = 'open';
        }
        else
        {
          $("#cardapio-expand").hide(); 
          cardapio_situacao = 'close';  
        }
        
      });
    });


