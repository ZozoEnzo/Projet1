<?php
    if(!isset($_GET["action"])) //Si aucune action n'a été demander, alors on affiche la page d'acceuil des statistiques
    {
        include("vue/statistique.inc.php");
    }
    else
    {
        switch($_GET["action"]) //suivant l'action à réaliser,
        {
            case 'region':
				$lesRegions = Region::allRegion();
                include("vue/v_regions.php");
				break;
            case 'delegues':
				$lesDeleg=Visiteur::getDelegues();
                            //inclure la vue visiteur
				break;
            case 'secteur':
				include("controleur/c_Secteur.php");
				break;
        }
    }
?>
