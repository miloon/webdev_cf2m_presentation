<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PHP | WebDev@CF2m</title>
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
    include "header.php";
?>

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Portfolio</h1>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title--> 

    <section id="portfolio" class="container">
        <ul class="portfolio-filter">
            <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Bootstrap</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".html">HTML</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".wordpress">Wordpress</a></li>
        </ul><!--/#portfolio-filter-->

        <ul class="portfolio-items col-3">
            <li class="portfolio-item apps">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/item1.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>             
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item joomla bootstrap">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/item2.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/item2.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>              
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item bootstrap wordpress">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/item3.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/item3.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>        
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item joomla wordpress apps">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/item4.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/item4.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>          
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
            <li class="portfolio-item joomla html">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/item5.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/item5.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>          
                    </div>    
                </div>       
            </li><!--/.portfolio-item-->
            <li class="portfolio-item wordpress html">
                <div class="item-inner">
                    <img src="images/portfolio/thumb/item6.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <div class="overlay">
                        <a class="preview btn btn-danger" href="images/portfolio/full/item6.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>           
                    </div>           
                </div>           
            </li><!--/.portfolio-item-->
        </ul>
    </section><!--/#portfolio-->


<?php
include 'footer.php';
?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
