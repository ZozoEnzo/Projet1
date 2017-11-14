<div id="page">
    <div id="content">
        <div class="box">
            <h2> Liste des délégués</h2>
                <table><tr><th>Matricule</th><th>Nom</th><th>Adresse</th><th>Code postal</th><th>Ville</th><th>Date d'embauche</th><th>Secteur</th></tr>
                    <?php
                    foreach($lesDeleg as $Deleg) //parcours du tableau d'objets récupérés
                    {
                        $matricule=$visiteur->getMatricule();
                        $nom=$visiteur->getnom();
                        $adresse=$visiteur->getadresse();
                        $cp=$visiteur->getcp();
                        $ville=$visiteur->getville();
                        $dateEmbauche=$visiteur->getdateEmbauche();
                        $secteur=$visiteur->getSecteur();?>

                    <tr>
                        <td width=5%><?php echo $matricule?></td>
                        <td width=80%><?php echo $nom?></td>
                        <td width=95%><?php echo $adresse?></td>
                        <td width=10%><?php echo $cp?></td>
                        <td width=50%><?php echo $ville?></td>
                        <td width=15%><?php echo $dateEmbauche?></td>
                        <td width=15%><?php echo $secteur?></td>
                    </tr>
                    <?php
                    }
                    ?>
            </table>
        </div>
    </div>
</div>
