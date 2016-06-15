<script>
	function GoMenu(categoria)
    {    	
      location.href="<?PHP echo $host; ?>/categoria/"+categoria;
    }
</script>
<h2 class="sub-title-home">MENU </h2>
<div class="nz-separator"></div>
<?PHP foreach($_SESSION['menu'] as $menu){ ?>
	<div class="acordion">
		<span class="opcoes-cardapio" onclick="GoMenu('<?PHP echo $menu['Categorias']['placeholder'] ?>');">
			<?PHP echo $menu['Categorias']['nome']; ?>
		</span>
		<span class="arrow-acordion"></span>
	</div>
<?PHP } ?>				