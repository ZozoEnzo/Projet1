<?php
    if(!isset($_GET["action"])) //Si aucune action n'a été demander, alors on affiche la page d'acceuil des statistiques
    {
        include("vue/statistique.inc.php");
    }
    else
    {
        switch($_GET["action"]) //suivant l'action à réaliser,
        {
            case 'statRegion':
                $_GET['page'] = 'statRegion';
                include("vue/statistique.inc.php");
				$lesRegions = Region::allRegion();
				$Visit = Travailler::getVisiteurs();
                include("vue/region.inc.php");
				break;
            case 'delegues':
                $_GET['page'] = 'delegues';
                include("vue/statistique.inc.php");
				$lesDeleg=Visiteur::getDelegues();
                include("vue/v_visiteur.inc.php");
				break;
            case 'statSecteur':
                $_GET['page'] = 'statSecteur';
                include("vue/statistique.inc.php");
                $lesStatsSecteurs=Secteur::getAllNbVisiteurs();
                include("vue/secteur.inc.php");
				break;
        }
    }
?>
