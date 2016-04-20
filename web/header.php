

<!DOCTYPE HTML>
<html>
<head>
<title>La Favoritta</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="web/css/style.php" type="text/css" media="all" />
<link rel="stylesheet" href="web/css/slider-styles.css" type="text/css" media="all" /> 
<link rel="stylesheet" href="http://localhost/templatesiteclientesabore/css/style.css" type="text/css" media="all" />
<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<link href="signin.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script src="js/ie-emulation-modes-warning.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="http://localhost/templatesiteclientesabore/js/jquery.js"></script>
<script type="text/javascript" src="web/js/slider.js"></script>
<script src="http://localhost/templatesiteclientesabore/js/validate.js"></script>

    <script type="text/javascript">
 .pagination-centered {
                 text-align: center;
}
    </script>
</head>
<body>
<div class="wrap">
	<div class="top-head">
		<div class="welcome"><img src="web/images/pequena.png"  alt="Pequena"/>Bem vindo a <span>Pizzaria Favoritta</span></div>
		<div class="top-nav">
        
	        <ul>

                    <li><a href="login.php">Login  </a></li>
                    <li><a href="registro.php">Registro </a></li>
                    <li><a href="contato.php">Contato </a></li>

	         <!--              CASO ESTEJA LOGADO 
                <li class="active"><a href="index.html">Bem vindo Lucas,</a></li>
	            <li><a href="#">Pedidos</a></li>
	            <li><a href="#">Sair</a></li> 
              -->

	        </ul>
	    </div>

	    <div class="clear"> </div>
    </div>
	<div class="header">
	<div class="logo"><a href="index.html"><img src="web/images/logo.png"  alt="Favorita"/></a></div>
    <div class="search">
    	<form>
    		<input type="text" value="" placeholder="Pesquise aqui" />
    		<input type="submit" value="" />
    	</form>
    </div>
    <div class="clear"> </div>
	</div>
	<div class="nav">
        <ul>
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="#">Pedidos</a></li>
            <li><a href="#">Pizzas</a></li>
            <li><a href="contato.php">contato</a></li>
            <div class="clear"> </div>
        </ul>
    </div>

    <div class="main-body">
    <?php if($banner){ ?>
        <div id="slider">
                <a href="#" target="_blank">
                    <img src="web/images/slider-1.jpg" alt="Pizza 1" />
                </a>
                <a href="#" target="_blank">
                    <img src="web/images/slider-2.jpg" alt="Pizza 2" />
                </a>
                <a href="#" target="_blank">
                    <img src="web/images/slider-3.jpg" alt="Pizza 3" />
                </a>
        </div>
    <?php } ?>






