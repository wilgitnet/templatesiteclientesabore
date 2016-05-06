
<!DOCTYPE HTML>
<html>
<head>
<title>La Favoritta</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?PHP echo $host; ?>/mobile/css/style.php" type="text/css" media="all" />
<link rel="stylesheet" href="<?PHP echo $host; ?>/css/style.css" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="<?PHP echo $host; ?>/js/jquery.js"></script>
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
            <li><a href="<?PHP echo $host; ?>/contato">contato</a></li>
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
                        <img src="<?PHP echo $_SESSION['banner1']; ?>" alt="Mini Ninjas" />
                    </a>                
                <?PHP } ?>
            </div>
        <?php } ?>


