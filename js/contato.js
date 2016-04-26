$(document).ready( function() {  
  $("#nome").focus();

  $("#formularioContato").validate({
    // Define as regras
    rules:{
      nome:{
        required: true, minlength: 2
      },
      email:{
        // campoEmail será obrigatório (required) e precisará ser um e-mail válido (email)
        required: true, email: true
      },
      mensagem:{
        // campoMensagem será obrigatório (required) e terá tamanho mínimo (minLength)
        required: true, minlength: 2
      }
    },
    // Define as mensagens de erro para cada regra
    messages:{
      nome:{
        required: "Digite o seu nome",
        minLength: "O seu nome deve conter, no mínimo, 2 caracteres"
      },
      email:{
        required: "Digite o seu e-mail para contato",
        email: "Digite um e-mail valido"
      },
      mensagem:{
        required: "Digite a sua mensagem",
        minLength: "A sua mensagem deve conter, no mínimo, 2 caracteres"
      }
    }
  });
});
