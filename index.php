<?xml version="1.0" encoding="ISO-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html id="page">
    <head>
        <title>GSB project</title>
        <link rel="stylesheet" type="text/css" href="styles/style.css">
    </head>
    <body>
        <div id="entete" name="haut">
            <img src="image/logo.jpg" id="logoGSB" class="logoValidW3c"/>
            <h1>Gestion des visites</h1>
        </div>
        <div id="menuGauche" name="gauche">
            <?php
                include("vue/menu.inc.php");
            ?>
        </div>
        <div id="contenu" name="droite">
            <?php
                if(isset($_GET["controleur"]))
                {
                    switch($_GET["controleur"]) //suivant le contrôleur
                    {
                        case 'statistiques':
                            include("controleur/statistique.inc.php");  //page de statistique
                            break;
                    }
                }
            ?>
            <div id="pied" name="bas">

            </div>
        </div>
    </body>
</html>
