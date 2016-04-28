
<!DOCTYPE HTML>
<html>
<head>
<title>La Favoritta</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="mobile/css/style.php" type="text/css" media="all" />
<link rel="stylesheet" href="http://localhost/templatesiteclientesabore/css/style.css" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="http://localhost/templatesiteclientesabore/js/jquery.js"></script>
<script src="http://localhost/templatesiteclientesabore/js/validate.js"></script>
<script src="http://localhost/templatesiteclientesabore/js/mask.js"></script>

</head>
<body>
<div class="wrap">
	<div class="top-head">
		<div class="top-nav">
	        <ul>
	            <li><a href="login.php">Login</a></li>
	            <li><a href="registro.php">Registro</a></li>
	            <li><a href="contato.php">Contato</a></li>
	        </ul>
	    </div>
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


