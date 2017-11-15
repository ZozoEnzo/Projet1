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

    }
?>
