<?php
define("DB_HOST","localhost");
define("DB_NAME","site 18.05");
define("DB_LOGIN","root");
define("DB_PASS","");
define("DB_CHARSET","utf8");

$mysqli = @mysqli_connect(DB_HOST,DB_LOGIN,DB_PASS,DB_NAME);

if(mysqli_connect_error($mysqli)){

    exit("Erreur : ".mysqli_connect_error($mysqli));
}

mysqli_set_charset($mysqli,DB_CHARSET);


if(empty($_POST)) {
    $sql = "SELECT * FROM commentaire ORDER BY id;";

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
    <meta charset="UTF-8">
    <title>Bienvenue</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>



    </br>
    <?php
    if(empty($_POST)){


if($nb === 0){
 echo "Pas encore de commentaire."."<img src='http://i.imgur.com/GTD9UYC.png' width='50px' />";

}else{
    while ($tab0 = mysqli_fetch_assoc($recup)){

        echo "<h3>" . $tab0['lenom'] . "</br>" . "</h3>";
        echo "<div id=date>" . "Le " . $tab0['ladate'] . "</div>" . "</br>";
        echo "<div id=com>" . "<p>" . $tab0['lecom'] . "</p>" . "</div>" . "</br>";
        if (isset($connect)) {
            echo "<a href=?del=" . $tab0['id'] . "><img src='./img/delete.png' alt='supprimer' /></a>";
        }
        echo "<hr/>";
    }
}
if(isset($_GET['del'])){
    $idsup = $_GET['del'];
}
if(isset($idsup)){
$delete = "DELETE FROM commentaire WHERE id=$idsup ;";
mysqli_query($mysqli, $delete) or die(mysqli_error($mysqli));
    header ("Location: ./");
}
?>
<div id="adcomment">
    <h2>
        Ajoutez un commentaire
    </h2>
    <form action="" name="commentaire" method="POST">
        <input type="text" name="lenom" placeholder="Votre nom" id="" required/><br/></br>
        <textarea name="lecom" placeholder="Votre commentaire" cols="40" rows="6" required></textarea><br/>

        <input type="submit" value="Insérer"/><br/>

    </form>

</div>
        <?php
    }else{
        echo "<h3>".$article_insere."</h3>";
        ?>
        <a href="?accueil">Retour à l'accueil</a>

        <?php
    }
    ?>

</div>
</body>
</html>