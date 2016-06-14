$(document).ready( function() {

  $("#troco").maskMoney({symbol:'R$ ', 
      showSymbol:true, thousands:'.', decimal:',', symbolStay: false});

  $('.pula').keypress(function(e){      
      /* 
       * verifica se o evento é Keycode (para IE e outros browsers)
       * se não for pega o evento Which (Firefox)
      */
     var tecla = (e.keyCode?e.keyCode:e.which);
     
     /* verifica se a tecla pressionada foi o ENTER */
     if(tecla == 13)
     {
         /* guarda o seletor do campo que foi pressionado Enter */
         campo =  $('.pula');
         /* pega o indice do elemento*/
         indice = campo.index(this);
         /*soma mais um ao indice e verifica se não é null
          *se não for é porque existe outro elemento
         */
        if(campo[indice+1] != null){
           /* adiciona mais 1 no valor do indice */
           proximo = campo[indice + 1];
           /* passa o foco para o proximo elemento */
           proximo.focus();
        }

        /* impede o sumbit caso esteja dentro de um form */
        e.preventDefault(e);
        return false;
     }      
  })

    $("#cep").mask("99999-999");
    $("#celular").mask("(99) 99999-9999");

  $('#senha1').blur(function()
  {
    if($('#senha1').val() != $('#senha').val())
    {
      alert('Confirmação de senha incorreta');
      $("#senha1").val('');
      $("#senha").val('');
      $("#senha").focus();
    }
  });

    
    //busca por cep ajax
    $('#cep').blur(function()
    {    
      if($('#cep').val() != '')
      {                    
        
        $("#cep-alert").hide();
        $("#loading").show(); 

        $.ajax({
              url : 'app/controller/registro_controller.php', 
              type : 'POST', 
              data: 'cep=' + $('#cep').val()+'&search=true&cliente_id='+$('#cliente_id').val(), 
              dataType: 'json', 
              success: function(data)
              {
                  if(data.success == 1)
                  {                                  
                      $('#endereco').val(data.dados.logradouro);                      
                      $('#bairro').val(data.dados.bairro);
                      $('#cidade').val(data.dados.cidade);
                      $('#estado').val(data.dados.uf);
                      $('#number').focus();                  
                      $("#loading").hide(); 

                      $("#loading_cep_valor").show();
                      $("#valor_cep").hide();                       

                      //ver como resolver aqui
                      if(data.dados.KM == 0)
                      {
                        data.dados.KM = 1;
                      }

                      //calculando valor de cep                       
                      $.ajax({
                          url : 'app/controller/compra_controller.php', 
                          type : 'POST', 
                          data: 'valor_km_entrega=' + $('#valor_km_entrega').val() +'&calc_km=true&km_distancia='+data.dados.KM+'&ajax=true', 
                          dataType: 'json', 
                          success: function(data)
                          {                              
                              if(data.success == 1)
                              {                                                  
                                  $("#loading_cep_valor").hide();
                                  $("#valor_cep").show();                       
                                  $("#valor_cep").html('R$ '+ data.valor);                       
                              }
                              else
                              {
                                $("#cep-alert").show();
                                $("#cep-alert").html('Ocorreu um erro no calculo do frete. Tente novamente');

                                $('#endereco').val('');
                                $('#bairro').val('');
                                $('#cidade').val('');
                                $('#estado').val('');
                                $('#cep').focus();                                    
                                $("#loading_cep_valor").hide();
                                $("#valor_cep").show();                       
                              }
                          }
                      });      
                      return false;    
                                              
                  }
                  else
                  {
                    $("#cep-alert").show();
                    $("#cep-alert").html(data.message);
                    
                    $('#endereco').val('');
                    $('#bairro').val('');
                    $('#cidade').val('');
                    $('#estado').val('');
                    $('#cep').focus();                                    
                    $("#loading").hide(); 
                  }
              }
          });      
          return false;
        }
    });  

      pedido_situacao = 'close'
      compra_situacao = 'open';
      pagamento_situacao = 'close';
      dinheiro_situacao = 'close';
      ctcredito_situacao = 'close';

      $(".finalizar-endereco").click(function() {
        
        $("#refresh").show();
        $("#endereco_completo").hide(); 
        $("#alert-error").hide();  
    
        var dados = $("#endereco_compra").serialize();        
        
        //calculando valor de cep                       
        $.ajax({            
            type: "POST",
            url: 'app/controller/compra_controller.php',
            data: dados+'&ajax=true&finalizar_endereco=true',
            dataType: 'json', 
            success: function(data)
            {                              
                if(data.success == 1)
                {                                                 
                    $("#refresh").hide();
                    $("#pagamento_expand").show(); 
                }
                else
                {                    
                    $("#alert-error").show();
                    $(".alert-message").html(data.mensagem);   
                    $("#refresh").hide();
                    $("#endereco_completo").show(); 
                }
            }
        });              
        return false;           
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

      $("#finalizar-endereco").click(function() {
        if(pagamento_situacao == 'close')
        {
          $("#pagamento_expand").show();  
          pagamento_situacao = 'open';
        }
      });

      $("#dinheiro").click(function() 
      {       
        $("#cep-alert").hide();  
        $("#escolha-usuario").html("Você selecionou dinheiro como forma de pagamento");
        $("#escolha-usuario").show();
        $("#realizar-checkout").show();
        $("#dinheiro-troco").show();
        $("#troco").focus();
        $("#tipo_pagamento").val(3);        
      });

      $("#cartaocredito").click(function() 
      {      
        $("#cep-alert").hide();  
        $("#escolha-usuario").html("Você selecionou cartão de crédito como forma de pagamento");
        $("#escolha-usuario").show();
        $("#realizar-checkout").show();
        $("#dinheiro-troco").hide();        
        $("#tipo_pagamento").val(1);        
      });

      $("#cartaodebito").click(function() {
        $("#cep-alert").hide();  
        $("#escolha-usuario").html("Você selecionou cartão de débito como forma de pagamento");
        $("#escolha-usuario").show();
        $("#realizar-checkout").show();
        $("#dinheiro-troco").hide();        
        $("#tipo_pagamento").val(2);        
      });
      

      //finalizando pedido
      $("#finalizar-pedido-compra").click(function() 
      {               
        
        $("#cep-alert").hide();  
        $("#refresh").show();
        $("#pagamento_expand").hide();         
        
        //finalizando pedido                      
        $.ajax({            
            type: "POST",
            url: 'app/controller/compra_controller.php',
            data: 'ajax=true&finalizar=true&tipo_pagamento='+ $("#tipo_pagamento").val() +'&troco='+$("#troco").val(),
            dataType: 'json', 
            success: function(data)
            {                              
                if(data.success == 1)
                {                                 
                    location.href=$("#host").val() + "/acompanhamento/"+data.pedido_id;
                }
                else
                {                                    
                    $("#cep-alert").show();
                    $("#cep-alert").html("<div class='alert error'><div class='alert-message'>"+data.mensagem+"</div><span class='close-alert'>X</span></div>")
                    
                    $("#refresh").hide();
                    $("#pagamento_expand").show(); 
                }
            }
        });              
        return false;          

      });


    }); 