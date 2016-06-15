<?php
if(isset($_GET['mot'])){
  $fichier = "listemot.txt";
  $fichier_ouverture = fopen($fichier, "a");
  $contenu = $_GET['mot'];
  $contenu = ",\"$contenu\"";
  fwrite($fichier_ouverture, $contenu);
}
?>