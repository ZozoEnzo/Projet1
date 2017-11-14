<?php
    if(!isset($_GET["action"])) //Si aucune action n'a été demander, alors on affiche la page d'acceuil des statistiques
        include("vue/statistique.inc.php");
    else
        switch($_GET["action"]) //suivant l'action à réaliser,
        {

        }
?>
