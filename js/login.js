$(document).ready( function() {
  $("#formLogin").validate({
    rules:{
      usuario:{
        required: true
      },
      senha:{
        required: true
      },
    },


    messages:{
      usuario:{
        required: "Digite o seu login",
      },
      senha:{
        required: "Digite sua senha",
      },
    }
  });
});