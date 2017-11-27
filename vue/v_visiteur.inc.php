<!-- Affichage de option d'un délégué en foncion du région choisit précédemment -->
<table><tr><th>Matricule</th><th>Nom</th><th>Adresse</th><th>Ville</th><th>Code postal</th><th>Département</th><th>Date d'embauche</th><th>Secteur</th></tr>
    <?php
        foreach($lesDeleg as $Deleg) { //parcours du tableau d'objets récupérés
                $matricule=$Deleg->getMatricule();
                $nom=$Deleg->getnom();
                $adresse=$Deleg->getadresse();
                $ville=$Deleg->getville();
                $cp=$Deleg->getcp();
                $departement=$Deleg->getDepartement($matricule);
                $dateEmbauche=$Deleg->getdateEmbauche();
                $secteur=$Deleg->getSecteur($matricule);
            ?>
            <tr> <!-- Affichage du tableau avec les données récupéré précédemment en php -->
                <td><?php echo $matricule ?></td>
                <td><?php echo $nom ?></td>
                <td><?php echo $adresse ?></td>
                <td><?php echo $ville ?></td>
                <td><?php echo $cp ?></td>
            <td><?php echo $departement ?></td>
                <td><?php echo $dateEmbauche ?></td>
                <td><?php echo $secteur ?></td>
            </tr>
        <?php } ?>
</table>
