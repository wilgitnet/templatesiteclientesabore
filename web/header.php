
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
   <link rel="stylesheet" type="text/css" href="<?PHP echo $host; ?>/web/stylesheets/bootstrap.css" >
   <link rel="stylesheet" type="text/css" href="<?PHP echo $host; ?>/web/stylesheets/<?PHP echo $_SESSION['style']; ?>.php">

   <!-- Fonts -->
   <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="<?PHP echo $host; ?>/web/stylesheets/font-awesome-4.6.3/css/font-awesome.min.css">

   <!-- Javascript -->
    <script type="text/javascript" src="<?PHP echo $host; ?>/web/javascript/jquery.min.js"></script>
    <script src="<?PHP echo $host; ?>/js/validate.js"></script>
    <script src="<?PHP echo $host; ?>/js/mask.js"></script>
    <script type="text/javascript" src="<?PHP echo $host; ?>/web/javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?PHP echo $host; ?>/web/javascript/parallax.js"></script>
    <script type="text/javascript" src="<?PHP echo $host; ?>/web/javascript/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="<?PHP echo $host; ?>/web/javascript/jquery-waypoints.js"></script>
    <script type="text/javascript" src="<?PHP echo $host; ?>/web/javascript/jquery.bxslider.js"></script>
    <script type="text/javascript" src="<?PHP echo $host; ?>/web/javascript/main.js"></script>

</head>

<body> 
    <?PHP if($banner){ ?>
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
                                    <li><a class="active" href="<?PHP echo $host; ?>">Início</a></li>
                                    <li><a href="<?PHP echo $host; ?>/carrinho">Carrinho</a></li>
                                    <li><a href="<?PHP echo $host; ?>/categoria/<?PHP echo $_SESSION['placeholder']; ?>">Cardápio</a></li>
                                    <li><a href="<?PHP echo $host; ?>/quem-somos">Sobre</a></li>
                                    <li><a href="<?PHP echo $host; ?>/contato">Contato</a></li>
                                     <?PHP if(!empty($_SESSION['Usuario'])){ ?>
                                         <li>
                                            <a href="<?PHP echo $host; ?>/historico">                                            
                                                Meus pedidos
                                            </a>
                                        </li>
                                        <li class="img-user-logado">
                                            <a href="<?PHP echo $host; ?>/meus-dados">
                                                Olá <?PHP echo $_SESSION['Usuario']['nome']; ?>,
                                            </a>
                                        </li>
                                        
                                       
                                        <li><a href="<?PHP echo $host; ?>/login/sair">Sair</a></li>
                                    <?PHP } else { ?>
                                        <li><a href="<?PHP echo $host; ?>/registro">Cadastro</a></li>
                                        <li><a href="<?PHP echo $host; ?>/login">Login</a></li>                                
                                    <?PHP } ?>                                      
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
<?PHP }else{ ?>

 <!-- HEADER SEM BANNER -->
    <div id="top-slider" class="header-img parallax">
        <div class="overlay others-pages"></div>
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
                                    <li><a class="active" href="<?PHP echo $host; ?>">Início</a></li>
                                    <li><a href="<?PHP echo $host; ?>/carrinho">Carrinho</a></li>
                                    <li><a href="<?PHP echo $host; ?>/categoria/<?PHP echo $_SESSION['placeholder']; ?>">Cardápio</a></li>
                                    <li><a href="<?PHP echo $host; ?>/quem-somos">Sobre</a></li>
                                    <li><a href="<?PHP echo $host; ?>/contato">Contato</a></li>
                                    <?PHP if(!empty($_SESSION['Usuario'])){ ?>
                                         <li>
                                            <a href="<?PHP echo $host; ?>/historico">                                            
                                                Meus pedidos
                                            </a>
                                        </li>
                                        <li class="img-user-logado">
                                            <a href="<?PHP echo $host; ?>/meus-dados">
                                                Olá <?PHP echo $_SESSION['Usuario']['nome']; ?>,
                                            </a>
                                        </li>
                                        
                                       
                                        <li><a href="<?PHP echo $host; ?>/login/sair">Sair</a></li>
                                    <?PHP } else { ?>
                                        <li><a href="<?PHP echo $host; ?>/registro">Cadastro</a></li>
                                        <li><a href="<?PHP echo $host; ?>/login">Login</a></li>                                
                                    <?PHP } ?>                                                                     
                                 </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- HEADER SEM BANNER -->

<?PHP } ?>



   