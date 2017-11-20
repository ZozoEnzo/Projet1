<?php
    class Visiteur {
        private $matriculeVisiteur;
        private $nomVisiteur;
        private $adresseVisiteur;
        private $cpVisiteur;
        private $villeVisiteur;
        private $dateEmbauche;

        public function getMatricule() // VIS_MATRICULE
        {
            return $this->matriculeVisiteur;
        }
        public function setMatricule($value)
        {
            $this->matriculeVisiteur=$value;
        }

        public function getnom() // VIS_NOM
        {
            return $this->nomVisiteur;
        }
        public function setnom($value)
        {
            $this->nomVisiteur=$value;
        }

        public function getadresse() // VIS_ADRESSE
        {
            return $this->adresseVisiteur;
        }
        public function setadresse($value)
        {
            $this->adresseVisiteur=$value;
        }

        public function getcp() // VIS_CP
        {
            return $this->cpVisiteur;
        }
        public function setcp($value)
        {
            $this->cpVisiteur=$value;
        }

        public function getville() // VIS_VILLE
        {
            return $this->villeVisiteur;
        }
        public function setville($value)
        {
            $this->villeVisiteur=$value;
        }

        public function getdateEmbauche() // VIS_DATEEMBAUCHE
        {
            return $this->dateEmbauche;
        }
        public function setdateEmbauche($value)
        {
            $this->dateEmbauche=$value;
        }
        public static function getDelegues()
        {
            $sql="select * from visiteur v, travailler t where v.matriculeVisiteur = t.matriculeVisiteur and t.roleTravailler = 'Délégué'";
            $resultat=BD::getInstance()->query($sql);
            $lesDeleg=$resultat->fetchAll (PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Visiteur');
            return $lesDeleg;
        }
        public static function getSecteur($matricule)
        {
            $sql="select libelleSecteur from Secteur s, Visiteur v where s.codeSecteur = v.codeSecteur and v.matriculeVisiteur=:matricule";
            $resultat=BD::getInstance()->prepare($sql);
            $resultat->bindParam(':matricule', $matricule);
            $resultat->execute();
            $laLigne=$resultat->fetch(PDO::FETCH_ASSOC);
            $retour=$laLigne["libelleSecteur"];
            return $retour;
        }
    }
?>
