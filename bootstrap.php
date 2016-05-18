<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bootstrap | WebDev@CF2m</title>
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
    <section id="title" class="alizarin">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Bootstrap</h1>
                    <p>Collection d'outils utiles à la création de sites et d'applications web</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section id="about-us" class="container">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <h2>Qu'est-ce que c'est Bootstrap ?</h2>
                <p>Bootstrap est un framework qu'on peut utiliser pour le design du sites web. Ça c'est très utile pour obtenir un design plus moderne et élaboré. Il existe la possibilité de travailler avec Bootstrap en partant de zéro, mais si tu n'as que des connaissances basiques de Bootstrap, ta meilleure option c'est de télécharger un modèle et après travailler sur ce modèle.</p>
				<p>Les langages de programmation qu'on doit connaître pour travailler avec ce framework sont CSS, HTML et  Javascript/JQuery. En ayant ces acquis, nous serons capables de manipuler et éditer le modèle qu'on a téléchargeé. Dans ce modèle-ci, on sera capable de changer les couleurs, la distribution des éléments, à la police...</p>
            </div><!--/.col-sm-6-->
            <div class="col-sm-offset-1 col-sm-5">
                <h2>Nos acquis</h2>
                <div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                            <span>HTML/CSS</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            <span>Bootstrap</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                            <span>Javascript</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                            <span>MySQL</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                            <span>PHP</span>
                        </div>
                    </div>
                </div>
            </div><!--/.col-sm-6-->
        </div><!--/.row-->

        <div class="gap"></div>
        <h1 class="center">Rencontrer les stagiaires </h1>
        <p class="lead center">Nous sommes le groupe du CF2M de web développement</p>
        <div class="gap"></div>

        <div id="meet-the-team" class="row">
            <div class="col-md-4 col-xs-6">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="images/blog/guillaume.png" alt="" ></p>
                    <h5>Guillaume</h5>
                    <p></p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>

            <div class="col-md-4 col-xs-6">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="images/blog/mikymike.png" alt="" ></p>
                    <h5>Mike</h5>
                    <p></p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>        
            <div class="col-md-4 col-xs-6">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="images/blog/florian.png" alt="" ></p>
                    <h5>Florian</h5>
                    <p></p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>        
            <div class="col-md-4 col-xs-6">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="images/blog/sylvie.png" alt="" ></p>
                    <h5>Sylvie</h5>
                    <p></p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>
			 <div class="col-md-4 col-xs-6">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="images/blog/emily.gif" alt="" ></p>
                    <h5>Emily</h5>
                    <p></p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>

            <div class="col-md-4 col-xs-6">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="images/blog/federico.jpg" alt="" ></p>
                    <h5>Fede</h5>
                    <p></p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>        
            <div class="col-md-4 col-xs-6">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="images/blog/hayat.png" alt="" ></p>
                    <h5>Hayat</small></h5>
                    <p></p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>        
            <div class="col-md-4 col-xs-6">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="images/blog/no.jpg" alt="" ></p>
                    <h5>Vincent</h5>
                    <p></p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>
			<div class="col-md-4 col-xs-6">
                <div class="center">
                    <p><img class="img-responsive img-thumbnail img-circle" src="images/blog/no.jpg" alt="" ></p>
                    <h5>Samih</h5>
                    <p></p>
                    <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
                </div>
            </div>
        </div><!--/#meet-the-team-->
    </section><!--/#about-us-->

<?php
include 'footer.php';
?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>