function atualizar()
{ 
    $("#loading").show();
    $("#status_online").hide();

    //calculando valor de cep                       
      $.ajax({
          url : 'app/controller/acompanhamento_controller.php', 
          type : 'POST', 
          data: 'pedido_id=' + $('#pedido_id').val()+'&ajax=true&acompanhamento=true', 
          dataType: 'json', 
          success: function(data)
          {                              
              $("#loading").hide();              
              $("#status_online").html(data);              
              $("#status_online").show();
          }
      });      
      return false;    
}

// Definindo intervalo que a função será chamada
setInterval("atualizar()", 40000);