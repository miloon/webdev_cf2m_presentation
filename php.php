<?php
define("DB_HOST","localhost");
define("DB_NAME","moncf2m_emily");
define("DB_LOGIN","emily");
define("DB_PASS","fm49c25sz84d3");
define("DB_CHARSET","utf8");

$mysqli = @mysqli_connect(DB_HOST,DB_LOGIN,DB_PASS,DB_NAME);

if(mysqli_connect_error($mysqli)){

    exit("Erreur : ".mysqli_connect_error($mysqli));
}

mysqli_set_charset($mysqli,DB_CHARSET);


if(empty($_POST)) {
    $sql = "SELECT * FROM cf2m_commentaire ORDER BY id;";

    $recup = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

    $nb = mysqli_num_rows($recup);

}else{
    $lenom = htmlspecialchars(strip_tags(trim($_POST['lenom'])),ENT_QUOTES);
    $lecom = htmlspecialchars(strip_tags(trim($_POST['lecom'])),ENT_QUOTES);
    $date = date("j / n / Y ");

    $sql = "INSERT INTO commentaire (lenom,lecom,ladate)
            VALUES ('$lenom','$lecom','$date')";
    mysqli_query($mysqli,$sql)or die(mysqli_error($mysqli));

    $article_insere = "Ton commentaire a été inséré, merci $lenom ! ";
}

?>
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

<section id="title" class="pumkin">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>PHP ? C'est quoi ce machin ?</h1>
                <p>Et bah on va voir ça tout de suite !</p>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">PHP</li>
                </ul>
            </div>
        </div>
    </div>
</section><!--/#title-->

<section id="portfolio" class="container">
    <article>
        <p>
            Dans cette partie nous allons vous présenter comment PHP et MySql peuvent interagir ensemble.
            La première chose à faire est de créer la base de données, c’est elle qui va stocker les données qu’on lui
            renverra.
            Pour créer une base de données il y a plusieurs méthodes, ici on va vous montrer comment le faire avec MySql
            WorkBench.</p>
        </article>

        <img class="img-responsive" src="images/image1.PNG"/>
    <article>
        <p>Commençons par créer un nouveau modèle, dans un premier temps il faut changer le nom de notre base de donnée
            qui est de base « mydb ». Ensuite, il faut cliquer sur « Add Diagram » qui se trouve juste au-dessus.
            Dans cette étape il faudra créer nos tables, pour cela il faut cliquer sur le 6ème bouton de la colonne de
            gauche.</p>
        </article>

        <img class="img-responsive" src="images/image2.PNG"/>
    <article>
        <p> Quand notre table est créée il faut lui insérer des colonnes et tout cela se passe dans le menu qui se
            trouve en bas. Il suffit de cliquer juste en dessous du menu. Un double clique et une colonne est créée.
            Maintenant il faut la renommée et lui donner des attributs précis qui détermineront sa spécification.
            Souvent, on crée une colonne nommée ID qui aura, dans la plupart des cas, les attributs : Primary key, Not
            Null, Unique et Auto Increment.</p>
        </article>

        <img class="img-responsive" src="images/image3.PNG"/>
    <article>
        <p> Ensuite, il suffit de créer les colonnes qui correspondent à notre besoin. Dans notre cas, il en a
            trois.</p>
        <ul>
            <li>lenom, qui correspond au nom de la personne qui laisse un commentaire</li>
            <li>lecom, qui correspond au commentaire de la personne</li>
            <li>ladate, qui correspond à la date à laquelle la personne à laisser le commentaire</li>
            <p>Ces 3 colonnes, il faut encore les spécifiés, en disant ce qu’elles vont contenir. Par exemple du
                texte, des chiffres, des caractères spéciaux, etc…
            </p>
        </ul>
        <p>Quand tout est prêt il faut aller dans « Database » et puis cliquer sur « Forward ingenier » .</p>
        <p> Passons maintenant au php, dedans on pourra : Afficher, modifier, supprimer et bien plus encore. Pour ce
            faire il faudra dans un premier temps se connecter à notre base de données. Pour ce faire il faudra
            travailler avec une fonction appelée @mysqli_connect dans laquelle on a, au préalable, défini des constantes
            correspondante aux données de notre base de données et on revoit tout ça dans une variable, mais on va trop
            loin là.</p>
        </article>
        <img class="img-responsive" src="images/image4.PNG"/>
    <article>

        <p> Quand cela est fait, il est temps de travailler avec notre variable qui contient toute notre base de
            données. Notre variable contient donc notre table « Commentaire » avec nos colonnes «lenom, lecom et ladate
            ». Dans notre code PHP il suffira de lui dire d’afficher les éléments de notre variable.</p>
        <p> Et c’est avec l’aide d’une boucle qu’on pourra afficher les données comme ci-dessous.
        </p>

    </article>
    </br>
    <?php
    if(empty($_POST)){


        if($nb === 0){
            echo "Pas encore de commentaire.";

        }else{
            while ($tab0 = mysqli_fetch_assoc($recup)){

                echo "<h3>" . $tab0['lenom'] . "</br>" . "</h3>";
                echo "<div id=date>" . "Le " . $tab0['ladate'] . "</div>" . "</br>";
                echo "<div id=com>" . "<p>" . $tab0['lecom'] . "</p>" . "</div>" . "</br>";
                echo "<hr/>";
            }
        }
        ?>
        <div id="adcomment">
            <h2>
                Ajoutez un commentaire
            </h2>
            <form action="" name="commentaire" method="POST">
                <input type="text" name="lenom" placeholder="Votre nom" id="" required/><br/></br>
                <textarea name="lecom" placeholder="Votre commentaire" cols="40" rows="6" required></textarea><br/>

                <input type="submit" value="Envoyer"/><br/>

            </form>

        </div>
        <?php
    }else{
        header("Location: ./");
    }
    ?>

    </div>

</section>


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
