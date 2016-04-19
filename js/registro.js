
$(document).ready( function() {
  
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
          required: true, minlength : 2
        },
        cep:{
          required: true, minlength : 2
        },
        telefone:{
          required: true, minlength : 2 
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
          required: "Digite o seu Estado",
          minLength: "O seu Estado deve conter, no mínimo, 2 caracteres"
        },
        cep:{
          required: "Digite o seu CEP",
          minLength: "O seu CEP deve conter, no mínimo, 2 caracteres"
        },
        telefone:{
          required: "Digite o seu Telefone residencial",
          minLength: "O telefone residencial deve conter, no mínimo, 2 caracteres"
        },
        celular:{
          required: "Digite o seu telefone celular",
          minLength: "O telefone celular deve conter, no mínimo, 2 caracteres"
        },
      }
    });
});