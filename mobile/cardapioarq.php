				<?PHP foreach ($produtos['dados']['CategoriaArray'] as $categoriaArray) { ?>	
					<h5 onclick="hrefH5('<?PHP echo $categoriaArray['Categorias']['placeholder']; ?>')">
						<?PHP echo $categoriaArray['Categorias']['nome']; ?>
					</h5><hr>						
				<?PHP } ?>