
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?PHP echo $host; ?>/smartphone/css/slider-styles.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?PHP echo $host; ?>/smartphone/css/style.php" type="text/css" media="all" />
<link rel="stylesheet" href="<?PHP echo $host; ?>/css/style.css" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?PHP echo $host; ?>/smartphone/js/slider.js"></script>
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Food-Point Iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script src="<?PHP echo $host; ?>/js/validate.js"></script>
<script src="<?PHP echo $host; ?>/js/mask.js"></script>
</head>
<body>
<div class="wrap">
	<div class="top-head">
		<div class="top-nav">
	        <ul>
            <?PHP if(!empty($_SESSION['Usuario'])){ ?>                
                <li class="active"><a href="<?PHP echo $host; ?>/home">Bem Vindo <?PHP echo $_SESSION['Usuario']['nome']; ?>,</a></li>
                <li><a href="<?PHP echo $host; ?>/carrinho">Pedidos</a></li>
                <li><a href="<?PHP echo $host; ?>/login/sair">Sair</a></li> 
            <?PHP }else{ ?>
                <li><a href="<?PHP echo $host; ?>/login">Login  </a></li>
                <li><a href="<?PHP echo $host; ?>/registro">Registro </a></li>
                <li><a href="<?PHP echo $host; ?>/contato">Contato </a></li>                            
              <?PHP } ?>
            </ul>
	    </div>
	    <div class="clear"> </div>
     <div class="clear"> </div>
    </div>
	<div class="header">
	<div class="logo"><a href="<?PHP echo $host; ?>/home"><img src="<?php echo $_SESSION['logo']; ?>"  alt="Favorita"/></a></div>
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
            <li class="active"><a href="<?PHP echo $host; ?>/home">Home</a></li>
            <li><a href="<?PHP echo $host; ?>/carrinho">Pedidos</a></li>
             <?php if($_SESSION['menu_principal']) {?>                
                <li>
                    <a href="<?PHP echo $host; ?>/categoria/<?PHP echo $_SESSION['placeholder'] ?>">
                        <?PHP echo $_SESSION['menu_principal']; ?>
                    </a>
                </li>                
            <?PHP } ?> 
            <li><a href="<?PHP echo $host; ?>/contato">contato</a></li>
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