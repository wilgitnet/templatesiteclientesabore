<div class="footer">
	<div class="container border-footer">
		<div class="row">
			<div class="col-md-3">
				<h6 class="widget_title">SOBRE</h6>
				<ul class="list-footer">
					<li><a href="<?PHP echo $host; ?>/quem-somos"><?PHP echo substr($_SESSION['quem_somos'], 0, 42); ?></a>...</li>
					<li><div class="social-links">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>							
						</div>
					</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h6 class="widget_title">CÁRDAPIO</h6>
				<ul class="list-footer">
					<?PHP 
						if(!empty($_SESSION['menu'][0]))
						{
							echo "<li>{$_SESSION['menu'][0]['Categorias']['nome']}</li>";
						}
					?>					
					<?PHP 
						if(!empty($_SESSION['menu'][1]))
						{
							echo "<li>{$_SESSION['menu'][1]['Categorias']['nome']}</li>";
						}
					?>					
					<?PHP 
						if(!empty($_SESSION['menu'][2]))
						{
							echo "<li>{$_SESSION['menu'][2]['Categorias']['nome']}</li>";
						}
					?>										
				</ul>
			</div>
			<div class="col-md-3">
				<h6 class="widget_title">LINKS</h6>
				<ul class="list-footer">
					<li><a href="carrinho">MEUS PEDIDOS</a></li>
					<li><a href="categoria/pizzas">CARDAPIO</a></li>
					<li><a href="contato">FALE CONOSCO</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<h6 class="widget_title">INFORMAÇÕES</h6>
				<ul class="list-footer">
					<li>
						Horário de atendimento:<br/>
						<?PHP echo $_SESSION['funcionamento'][0]; ?>
						<br>
						<?PHP echo $_SESSION['funcionamento'][1]; ?>
					</li>
					<li>Endereço:<br/>
					<?PHP echo $_SESSION['endereco']; ?></li>
				</ul>
			</div>
		</div>
	</div>
	<p class="copyrights">© <?PHP echo $_SESSION['footer']; ?></p>
</div>
    
</body>
</html>
