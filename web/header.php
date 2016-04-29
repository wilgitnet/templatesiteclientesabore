
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
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="http://localhost/templatesiteclientesabore/js/jquery.js"></script>
<script type="text/javascript" src="web/js/slider.js"></script>
<script src="http://localhost/templatesiteclientesabore/js/validate.js"></script>
<script src="http://localhost/templatesiteclientesabore/js/mask.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    
</head>
<body>
<div class="wrap">
	<div class="top-head">
		<div class="welcome"><img src="web/images/pequena.png"  alt="Pequena"/>Bem vindo a <span>Pizzaria Favoritta</span></div>
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
    </div>
	<div class="header">
	<div class="logo"><a href="index.php"><img src="<?php echo $_SESSION['logo']; ?>"  alt="Favorita"/></a></div>
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
    <?php if($banner){ ?>
        <div id="slider">
                <?php 
                    if(!empty($_SESSION['banner1']))
                    {                    
                 ?>
                    <a href="<?PHP echo $_SESSION['link1']; ?>" target="_blank">
                        <img src="<?PHP echo $_SESSION['banner1']; ?>" alt="Pizza 1" />
                    </a>
                <?php } ?>
                <?php 
                    if(!empty($_SESSION['banner2']))
                    {                    
                 ?>
                    <a href="<?PHP echo $_SESSION['link2']; ?>" target="_blank">
                        <img src="<?PHP echo $_SESSION['banner2']; ?>" alt="Pizza 1" />
                    </a>
                <?php } ?>
                <?php 
                    if(!empty($_SESSION['banner3']))
                    {                    
                 ?>
                    <a href="<?PHP echo $_SESSION['link3']; ?>" target="_blank">
                        <img src="<?PHP echo $_SESSION['banner3']; ?>" alt="Pizza 1" />
                    </a>
                <?php } ?>
        </div>
    <?php } ?>






