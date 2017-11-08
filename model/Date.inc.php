<?php
    class Date {
        private $jour;
        private $mois;
        private $annee;

        public function getjour()
        {
            return $this->jour;
        }
        public function setjour($value)
        {
            $this->jour=$value;
        }
        public function getmois()
        {
            return $this->mois;
        }
        public function setmois($value)
        {
            $this->mois=$value;
        }
        public function getannee()
        {
            return $this->annee=$value;
        }
        public function setannee($value)
        {
            $this->annee=$value;
        }
    }
?>
