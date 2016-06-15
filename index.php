<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Accueil | WebDev@CF2m</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
<?php
    include 'header.php';
?>
    <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="boxed animation animated-item-1">Web Developer - une force de la nature</h2>
                                    <p class="boxed animation animated-item-2">Découvrez dans cette formation la puissance du code et la magie du langage.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="boxed animation animated-item-1">Web Developer - toujours au courant de ce qui se fait le mieux</h2>
                                    <p class="boxed animation animated-item-2">Comme le dit la chanson "The Internet is made of Cats"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Web Developer - à l'écoute du monde</h2>
                                    <p class="animation animated-item-2">Pour mieux le représenter...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="services" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <!--<i class="icon-twitter icon-md"></i>-->
                            <img src="images/boot.png" alt="Logo boot" id="boot"/></p>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Bootstrap</h3>
                            <p>Bootstrap est une collection d'outils utile à la création de sites et d'applications web. C'est un ensemble qui contient des codes HTML et CSS, des formulaires, boutons, outils de navigation et autres éléments interactifs, ainsi que des extensions JavaScript en option.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <!--<i class="icon-facebook icon-md"></i>-->
                            <img src="images/js.png" alt="Logo js" id="js"/></p>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">JavaScript</h3>
                            <p>JavaScript est un langage de programmation de scripts principalement employé dans les pages web interactives mais aussi pour les serveurs3. C’est un langage orienté objet à prototype, c’est-à-dire que les bases du langage et ses principales interfaces sont fournies par des objets qui ne sont pas des instances de classes, mais qui sont chacun équipés de constructeurs permettant de créer leurs propriétés, et notamment une propriété de prototypage qui permet d’en créer des objets héritiers personnalisés. En outre, les fonctions sont des objets de première classe.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <!--<i class="icon-google-plus icon-md"></i>-->
                            <img src="images/php.png" alt="Logo php" id="php"/>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">PHP</h3>
                            <p>PHP: Hypertext Preprocessor, plus connu sous son sigle PHP (acronyme récursif), est un langage de programmation libre, principalement utilisé pour produire des pages Web dynamiques via un serveur HTTP, mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div>
        </div>
    </section><!--/#services-->

    <section id="recent-works">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Nos portfolios</h3>
                    <p>Vous voulez voir un aperçu de ce que nous sommes capables de faire ?</p>
                    <div class="btn-group">
                        <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
                        <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
                    </div>
                    <p class="gap"></p>
                </div>
                <div class="col-md-9">
                    <div id="scroller" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/portfolio/recent/item5.jpg" alt="">
                                                <h5>
                                                    Fede
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Portfolio de Fede" href="http://federico.moncf2m.be/"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/portfolio/recent/item6.jpg" alt="">
                                                <h5>
                                                    Guillaume
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Portfolio de Guillaume" href="http://guillaume.moncf2m.be/"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/portfolio/recent/item8.jpg" alt="">
                                                <h5>
                                                    Emily
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Portfolio d'Emily" href="http://emily.moncf2m.be/"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.row-->
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/portfolio/recent/item2.jpg" alt="">
                                                <h5>
                                                    Florian
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Portfolio de Florian" href="http://florian.moncf2m.be/"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/portfolio/recent/item7.jpg" alt="">
                                                <h5>
                                                    Vincent
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Portfolio de Vincent" href="http://vincent.moncf2m.be/"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/portfolio/recent/item4.jpg" alt="">
                                                <h5>
                                                    Samih
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Portfolio de Samih" href="http://samih.moncf2m.be/a/"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/portfolio/recent/item1.jpg" alt="">
                                                <h5>
                                                    Sylvie
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Portfolio de Sylvie" href="http://sylvie.moncf2m.be/Mission_to_Mars/"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="images/portfolio/recent/item3.jpg" alt="">
                                                <h5>
                                                    Hayat
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Portfolio d'Hayat" href="http://hayat.moncf2m.be/"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.item-->
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
    </section><!--/#recent-works-->

<section id="testimonial" class="alizarin">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="center">
                    <h2>What the WebDev say</h2>
                    <p>Quelques expressions courtantes entendues en classe.</p>
                </div>
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-6">
                        <blockquote>
                            <p>Et bien alors Jean-Michel ???</p>
                            <small>Miloon <!--<cite title="Source Title">Source Title</cite>--></small>
                        </blockquote>
                        <blockquote>
                            <p>...</p>
                            <small>Samih <!-- <cite title="Source Title">Source Title</cite>--></small>
                        </blockquote>
                    </div>
                    <div class="col-md-6">
                        <blockquote>
                            <p>La cuchara está rota.</p>
                            <small>Fede <!--<cite title="Source Title">Source Title</cite>--></small>
                        </blockquote>
                        <blockquote>
                            <p>Pierre, tu peux venir s'il te plaît...</p>
                            <small>Vince The Prince <!-- <cite title="Source Title">Source Title</cite>--></small>
                        </blockquote>
                    </div>
                    <div class="col-md-6">
                        <blockquote>
                            <p>Está muy bien aquí de la mañana.</p>
                            <small>Florette <!--<cite title="Source Title">Source Title</cite>--></small>
                        </blockquote>
                        <blockquote>
                            <p>Il fait trop chaud, vivement l'hiver !</p>
                            <small>MikyMike <!-- <cite title="Source Title">Source Title</cite>--></small>
                        </blockquote>
                    </div>
                    <div class="col-md-6">
                        <blockquote>
                            <p>J'peux pas travailler s'il n'y a pas de chocolat.</p>
                            <small>Hayat <!--<cite title="Source Title">Source Title</cite>--></small>
                        </blockquote>
                        <blockquote>
                            <p>Eeeeeeeeeeeeeeuuuuuuuuuuuuuuuuh</p>
                            <small>GuiGui <!-- <cite title="Source Title">Source Title</cite>--></small>
                        </blockquote>
                    </div>
                    <div class="col-md-6">
                        <blockquote>
                            <p>...fatalement...</p>
                            <small>Panda <!--<cite title="Source Title">Source Title</cite>--></small>
                        </blockquote>

                    </div>
                </div>
            </div>
        </div>
</section><!--/#testimonial-->

<?php
include 'footer.php';
?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>