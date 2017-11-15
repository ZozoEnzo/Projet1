<?php
    class Region {
        private $codeRegion;
        private $nomRegion;
		private $codeSecteur;

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
		public static function allRegion()
		{
			$req = "SELECT * from region";
			$resultat = BD::getInstance()->query($req);
			foreach($resultat->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Region") as $item )
            {
                $region[] = $item;
            }
			return $region;
		}
    }
?>
