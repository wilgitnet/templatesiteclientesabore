<script type="text/javascript">
	function hrefH5(placeholder)
	{
		location.href="<?PHP echo $host; ?>/categoria/"+placeholder;
	}	
</script>
<h3>Cardápio</h3>
<?PHP foreach ($_SESSION['menu'] as $categoriaArray) { ?>
	<h5 onclick="hrefH5('<?PHP echo $categoriaArray['Categorias']['placeholder']; ?>')"><?PHP echo $categoriaArray['Categorias']['nome']; ?></h5><hr>
<?PHP } ?>	