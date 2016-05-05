
$(document).ready( function() {

	//excluindo pedido
	$('#pedido_ajax').on('click', '.excluir', function(){
		
		var host 		= $(this).attr("host");	
		var plataforma  = $(this).attr("plataforma");	
		var id_produto  = $(this).attr("id_produto");			
		var id_cliente  = $(this).attr("id_cliente");			
		var indice  	= $(this).attr("indice");											
		
		$("#pedido_ajax").hide(); 
		$("#refresh").show(); 
		$.ajax({
            url : 'app/controller/carrinho_controller.php', 
            type : 'POST', 
            data: 'ajax=true&id_cliente=' + id_cliente +'&exc=true&produto_id='+id_produto+'&indice='+indice, 
            dataType: 'json', 
            success: function(data)
            {            	
                if(data.success == 1)
                {                              	
                	atualiza(plataforma, host);
					$("#refresh").hide(); 
                    $("#pedido_ajax").show(); 
                }
                else
                {
                  alert(data.message);                                  
                  $("#pedido_ajax").show(); 
				  $("#refresh").hide(); 
                }                
            }
        }); 		
    });	     

    //borda recheada
    $('#pedido_ajax').on('click', '.borda', function(){

    	if($(this).is(':checked'))
    	{    		
    		var host 		= $(this).attr("host");	
			var plataforma  = $(this).attr("plataforma");

    		$("#pedido_ajax").hide(); 
			$("#refresh").show(); 
			$.ajax({
	            url : 'app/controller/carrinho_controller.php', 
	            type : 'POST', 
	            data: 'ajax=true&borda=true&recheada=true', 
	            dataType: 'json', 
	            success: function(data)
	            {            		            	
	                if(data.success == 1)
	                {                              	
	                	atualiza(plataforma, host);
						$("#refresh").hide(); 
	                    $("#pedido_ajax").show(); 
	                }
	                else
	                {
	                  alert(data.message);                                  
	                  $("#pedido_ajax").show(); 
					  $("#refresh").hide(); 
	                } 	                
	            }
	        }); 
    	}
    	else
    	{

    		var host 		= $(this).attr("host");	
			var plataforma  = $(this).attr("plataforma");

    		$("#pedido_ajax").hide(); 
			$("#refresh").show(); 
			$.ajax({
	            url : 'app/controller/carrinho_controller.php', 
	            type : 'POST', 
	            data: 'ajax=true&borda=true&recheada=false', 
	            dataType: 'json', 
	            success: function(data)
	            {            		            	
	                if(data.success == 1)
	                {                              	
	                	atualiza(plataforma, host);
						$("#refresh").hide(); 
	                    $("#pedido_ajax").show(); 
	                }
	                else
	                {
	                  alert(data.message);                                  
	                  $("#pedido_ajax").show(); 
					  $("#refresh").hide(); 
	                } 	                
	            }
	        }); 
    	}

	});	         	

	//meia ou pizza inteira evento 
    $('#pedido_ajax').on('click', '.meia', function(){

    	var host 		= $(this).attr("host");	
		var plataforma  = $(this).attr("plataforma");	
		var id_produto  = $(this).attr("id_produto");						
		var indice  	= $(this).attr("indice");						

    	if($(this).is(':checked'))
    	{    		
    		$("#pedido_ajax").hide(); 
			$("#refresh").show(); 
			$.ajax({
	            url : 'app/controller/carrinho_controller.php', 
	            type : 'POST', 
	            data: 'ajax=true&meia=true&inteira=false&produto_id='+id_produto+'&indice='+indice, 
	            dataType: 'json', 
	            success: function(data)
	            {            		            	
	                if(data.success == 1)
	                {                              	
	                	atualiza(plataforma, host);
						$("#refresh").hide(); 
	                    $("#pedido_ajax").show(); 
	                }
	                else
	                {
	                  alert(data.message);                                  
	                  $("#pedido_ajax").show(); 
					  $("#refresh").hide(); 
	                } 	                
	            }
	        }); 
    	}
    	else
    	{    		
    		$("#pedido_ajax").hide(); 
			$("#refresh").show(); 
			$.ajax({
	            url : 'app/controller/carrinho_controller.php', 
	            type : 'POST', 
	            data: 'ajax=true&meia=true&inteira=true&produto_id='+id_produto+'&indice='+indice, 
	            dataType: 'json', 
	            success: function(data)
	            {            		            	
	                if(data.success == 1)
	                {                              	
	                	atualiza(plataforma, host);
						$("#refresh").hide(); 
	                    $("#pedido_ajax").show(); 
	                }
	                else
	                {
	                  alert(data.message);                                  
	                  $("#pedido_ajax").show(); 
					  $("#refresh").hide(); 
	                } 	                
	            }
	        }); 
    	}
 	});    


    //meia ou pizza inteira evento 
    $('#pedido_ajax').on('click', '.broto', function(){

    	var host 		= $(this).attr("host");	
		var plataforma  = $(this).attr("plataforma");	
		var id_produto  = $(this).attr("id_produto");	
		var indice  	= $(this).attr("indice");											

    	if($(this).is(':checked'))
    	{    		
    		$("#pedido_ajax").hide(); 
			$("#refresh").show(); 
			$.ajax({
	            url : 'app/controller/carrinho_controller.php', 
	            type : 'POST', 
	            data: 'ajax=true&broto=true&inteira=false&produto_id='+id_produto+'&indice='+indice, 
	            dataType: 'json', 
	            success: function(data)
	            {            		            	
	                if(data.success == 1)
	                {                              	
	                	atualiza(plataforma, host);
						$("#refresh").hide(); 
	                    $("#pedido_ajax").show(); 
	                }
	                else
	                {
	                  alert(data.message);                                  
	                  $("#pedido_ajax").show(); 
					  $("#refresh").hide(); 
	                } 	                
	            }
	        }); 
    	}
    	else
    	{    		
    		$("#pedido_ajax").hide(); 
			$("#refresh").show(); 
			$.ajax({
	            url : 'app/controller/carrinho_controller.php', 
	            type : 'POST', 
	            data: 'ajax=true&broto=true&inteira=true&produto_id='+id_produto+'&indice='+indice, 
	            dataType: 'json', 
	            success: function(data)
	            {            		            	
	                if(data.success == 1)
	                {                              	
	                	atualiza(plataforma, host);
						$("#refresh").hide(); 
	                    $("#pedido_ajax").show(); 
	                }
	                else
	                {
	                  alert(data.message);                                  
	                  $("#pedido_ajax").show(); 
					  $("#refresh").hide(); 
	                } 	                
	            }
	        }); 
    	}
 	});    
 }); 




function atualiza(plataforma, host){	
   
	$.get(host, function(resultado){
		console.log(resultado);
		$('#pedido_ajax').html(resultado);
   })	      
}