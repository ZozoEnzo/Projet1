<?php
	/**
	*	La classe travailler qui contient le code de la région
	*	récupérer de la classe région, le jour le mois et l'année
	*	récupérer de la classe date, le matricule du visiteur
	*	récupéré de la classe visiteur et le role de chaque visiteur.
	*/
    class Travailler {
        private $codeRegion;
        private $jjmmaa;
		private $matriculeVisiteur;
        private $roleTravailler;

		/**
		*	Les getters et setters du codeRegion
		*	du jour/mois/année, du matricule, du rôle.
		*/
        public function getCodeRegion() {
            return $this->codeRegion;
        }
        public function setCodeRegion($value) {
            $this->codeRegion=$value;
        }
        public function getJjmmaa() {
            return $this->jjmmaa;
        }
        public function setJjmmaa($value) {
            $this->jjmmaa=$value;
        }
		public function getMatriculeVisiteur() {
			return $this->matriculeVisiteur;
		}
		public function setMatriculeVisiteur($value) {
			$this->matriculeVisiteur = $value;
		}
        public function getRoleTravailler() {
            return $this->roleTravailler;
        }
        public function setRoleTravailler() {
            $this->roleTravailler = $value;
        }

		/**
		*	La fonction qui permet de trouver le nombre
		*	de visiteur en fonction d'une région avec
		*	comme paramêtre d'entrée l'id de la région
		*/
		public static function getVisiteurRegionById($id){
			$nombre = 0;
            $sql="  Select  count(matriculeVisiteur) as nombre
                    FROM    travailler
                    Where   roleTravailler = 'visiteur' AND
                            codeRegion = :codeRegion Group By codeRegion";
			$req = BD::getInstance()->prepare($sql);
			$req->execute(array('codeRegion' => $id));
			while($r = $req->fetch()){
				$nombre = $r['nombre'];
			}
			return $nombre;
		}

		/**
		*	La fonction qui permet de trouver le nombre
		*	de délégué en fonction d'une région avec comme
		*	paramêtre d'entrée l'id de la région
		*/
		public static function getDeleguerRegionById($id){
			$nombre = 0;
            $sql="  Select   count(matriculeVisiteur) as nombre
                    FROM     travailler
                    Where    roleTravailler = 'Délégué' AND
                             codeRegion = :codeRegion
                    Group By codeRegion";
			$req = BD::getInstance()->prepare($sql);
			$req->execute(array('codeRegion' => $id));
			while($r = $req->fetch()){
				$nombre = $r['nombre'];
			}
			return $nombre;
		}

    }
?>
