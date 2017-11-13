<html>
    <head>
        <title>
        </title>
        </head>
    <body>
        <?php
            include "BD.php";
            // préparation et requête
            $sql="select * from visiteur v, travailler t where v.matriculeVisiteur = t.matriculeVisiteur and t.roleTravailler = 'Délégué'";
            $resultat=MonPdo::getInstance()->query($sql);
            $lesDeleg=$resultat->fetchAll (PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'travailler');

            // affichage

        ?>
    </body>
</html>
