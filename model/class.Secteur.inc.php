<?php
    class Secteur {
        private $code;
        private $libelle;

        public function getCode()
        {
            return $this->code;
        }
        public function setCode($value)
        {
            $this->code=$value;
        }
        public function getlibelle()
        {
            return $this->libelle;
        }
        public function setlibelle($value)
        {
            $this->libelle=$value;
        }
    }
?>
