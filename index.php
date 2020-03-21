<?php
require_once('config/conn.php');

$stmt1 = $pdo->query('SELECT * FROM fotos where categoria = 1 and principal = 1');
$stmt2 = $pdo->query('SELECT * FROM fotos where categoria = 2 and principal = 1');
$stmt3 = $pdo->query('SELECT * FROM fotos where categoria = 3 and principal = 1');
$stmt4 = $pdo->query('SELECT * FROM fotos where categoria = 4 and principal = 1');
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

    <!-- <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" type="image/x-icon" /> -->
    <link rel="apple-touch-icon" href="assets/images/favicon/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon-180x180.png" />

    <title>Corretor Devair Ferreira</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900|Dancing+Script:400,700|Raleway:400,100,300,700,900|Reenie+Beanie&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/pe-icons/css/pe-icon-7-stroke.css" rel="stylesheet">

    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/plugins.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

</head>

<body class="top-navigation pushy-right-side">

    <nav class="pushy pushy-right">
        <ul class="list-unstyled">
            <li><a class="logo" href="#"><img alt="" class="logo img-responsive" src="assets/images/logo.png"></a></li>
            <li class="pushy-submenu">
                <a class="submenu-link" href="index.php">Início <i class="fa fa-angle-down"></i></a>
            </li>
            <!-- <li class="pushy-submenu">
                <a class="submenu-link" href="#">Works <i class="fa fa-angle-down"></i></a>
                <ul>

                    <li><a href="portfolio-grid.html">Portfolio Grid</a></li>
                    <li><a href="portfolio-grid-fullwidth.html">Portfolio Grid Fullwidth</a></li>
                    <li><a href="single-portfolio.html">Single Portfolio</a></li>
                    <li><a href="single-portfolio-video.html">Single Portfolio Video</a></li>
                </ul>
            </li> -->
            <!-- <li class="pushy-submenu">
                <a class="submenu-link" href="#">News <i class="fa fa-angle-down"></i></a>
                <ul>
                    <li><a href="news-list.html">News List</a></li>
                    <li><a href="news-grid.html">News Grid</a></li>
                    <li><a href="news-tiles.html">News Tiles</a></li>
                    <li><a href="single-post.html">Single Post</a></li>
                    <li><a href="single-post-no-sidebar.html">Single Post No Sidebar</a></li>
                </ul>
            </li> -->
            <!-- <li class="pushy-submenu">
                <a class="submenu-link" href="#">Pages <i class="fa fa-angle-down"></i></a>
                <ul>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                    <li><a href="404.html">404</a></li>
                </ul>
            </li> -->
        </ul>
    </nav>





    <!-- Site Overlay -->
    <div class="site-overlay"></div>

    <div id="master-wrapper">

        <!-- <div class="preloader">
            <div class="preloader-img">
                <span class="loading-animation animate-flicker"><img src="assets/images/loading.gif" alt="loading" /></span>
            </div>
        </div> -->

        <div id="top-bar" class="hidden-xs">
            <div class="container">
                <div class="col-sm-4">
                    <ul class="header-social list-inline">
                        <li><a class="facebook" href="https://www.facebook.com/devair.ferreira.718?fref=search&__tn__=%2Cd%2CP-R&eid=ARCu4YtcmpwqjUWHRdREXVafY_H4bqcpv-r3PDIcnR7OrkXN1tFDdO9XgItMF3UUKi23x8NGlUyp7j8V"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="navbar nav-wrapper smoothie">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center mb30">
                        <a class="logo" href="index.php"><img alt="" class="logo img-responsive" src="assets/images/logo-light.png"></a>
                    </div>
                    <div class="col-sm-12 text-center">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-center">
                                <li>
                                    <a href="index.php" role="button" aria-expanded="false">Início</a>
                                </li>
                                <li>
                                    <a href="#" role="button" aria-haspopup="true" aria-expanded="false">Contato</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="our-courses" class="white-wrapper">
            <div class="section-inner">
                <div class="container">
                    <div class="row mb60 text-center">
                        <div class="col-sm-12">
                            <h3 class="section-title">Os Imóveis</h3>
                            <p class="section-sub-title">Fique à vontade para visualizar os imóveis.</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="masonry-portfolio row">
                                        <ul class="masonry-portfolio-filter mb40 list-inline wow fadeIn text-center" data-wow-delay="0.2s">
                                            <li><a class="btn btn-primary btn-transparent active" href="#" data-filter="*">Todos</a></li>
                                            <li><a class="btn btn-primary btn-transparent" href="#" data-filter=".apt">Apartamentos</a></li>
                                            <li><a class="btn btn-primary btn-transparent" href="#" data-filter=".sitio">Sítios</a></li>
                                            <li><a class="btn btn-primary btn-transparent" href="#" data-filter=".casa">Casas</a></li>
                                            <li><a class="btn btn-primary btn-transparent" href="#" data-filter=".galpao">Galpões</a></li>
                                        </ul>

                                        <div class="col-sm-12">
                                            <div class="masonry-portfolio-items">
                                                <div class="row">
                                                    <!-- primeira seção -->
                                                    <div class="col-sm-4 masonry-portfolio-item mb30 apt">
                                                        <div class="container">
                                                            <?php while ($foto = $stmt1->fetchObject()) : ?>
                                                                <div class="row">
                                                                    <div class="col-sm-6 col-md-4">
                                                                        <div class="thumbnail">

                                                                            <img src="imagem.php?id=<?php echo $foto->id ?>" />

                                                                            <div class="caption">
                                                                                <strong>Descrição:</strong> <?php echo $foto->Descricao ?> <br />
                                                                                <strong>Tipo:</strong> <?php echo $foto->TipoAnuncio ?> <br />
                                                                                <!-- <strong>Tamanho:</strong> <?php echo $foto->tamanho ?> bytes <br /> -->
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            <?php endwhile ?>
                                                        </div>
                                                    </div>
                                                    <!-- SEGUNDA SEÇÃO -->
                                                    <div class="col-sm-4 masonry-portfolio-item mb30 sitio">
                                                        <div class="container">
                                                            <?php while ($foto = $stmt2->fetchObject()) : ?>
                                                                <div class="row">
                                                                    <div class="col-sm-6 col-md-4">

                                                                        <div class="thumbnail">

                                                                            <img src="imagem.php?id=<?php echo $foto->id ?>" />

                                                                            <div class="caption">
                                                                                <strong>Descrição:</strong> <?php echo $foto->Descricao ?> <br />
                                                                                <strong>Tipo:</strong> <?php echo $foto->TipoAnuncio ?> <br />
                                                                            </div>

                                                                        </div>

                                                                    </div>



                                                                </div>
                                                            <?php endwhile ?>
                                                        </div>
                                                    </div>
                                                    <!-- TERCEIRA SEÇÃO -->

                                                    <div class="col-sm-4 masonry-portfolio-item mb30 casa">
                                                        <div class="container">
                                                            <?php while ($foto = $stmt3->fetchObject()) : ?>
                                                                <div class="row">
                                                                    <div class="col-sm-6 col-md-4">

                                                                        <div class="thumbnail">

                                                                            <img src="imagem.php?id=<?php echo $foto->id ?>" />

                                                                            <div class="caption">
                                                                                <strong>Descrição:</strong> <?php echo $foto->Descricao ?> <br />
                                                                                <strong>Tipo:</strong> <?php echo $foto->TipoAnuncio ?> <br />
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            <?php endwhile ?>
                                                        </div>
                                                    </div>
                                                    <!-- QUARTA SEÇÃO -->
                                                    <div class="col-sm-4 masonry-portfolio-item mb30 galpao">
                                                        <div class="container">
                                                            <?php while ($foto = $stmt4->fetchObject()) : ?>
                                                                <div class="row">



                                                                    <div class="col-sm-6 col-md-4">

                                                                        <div class="thumbnail">

                                                                            <img src="imagem.php?id=<?php echo $foto->id ?>" />

                                                                            <div class="caption">
                                                                                <strong>Descrição:</strong> <?php echo $foto->Descricao ?> <br />
                                                                                <strong>Tipo:</strong> <?php echo $foto->TipoAnuncio ?> <br />
                                                                            </div>

                                                                        </div>

                                                                    </div>



                                                                </div>
                                                            <?php endwhile ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <footer id="footer-wrapper" class="dark-wrapper">
            <div class="container">
                <div class="row mb90">
                    <div class="col-md-3 col-xs-6">
                        <div class="text-widget widget">
                            <div class="widget-content">
                                <img alt="" class="img-responsive" src="assets/images/logo-light.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row sub-footer">
                    <div class="col-md-6 footer-social">
                        <!-- <a class="facebook" href="https://www.facebook.com/devair.ferreira.718?fref=search&__tn__=%2Cd%2CP-R&eid=ARCu4YtcmpwqjUWHRdREXVafY_H4bqcpv-r3PDIcnR7OrkXN1tFDdO9XgItMF3UUKi23x8NGlUyp7j8V"><i class="fa fa-facebook"></i></a> -->
                    </div>
                    <div class="col-md-6 text-right">
                        <p class="copyright"><small>© 2020. Desenvolvido por <a target="_blank" href="https://www.facebook.com/profile.php?id=100005059029377">Lucas
                                    Ferreira</a></small></p>
                    </div>
                </div>
            </div>
        </footer>

        <a href="#" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/init.js"></script>

</body>

</html>