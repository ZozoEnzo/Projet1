<?php
	/**
	*	La classe région est la classe qui contient l'ensemble des
	*	region avec leur nom et leur secteur qui lui correspond,
	*	l'information du secteur proviens de la classe secteur, et
	*	défini une zone de France.
	*/
    class Region {
        private $codeRegion;
        private $nomRegion;
		private $codeSecteur;

		/**
		*	Les getters et setters de la classe region avec
		*	le codeRegion, le nomRegion, et le codeSecteur.
		*/
        public function getCodeRegion()
        {
            return $this->codeRegion;
        }
        public function setCodeRegion($value)
        {
            $this->codeRegion=$value;
        }
        public function getNomRegion()
        {
            return $this->nomRegion;
        }
        public function setNomRegion($value)
        {
            $this->nomRegion=$value;
        }
		public function getCodeSec()
		{
			return $this->codeSecteur;
		}
		public function setCodeSec($value)
		{
			$this->codeSecteur = $value;
		}
		/**
		*	La fonction qui permet de récupérer la liste de toutes
		*	les régions avec une requête sql, et de retourner dans
		*	un tableau ces régions.
		*/
		public static function allRegion()
		{
			$req = "SELECT * from region"; //La requête sql qui sera envoyé à la base de donnée pour récupérer les bonnes informations.
			$resultat = BD::getInstance()->query($req);
			foreach($resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Region") as $item )
            {
                $region[] = $item; //Le tableau avec toutes les régions
            }
			return $region;
		}
    }
?>
