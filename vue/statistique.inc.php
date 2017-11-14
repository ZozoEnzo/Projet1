<?php
    if(!isset($_GET["page"]))
        $page="none";
    else
        $page=$_GET["page"];

    //---TITRE---
    switch($page) //suivant l'action à réaliser, on affiche un titre différant
    {
        case 'none':
            ?> <h1 class="centre"> Gestion des statistiques </h1> <?php
            break;
        case 'statRegion':
            ?> <h1 class="centre"> Statistiques par régions</h1> <?php
            break;
        case 'delegues':
            ?> <h1 class="centre"> Liste des délégués </h1> <?php
            break;
        case 'statSecteur':
            ?> <h1 class="centre">  Statistiques par secteur </h1> <?php
            break;
    }

    //---LIENS-MENU---
    ?> <div class="centre"> <?php
    switch($page) //suivant l'action à réaliser, on affiche pas tous les liens
    {
        case 'none': //si l'utilisateur n'a pas encore choisi d'action particulière, on affiche tout
            ?>

                <a href="index.php?controleur=statistiques&action=statRegion" >Afficher les statistiques par région</a>
                &mdash;
                &mdash;
                <a href="index.php?controleur=statistiques&action=delegues" >Afficher tous les délégués</a>
                &mdash;
                &mdash;
                <a href="index.php?controleur=statistiques&action=statSecteur" >Afficher les statistiques par secteur</a>
            <?php
            break;
        case 'statRegion': //si l'utilisateur veux les statistiques par région, on affiche tout sauf les statistique par région
            ?>
                <a href="index.php?controleur=statistiques&action=delegues" >Afficher tous les délégués</a>
                &mdash;
                &mdash;
                <a href="index.php?controleur=statistiques&action=statSecteur" >Afficher les statistiques par secteur</a>
            <?php
            break;
        case 'delegues': //si l'utilisateur veux les délégués, on affiche tout sauf les délégués
            ?>
                <a href="index.php?controleur=statistiques&action=statRegion" >Afficher les statistiques par région</a>
                &mdash;
                &mdash;
                <a href="index.php?controleur=statistiques&action=statSecteur" >Afficher les statistiques par secteur</a>
            <?php
            break;
        case 'statSecteur': //si l'utilisateur veux les statistiques par secteur, on affiche tout sauf les statistique par secteur
            ?>
                <a href="index.php?controleur=statistiques&action=delegues" >Afficher tous les délégués</a>
                &mdash;
                &mdash;
                <a href="index.php?controleur=statistiques&action=statRegion" >Afficher les statistiques par région</a>
            <?php
            break;
    }
    ?> </div> <?php

    //---INFORMATION---
    ?> <div class="centre"> <?php
    switch($page) //suivant l'action à réaliser, on appelle la vue correspondante
    {
        case 'none':
            ?> <p class="corpsTexte">Veuillez selectionner la manière voulue pour visualiser les statistiques</p> <?php
            break;
        case 'statRegion':
            //include("vue/");
            break;
        case 'delegues':

            break;
        case 'statSecteur':

            break;
    }
    ?> </div> <?php
?>
