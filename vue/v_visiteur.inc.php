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
                        $secteur=$visiteur->getSecteur();
                    }
                    ?>
        </div>
    </div>
</div>
