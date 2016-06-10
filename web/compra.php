<?PHP require_once('app/controller/compra_controller.php'); ?>
<?php require_once('header.php'); ?> 
<script src="<?PHP echo $host; ?>/js/maskMoney.js" type="text/javascript"></script>
<script>
function returnendereco()
{
  location.href="<?PHP echo $host; ?>/compra"
}	
</script>
<script src="<?PHP echo $host; ?>/js/compra.js"></script>
    <div class="nz-breadcrumbs">
        <div class="container">
            <a href="">Inicio</a>
            <i class="fa fa-angle-double-right"></i>
            <span>Carrinho</span>
            <i class="fa fa-angle-double-right"></i>
            <span>Dados de entrega</span>
        </div>
    </div>

<div class="grids" id="compra_expand">
	<div class="feedback2" id="refresh" style="display:none" align="center">
		<br>

	              <h4>Aguarde, realizando sua solicitação</h4>              
	              <img src="<?PHP echo $host; ?>/images/loading.gif" width="100" height="100">           
            <br>
	        <br>        
	</div>
	
	<div class='alert' id="cep-alert" style="display: none">			
	</div>  
    <div class="content content-checkout" id="endereco_completo">
        <div class="container">
        	<div class="data-delivery">        	
        		<div class="row">
        			<div class="col-md-9">        				
        				<h4 class="title-data-delivery">DIGITE AS INFORMAÇÕES PARA ENTREGA</h4>        				
        				<form id="endereco_compra">
	        				<div class="row">
	        					<div class="col-md-6">
	        						<div id="loading" style="display:none" >
						                <img src="<?PHP echo $host; ?>/images/loading.gif" width="25" height="25" >
						            </div>   
			        				<label>CEP:</label>
			        				<input type="text" value="<?PHP if(!empty($_SESSION['pedido']['endereco']['cep'])) echo $_SESSION['pedido']['endereco']['cep']; ?>" placeholder="CEP" name="cep" class="pula" id="cep" maxlength="9" />      

			        				<label>Estado:</label>
			        				<input type="text" class="pula" value="<?PHP if(!empty($_SESSION['pedido']['endereco']['estado'])) echo $_SESSION['pedido']['endereco']['estado']; ?>" placeholder="Estado" Readonly="Readonly" name="estado" id="estado"> 
			        				<label>Cidade:</label>
			        				<input type="text" class="pula" value="<?PHP if(!empty($_SESSION['pedido']['endereco']['cidade'])) echo $_SESSION['pedido']['endereco']['cidade']; ?>" placeholder="Cidade" Readonly="Readonly" name="cidade" id="cidade" maxlength="50"/>
			        				
		        				</div>

		        				<div class="col-md-6">
			        				<label>Bairro:</label>
			        				<input type="text" class="pula" value="<?PHP if(!empty($_SESSION['pedido']['endereco']['bairro'])) echo $_SESSION['pedido']['endereco']['bairro']; ?>" placeholder="Bairro" name="bairro" id="bairro" maxlength="50" />
			        				<label>Logradouro:</label>
			        				<input type="text" class="pula" value="<?PHP if(!empty($_SESSION['pedido']['endereco']['endereco'])) echo $_SESSION['pedido']['endereco']['endereco']; ?>" placeholder="Endereço residencial" name="endereco" id="endereco" maxlength="150" />   		
			        				<label class="label-number">Número:</label><label class="label-complement">Complemento:</label>
			        				<input type="text"  class="input-number pula" value="<?PHP if(!empty($_SESSION['pedido']['endereco']['numero'])) echo $_SESSION['pedido']['endereco']['numero']; ?>" placeholder="Número" name="numero" id="number" maxlength="10" />			        				
			        				<input type="text" class="input-complement pula" value="<?PHP if(!empty($_SESSION['pedido']['endereco']['complemento'])) echo $_SESSION['pedido']['endereco']['complemento']; ?>" placeholder="Complemento" name="complemento" id="complement" maxlength="150" />
		        				</div>
	        				
    	        				<?PHP if(empty($_SESSION['Usuario'])){ ?>
    	        				<div class="col-md-6">	        						
    		        				<label>Nome:</label>
    		        				<input type="text" class="pula" value="" placeholder="Nome" name="nome" id="nome" maxlength="50" />

    		        				<label>Sobrenome:</label>
    		        				<input type="text" class="pula" value="" placeholder="Sobrenome" name="sobrenome" id="sobrenome" maxlength="50" />	

    		        				<label>Email:</label>
    		        				<input type="text" class="pula" value="" placeholder="Endereço de email" name="email" id="email" maxlength="100" />
    		        				
    		        			</div>

    	        				<div class="col-md-6">	        						
    		        				<label>Celular:</label>
    		        				<input type="text" value="" class="pula" placeholder="Telefone celular" name="celular" id="celular" maxlength="30" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" />

    		        				<label>Senha:</label>
    		        				<input type="password" class="pula" value="" placeholder="Senha para acompanhamento" name="senha" id="senha" maxlength="20" />	

    		        				<label>Confirmar Senha:</label>
    								<input type="password" class="pula" id="senha1" value="" name="senha1" placeholder="Repita sua senha" maxlength="20" />            		        						        			
    		        			</div>
    	        				<?PHP } ?>
                            </div>					        			
	        				<div class="row">
	        					<div class="col-md-6">
	        						<input type="submit" class="button btn-red" value="Retornar ao carrinho"> 
	        					</div>
	        					<div class="col-md-6">
	        						<input type="hidden" name="cliente_id" id="cliente_id" value="<?PHP echo $_SESSION['id_cliente']; ?>">			
									<input type="hidden" name="valor_km_entrega" id="valor_km_entrega" value="<?PHP echo $_SESSION['valor_km_entrega']; ?>">			
	        						<input type="button" class="button btn-next finalizar-endereco pula" value="Prosseguir para o pagamento">
	        					</div>
	        				</div>
	        			</form>

        			</div>
        			<div class="col-md-3">
        				<?PHP require_once('pedido.php') ?>
					</div>	
        		</div>
        	</div>             
        </div>
    </div>

    <div class="content content-checkout pdB60" id="pagamento_expand" style="display: none">
        <div class="container">
            <div class="data-delivery">
                <div class="row">
                    <div class="col-md-9">                    	
                        <h4 class="title-data-delivery">ESCOLHA SEU MÉTODO DE PAGAMENTO</h4>
                   
                        <div class="options-checkout">
                            <div class="col-md-4" id="dinheiro">
                                <div class="money-option">
                                    <div class="money">
                                        <span>
                                            <i class="fa fa-usd" aria-hidden="true"></i>
                                        </span>                                    
                                    </div>
                                    <p class="sub-title-money">DINHEIRO</p>
                                </div>
                            </div>
                            <div class="col-md-4" id="cartaocredito">
                                <div class="cred">
                                    <img class="cart-cred" src="<?PHP echo $host; ?>/web/images/cart2.png">
                                    <p class="sub-title-cred">CARTÃO DE CRÉDITO</p>
                                </div> 

                            </div>
                            <div class="col-md-4" id="cartaodebito">
                                <div class="deb">
                                    <img class="cart-deb" src="<?PHP echo $host; ?>/web/images/cart.png">
                                    <p class="sub-title-deb">CARTÃO DE DÉBITO</p>
                                </div>
                            </div>
                        </div>

                        <div class="troco" style="display: none" id="dinheiro-troco">
                            <p>Precisa de troco? </p>
                            <input type="text" placeholder="R$" name="troco" id="troco">
                        </div>                                              
                        <div class="troco valor-total-compra">
                            <p>Valor Completo de Compra:</p>
                            <P>R$ <?PHP echo number_format($valor_total, 2, ',', '.'); ?></P>
                        </div>
                        <input type="hidden" name="tipo_pagamento" id="tipo_pagamento" value="">	
                        <input type="hidden" name="host" id="host" value="<?PHP echo $host; ?>">	
                        <div class="mensagem-escolha-pagamento" style="display: none" id="escolha-usuario"></div>
                        <div class="buttons-cart">
                            <input type="button" onclick="returnendereco()" class="button limpar-carrinho" value="Retornar ao endereço"> 
                            <div id="realizar-checkout"  style="display: none">
                            	<input type="submit" id="finalizar-pedido-compra" class="dados-de-entrega"  value="Finalizar pagamento">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <?PHP include('pedido.php'); ?>
                    </div>  
                </div>
            </div>
        </div>
    </div>
 </div>
<?php require_once('footer.php'); ?>