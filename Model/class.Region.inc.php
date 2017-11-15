<?php
    class Region {
        private $code;
        private $nom;
		private $codeSecteur;

        public function getCode()
        {
            return $this->code;
        }
        public function setCode($value)
        {
            $this->code=$value;
        }
        public function getNom()
        {
            return $this->nom;
        }
        public function setNom($value)
        {
            $this->nom=$value;
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
