
<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="utf-8">
   <title><?PHP echo $_SESSION['nome_fantasia']; ?></title>
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="Allan Santos">

   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS  -->
   <link rel="stylesheet" type="text/css" href="web/stylesheets/bootstrap.css" >
   <link rel="stylesheet" type="text/css" href="web/stylesheets/style.php">

   <!-- Fonts -->
   <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="web/stylesheets/font-awesome-4.6.3/css/font-awesome.min.css">

</head>

<body> 
    <div id="top-slider" class="parallax-bg1 parallax">
        <div class="overlay"></div>

        <header id="header" class="header header-sticky">
            <div class="header-wrap">
                <div class="container">
                    <div class="row">
                        <div class="span2">
                            <div id="logo" class="logo">
                                <a href="<?PHP echo $host; ?>">
                                    <img class="logo-img" src="<?PHP echo $_SESSION['logo']; ?>" alt="Pizzaria" />
                                </a>
                            </div>
                        </div>
                        <div class="span10">
                            <div class="btn-menu"></div><!-- Mobile menu button -->
                            <nav id="mainnav" class="mainnav">
                                <ul class="menu">
                                    <li><a class="active" href="#top">Início</a></li>
                                    <li><a href="<?PHP echo $host; ?>/pedidos">Pedidos</a></li>
                                    <li><a href="<?PHP echo $host; ?>/categoria/<?PHP echo $_SESSION['placeholder']; ?>">Cardapio</a></li>
                                    <li><a href="<?PHP echo $host; ?>/quem-somos">Sobre</a></li>
                                    <li><a href="<?PHP echo $host; ?>/contato">Contato</a></li>
                                    <li><a href="<?PHP echo $host; ?>/cadastro">Cadastro</a></li>
                                    <li><a href="<?PHP echo $host; ?>/login">Login</a></li>

                                    <!--- <li class="img-user-logado"><a href="#"><img src="web/images/user.jpg" class="img-user"></a></li>
                                    <li class="img-name-logado"><a href="#">Allan Santos</a></li> ---->

                                 </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="control-slider">
            <div class="flexslider">
                <ul class="slides">
                    <?PHP foreach($_SESSION['banner_info'] as $bannerInfo){ ?>
                    <li>
                        <div class="content-slider">
                            <h2 class="FromLeft captionDelay2"><?PHP echo $bannerInfo['cliente_banners']['titulo']; ?>
                                <b><?PHP echo $bannerInfo['cliente_banners']['palavra_negrito']; ?>
                                    <span class="color">
                                        <?PHP echo $bannerInfo['cliente_banners']['palavra_vermelho']; ?>
                                     </span>
                                 </b>
                            </h2>
                            <div class="divider FromLeft captionDelay5"></div>
                            <p class="FromLeft captionDelay8">
                                <?PHP echo $bannerInfo['cliente_banners']['subtitulo']; ?>
                            </p>
                            <a href="<?PHP echo $bannerInfo['cliente_banners']['link_botao']; ?>" class="read-more FromLeft captionDelay11">
                                <?PHP echo $bannerInfo['cliente_banners']['botao']; ?>
                            </a>
                        </div>
                    </li>
                    <?PHP } ?>                    
                </ul>
            </div>
        </div>

        <div class="contact-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-slider-inner">
                            <div class="col-md-4 border-right-color">
                            <span> 
                                <i class="fa fa-paper-plane icon-banner-color"></i> 
                                Pedidos online: <?PHP if($StatusSite['dados']['Cliente']['open'] == 'S'){ echo "Disponível";}else{ echo "F";} ?>
                            </span>
                            </div>
                            <div class="col-md-4 border-right-color">
                            <span><i class="fa fa-clock-o icon-banner-color"></i></i>Entrega rápida, fácil e segura :) </span>
                            </div>
                            <div class="col-md-4">
                            <span><i class="fa fa-map-marker icon-banner-color"></i></i><?PHP echo $_SESSION['endereco']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



   