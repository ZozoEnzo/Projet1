<?php
    class Region {
        private $code;
        private $nom;

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
    }
?>
