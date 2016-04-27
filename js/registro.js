
$(document).ready( function() {
  $("#documento").focus();
  
  $('#documento').bind('keydown',soNums); 

  //Inicio Mascara Telefone
  $.mask.definitions['~']='[+-]';  
  $('#celular').focusout(function(){
    var phone, element;
    element = $(this);
    element.unmask();
    phone = element.val().replace(/\D/g, '');
    if(phone.length > 10) {
      element.mask("(99) 99999-999?9");
    } else {
      element.mask("(99) 9999-9999?9");
    }
  }).trigger('focusout');
  //finalizando mascara de telefone
  $("#telefone").mask("(99) 9999-9999");
  $("#cep").mask("99999-999");

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
      $("#loading").show(); 
      $.ajax({
            url : 'app/controller/registro_controller.php', 
            type : 'POST', 
            data: 'cep=' + $('#cep').val()+'&search=true', 
            dataType: 'json', 
            success: function(data)
            {
                if(data.success == 1)
                {                             
                    $('#endereco').val(data.dados.logradouro);
                    $('#bairro').val(data.dados.bairro);
                    $('#cidade').val(data.dados.cidade);
                    $('#estado').val(data.dados.uf);
                    $('#numero').focus();                  
                    $("#loading").hide(); 
                }
                else
                {
                  alert('Informar um CEP válido');                
                  $("#loading").hide(); 
                }
            }
        });      
        return false;
      }
  });  
  
  //validacao de formulario
  $("#formularioRegistro").validate({
      rules:{
        documento:{
          required: true, minlength: 14
        },
        usuario:{
          required: true, minlength: 2
        },
        senha:{
          required: true, minlength: 2
        },
        senha1:{
          required: true, minlength: 2
        },
        nome:{
          required: true, minlength: 2
        },
        email:{
          required: true, email: true
        },
        endereco:{
          required: true, minlength: 2
        },
        numero:{
          required: true, minlength: 2
        },
        bairro:{
          required: true, minlength : 2
        },
        cidade:{
          required: true, minlength: 2
        },
        estado:{
          required: true
        },
        cep:{
          required: true
        },
        celular:{
          required: true, minlength : 2 
        },        
      },
      messages:{
        documento:{
          required: "Digite seu CPF ou CNPJ",
          minLength: "O seu CPF deve conter, no mínimo, 14 caracteres"
        },
        usuario:{
          required: "Digite o seu Usuário",
          minLength: "O seu Usuário deve conter, no mínimo, 2 caracteres"
        },
        senha:{
          required: "Digite sua Senha",
          minLength: "A sua senha deve conter, no mínimo, 2 caracteres"
        },
        senha1:{
          required: "Digite a sua Senha",
          minLength: "A sua senha deve conter, no mínimo, 2 caracteres"
        },
        nome:{
          required: "Digite o seu nome",
          minLength: "O seu nome deve conter, no mínimo, 2 caracteres"
        },
        email:{
          required: "Digite o seu Email",
          email:"Digite um email Válido"
        },
        endereco:{
          required: "Digite o seu Endereço",
          minLength: "O seu Endereço deve conter, no mínimo, 2 caracteres"
        },
        numero:{
          required: "Digite o seu Numero",
          minLength: "O seu numero deve conter, no mínimo, 2 caracteres"
        },
        bairro:{
          required: "Digite o seu nome",
          minLength: "O seu nome deve conter, no mínimo, 2 caracteres"
        },
        cidade:{
          required: "Digite o nome de sua cidade",
          minLength: "A sua cidade deve conter, no mínimo, 2 caracteres"
        },
        estado:{
          required: "Digite o seu Estado"          
        },
        cep:{
          required: "Digite o seu CEP"          
        },
        celular:{
          required: "Digite o seu Celular",
          minLength: "O Celular deve conter, no mínimo, 2 caracteres"
        },        
      }
    });
});

// funcao para somente numeros no input
function soNums(e){
 
    //teclas adicionais permitidas (tab,delete,backspace,setas direita e esquerda)
    keyCodesPermitidos = new Array(8,9,37,39,46);
     
    //numeros e 0 a 9 do teclado alfanumerico
    for(x=48;x<=57;x++){
        keyCodesPermitidos.push(x);
    }
     
    //numeros e 0 a 9 do teclado numerico
    for(x=96;x<=105;x++){
        keyCodesPermitidos.push(x);
    }
     
    //Pega a tecla digitada
    keyCode = e.which; 
     
    //Verifica se a tecla digitada é permitida
    if ($.inArray(keyCode,keyCodesPermitidos) != -1){
        return true;
    }    
    return false;
}