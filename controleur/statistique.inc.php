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
                include("vue/regions.inc.php");
				break;
            case 'delegues':
				$lesDeleg=Visiteur::getDelegues();
                include("vue/v_visiteur.inc.php");
				break;
            case 'secteur':
				include("controleur/c_Secteur.php");
				break;
        }
    }
?>
