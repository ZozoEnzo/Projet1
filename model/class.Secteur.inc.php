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
        public static function getAll()
        {
            BD::getInstance()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $req = BD::getInstance()->prepare("SELECT * FROM Secteur");
            $req->execute();
            return $req->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Secteur");
        }
        private function getNbVisiteurs()
        {
            $sql="SELECT COUNT(*) FROM Secteur S, Region R, Travailler T WHERE S.CodeSecteur = R.CodeSecteur AND R.CodeRegion = T.CodeRegion AND S.codeSecteur = :code";
            $resultat=BD::getInstance()->prepare($sql);
            $resultat->bindParam(':code', $code);
            $resultat->execute();
            $nbVisiteurs=$resultat->fetch(PDO::FETCH_ASSOC);
            return $nbVisiteurs;
        }
        public static function getAllNbVisiteurs()
        {
            $sql="SELECT S.libelleSecteur, COUNT(*) AS nbVisiteurs FROM Secteur S, Region R, Travailler T WHERE S.CodeSecteur = R.CodeSecteur AND R.CodeRegion = T.CodeRegion GROUP BY S.libelleSecteur";
            $resultat=BD::getInstance()->prepare($sql);
            $resultat->execute();
            $inc = 0;
            while($stat=$resultat->fetch(PDO::FETCH_ASSOC))
            {
                $retour[$inc][0] = $stat["libelleSecteur"];
                $retour[$inc][1] = $stat["nbVisiteurs"];
                $inc++;
            }
            return $retour;
        }
    }
?>
