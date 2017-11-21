<?php
    class Travailler {
        private $codeRegion;
        private $jjmmaa;
		private $matriculeVisiteur;
        private $roleTravailler;

        public function getCodeRegion()
        {
            return $this->codeRegion;
        }
        public function setCodeRegion($value)
        {
            $this->codeRegion=$value;
        }
        public function getJjmmaa()
        {
            return $this->jjmmaa;
        }
        public function setJjmmaa($value)
        {
            $this->jjmmaa=$value;
        }
		public function getMatriculeVisiteur()
		{
			return $this->matriculeVisiteur;
		}
		public function setMatriculeVisiteur($value)
		{
			$this->matriculeVisiteur = $value;
		}
        public function getRoleTravailler()
        {
            return $this->roleTravailler;
        }
        public function setRoleTravailler()
        {
            $this->roleTravailler = $value;
        }

		public static function getVisiteurRegionById($id){
			$nombre = 0;
			$req = BD::getInstance()->prepare("Select count(matriculeVisiteur) as nombre FROM travailler Where roleTravailler = 'visiteur' AND codeRegion = :codeRegion Group By codeRegion");
			$req->execute(array('codeRegion' => $id));
			while($r = $req->fetch()){
				$nombre = $r['nombre'];
			}
			return $nombre;
		}

		public static function getDeleguerRegionById($id){
			$nombre = 0;
			$req = BD::getInstance()->prepare("Select count(matriculeVisiteur) as nombre FROM travailler Where roleTravailler = 'Délégué' AND codeRegion = :codeRegion Group By codeRegion");
			$req->execute(array('codeRegion' => $id));
			while($r = $req->fetch()){
				$nombre = $r['nombre'];
			}
			return $nombre;
		}

    }
?>
