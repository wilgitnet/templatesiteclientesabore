
<!DOCTYPE HTML>
<html>
<head>
<title>La Favoritta</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?PHP echo $host; ?>/web/css/style.php" type="text/css" media="all" />
<link rel="stylesheet" href="<?PHP echo $host; ?>/web/css/slider-styles.css" type="text/css" media="all" /> 
<link rel="stylesheet" href="<?PHP echo $host; ?>/css/style.css" type="text/css" media="all" />
<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<link href="signin.css" rel="stylesheet">
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="<?PHP echo $host; ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?PHP echo $host; ?>/web/js/slider.js"></script>
<script src="<?PHP echo $host; ?>/js/validate.js"></script>
<script src="<?PHP echo $host; ?>/js/mask.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    
</head>
<body>
<div class="wrap">
	<div class="top-head">
		<div class="welcome"><img src="<?PHP echo $host; ?>/web/images/pequena.png"  alt="Pequena"/>Bem vindo a <span>Pizzaria Favoritta</span></div>
		<div class="top-nav">

        
	        <ul>
            <?PHP if(!empty($_SESSION['Usuario'])){ ?>                
                <li class="active"><a href="<?PHP echo $host; ?>/home">Bem Vindo <?PHP echo $_SESSION['Usuario']['nome']; ?>,</a></li>
                <li><a href="<?PHP echo $host; ?>/carrinho">Pedidos</a></li>
                <li><a href="<?PHP echo $host; ?>/login/sair">Sair</a></li> 
            <?PHP }else{ ?>
	            <li><a href="<?PHP echo $host; ?>/login">Login </a></li>
                <li><a href="<?PHP echo $host; ?>/registro">Registro </a></li>
                <li><a href="<?PHP echo $host; ?>/contato">Contato </a></li>                            
              <?PHP } ?>
	        </ul>
	    </div>

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
            <li><a href="<?PHP echo $host; ?>/quem-somos">Quem somos</a></li>           
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






