<table>
    <tr> <!-- COLONNES -->
        <th>Matricule</th>
        <th>Nom</th>
        <th>Adresse</th>
        <th>Code postal</th>
        <th>Ville</th>
        <th>Date d'embauche</th>
        <th>Secteur</th>
    </tr>
    <?php //REMPLISSAGE
    foreach($lesVisiteurs as $visiteur) //parcours du tableau d'objets récupérés
    {
        $matricule=$visiteur->getMatricule();
        $nom=$visiteur->getnom();
        $adresse=$visiteur->getadresse();
        $cp=$visiteur->getcp();
        $ville=$visiteur->getville();
        $dateEmbauche=$visiteur->getdateEmbauche();
        $secteur=$visiteur->getSecteur($matricule);    ?>
    <tr>
        <td><?php echo $matricule ?></td>
        <td><?php echo $nom ?></td>
        <td><?php echo $adresse ?></td>
        <td><?php echo $ville ?></td>
        <td><?php echo $cp ?></td>
        <td><?php echo $dateEmbauche ?></td>
        <td><?php echo $secteur ?></td>
    </tr>
    <?php } ?>
</table>
