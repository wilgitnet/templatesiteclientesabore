$(document).ready( function() {
  $("#formLogin").validate({
    rules:{
      login:{
        required: true
      },
      senha:{
        required: true
      },
    },


    messages:{
      login:{
        required: "Digite o seu login",
      },
      senha:{
        required: "Digite sua senha",
      },
    }
  });
});