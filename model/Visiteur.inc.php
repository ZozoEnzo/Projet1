<?php
    class Visiteur {
        private $matricule;
        private $nom;
        private $adresse;
        private $cp;
        private $ville;
        private $dateEmbauche;

        public function getMatricule() // VIS_MATRICULE
        {
            return $this->matricule;
        }
        public function setMatricule($value)
        {
            $this->matricule=$value;
        }

        public function getnom() // VIS_NOM
        {
            return $this->nom;
        }
        public function setnom($value)
        {
            $this->nom=$value;
        }

        public function getadresse() // VIS_ADRESSE
        {
            return $this->adresse;
        }
        public function setadresse($value)
        {
            $this->adresse=$value;
        }

        public function getcp() // VIS_CP
        {
            return $this->cp;
        }
        public function setcp($value)
        {
            $this->cp=$value;
        }

        public function getville() // VIS_VILLE
        {
            return $this->ville;
        }
        public function setville($value)
        {
            $this->ville=$value;
        }

        public function getdateEmbauche() // VIS_DATEEMBAUCHE
        {
            return this->dateEmbauche;
        }
        public function setdateEmbauche($value)
        {
            $this->dateEmbauche=$value;
        }
    }
?>
