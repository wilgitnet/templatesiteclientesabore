
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="smartphone/css/slider-styles.css" type="text/css" media="all" />
<link rel="stylesheet" href="smartphone/css/style.php" type="text/css" media="all" />
<link rel="stylesheet" href="http://localhost/templatesiteclientesabore/css/style.css" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="smartphone/js/slider.js"></script>
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Food-Point Iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script src="http://localhost/templatesiteclientesabore/js/validate.js"></script>
<script src="http://localhost/templatesiteclientesabore/js/mask.js"></script>
</head>
<body>
<div class="wrap">
	<div class="top-head">
		<div class="top-nav">
	        <ul>
            <?PHP if(!empty($_SESSION['Usuario'])){ ?>                
                <li class="active"><a href="index.html">Bem Vindo <?PHP echo $_SESSION['Usuario']['nome']; ?>,</a></li>
                <li><a href="carrinho.php">Pedidos</a></li>
                <li><a href="login.php?sair=true">Sair</a></li> 
            <?PHP }else{ ?>
                <li><a href="login.php">Login  </a></li>
                <li><a href="registro.php">Registro </a></li>
                <li><a href="contato.php">Contato </a></li>                            
              <?PHP } ?>
            </ul>
	    </div>
	    <div class="clear"> </div>
     <div class="clear"> </div>
    </div>
	<div class="header">
	<div class="logo"><a href="index.php"><img src="web/images/logo.png"  alt="Favorita"/></a></div>
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
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="carrinho.php">Pedidos</a></li>
            <?php 
                if($_SESSION['menu_principal'])
                {
                    echo "<li><a href=\"cardapio.php\">{$_SESSION['menu_principal']}</a></li>";
                }
            ?>  
            <li><a href="contato.php">contato</a></li>
            <div class="clear"> </div>
        </ul>
    </div>

    <div class="main-body">
            <?php if($banner && !empty($_SESSION['smart_banner1'])){ ?>
        <div id="slider">
                <?php 
                    if(!empty($_SESSION['smart_banner1']))
                    {                    
                 ?>
                    <a href="javascript:void(0);">
                        <img src="<?PHP echo $_SESSION['smart_banner1']; ?>" alt="Pizza 1"/>
                    </a>
                <?php } ?>                
        </div>
        <?php } ?>