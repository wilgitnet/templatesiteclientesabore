 <?php require_once('header.php'); ?>  

 <div class="nz-breadcrumbs">
    <div class="container">
        <a href="">Inicio</a>
        <i class="fa fa-angle-double-right"></i>
        <span>QUEM SOMOS</span>
    </div>
</div>

	<div class="container">
		<div class="about">
			<div class="row">
				<div class="col-md-6">
					<h4><?PHP echo $_SESSION['nome_fantasia']; ?></h4>
					<p><?PHP echo $_SESSION['quem_somos']; ?></p>					
				</div>
				<div class="col-md-6">
					<img src="<?PHP echo $host; ?>/web/images/chef.jpg">
				</div>
			</div>
		</div>
	</div>


<?php require_once('footer.php'); ?>
