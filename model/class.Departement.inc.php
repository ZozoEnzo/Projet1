<?php
	/**
	*	La classe département est une classe qui contient l'ensemble des
	*	départements avec son code, son nom, et le chef de chaque département.
	*/
    class Departement {
        private $code;
        private $nom;
        private $chefVente;

		/**
		*	Les getters et setters de la classe département avec le code,
		*	le nom,  et le chef.
		*/
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
