<?php
	/**
	*	Classe date qui permet de récupérer une date avec un jour
	*	un mois et une année, qui pourra ensuite être réutilisée pour
	*	les dates d'embauches des employers
	*/

    class Date {
        private $jour;
        private $mois;
        private $annee;

		/**
		*	Les getters et setters de la classe date avec le jour le mois, et l'anné.
		*/
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
