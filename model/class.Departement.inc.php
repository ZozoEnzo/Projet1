<?php
    class Departement {
        private $code;
        private $nom;
        private $chefVente;

        public function getCode()
        {
            return $this->code;
        }
        public function setCode($value)
        {
            $this->code=$value;
        }
        public function getnom()
        {
            return $this->nom;
        }
        public function setnom($value)
        {
            $this->nom=$value;
        }
        public function getchefVente()
        {
            return $this->chefVente;
        }
        public function setchefVente($value)
        {
            $this->chefVente=$value;
        }
    }
?>
