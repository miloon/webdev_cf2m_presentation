<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Javascript | WebDev@CF2m</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
	<script src="script.php"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	
	<style>
	#juego:hover{text-decoration:underline}
	</style>
</head><!--/head-->
<body>
<?php
    include "header.php";
?>

    <section id="title" class="nephritis">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Javascript</h1>
                    <p>Yeah ! C'est classy comme nom, mais ça sert à quoi ?</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Javascript</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->     

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="center gap">
                        <h1>Le pendu</h2>
                        <p>On a développé un petit jeu en javascript pour nous (et vous) amuser et pour démontrer notre acquis en javascript</p>
						<div id="pendu">
							<img id="penduimg" src="image/pendu1.png" /><br/>
							<div id="motatrouver" style="margin-left:40px;font-size:30px;"></div><br/><br/>
							<input type="text" id="motecrit" onkeydown = "if(event.keyCode === 13){verif();}"/><br/>
							<br/>
							<button type="button" class="btn btn-success" onclick="newgame();" style="cursor: pointer">Nouvelle partie (Mot Aléatoire)</button><br/><br/>
							<button type="button" class="btn btn-success" onclick="newgamemot();" style="cursor: pointer">Nouvelle partie (Mot écrit)</button><br/>
						</div>
                    </div>                
                </div>
            </div>
            
            <div class="gap"></div>
            
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <div class="center">
                        <h2>Opinions de nos collèges</h2>
                        
                    </div>
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <blockquote>
                                <p>C'est le mieux jeu de l'histoire.</p>
                                <small>Fede<cite title="Source Title"></cite></small>
                            </blockquote>
                        </div>
                        <div class="col-md-6">
                            <blockquote>
                                <p>Je peux pas arrêter de jouer, j'ai dormis que 5 heures en tout la semaine àa cause de Le pendu!</p>
                                <small>Sylvie <cite title="Source Title"></cite></small>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#services-->


<?php
include 'footer.php';
?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>