$(document).ready( function() {
      pedido_situacao = 'close'
      compra_situacao = 'open';
      pagamento_situacao = 'close';
      dinheiro_situacao = 'close';
      ctcredito_situacao = 'close';

      $("#button3").click(function() {
        if(compra_situacao == 'open')
        {
          $("#compra_expand").hide(); 
          compra_situacao = 'close';
        }
      });

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

      $("#button3").click(function() {
        if(pagamento_situacao == 'close')
        {
          $("#pagamento_expand").show();  
          pagamento_situacao = 'open';
        }
        
      });
        

      $("#dinheiro").click(function() 
      {       
        $("#ctcredito_expand").hide();          
        $("#ctdebito_expand").hide(); 
        $("#dinheiro_expand").show(); 
      });

      $("#cartaocredito").click(function() 
      {       
        $("#ctcredito_expand").show();          
        $("#ctdebito_expand").hide(); 
        $("#dinheiro_expand").hide(); 
      });

      $("#cartaodebito").click(function() {
        $("#ctcredito_expand").hide();          
        $("#ctdebito_expand").show(); 
        $("#dinheiro_expand").hide(); 
      });
    }); 