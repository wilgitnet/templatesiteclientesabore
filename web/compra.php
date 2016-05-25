 <?php require_once('header.php'); ?> 
    <div class="nz-breadcrumbs">
        <div class="container">
            <a href="">Inicio</a>
            <i class="fa fa-angle-double-right"></i>
            <span>Carrinho</span>
            <i class="fa fa-angle-double-right"></i>
            <span>Dados de entrega</span>
        </div>
    </div>

    
    <div class="content content-checkout">
        <div class="container">
        	<div class="data-delivery">
        		<div class="row">
        			<div class="col-md-9">
        				<h4 class="title-data-delivery">DIGITE AS INFORMAÇÕES PARA ENTREGA</h4>

        				<form>
	        				<div class="row">
	        					<div class="col-md-6">
			        				<label>CEP:</label>
			        				<input type="text" />
			        				<label>Logradouro:</label>
			        				<input type="text" />
			        				<label>Bairro:</label>
			        				<input type="text" />		
		        				</div>

		        				<div class="col-md-6">
			        				<label>Cidade:</label>
			        				<input type="text" />
			        				<label>Estado:</label>
			        				<input type="text" />
			        				<label class="label-number">Número:</label><label class="label-complement">Complemento:</label>
			        				<input type="text" class="input-number" />			        				
			        				<input type="text" class="input-complement"/>
		        				</div>
	        				</div>
	        				
	        				<div class="row">
	        					<div class="col-md-6">
	        						<input type="submit" class="button btn-red" value="Retornar ao carrinho"> 
	        					</div>
	        					<div class="col-md-6">
	        						<input type="submit" class="button btn-next" value="Prosseguir para o pagamento">
	        					</div>
	        				</div>
	        			</form>

        			</div>
        			<div class="col-md-3">
        				<table class="meus-pedidos mgT50">
							<thead>
								<tr>
									<th>MEUS PEDIDOS</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Seu carrinho está vazio</td>
								</tr>
								<tr>
									<td><p class="sub-titulo-carrinho">TOTAL: </p><span class="carrinho-valor">R$ 0,00</span></td>
								</tr>
							</tbody>
						</table>
					</div>	
        		</div>
        	</div>             
        </div>
    </div>
<?php require_once('footer.php'); ?>