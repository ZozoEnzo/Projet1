<?php
	/**
	*	La classe Secteur avec l'ensemble des informations dans un
	*	secteur, qui sont : son code et son libelle 'nom'
	*/
    class Secteur {
        private $code;
        private $libelle;

		/**
		*	Les getters et setters de la classe secteur avec le code et le libelle
		*/
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
		/**
		*	La fonction qui permet de récupérer tout les secteurs
		*	avec une requête sql puis de les renvoyers.
		*/
        public static function getAll()
        {
            BD::getInstance()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $req = BD::getInstance()->prepare("SELECT * FROM Secteur");//La requête sql pour récupérer les secteurs dans la base de donnée.
            $req->execute();
            return $req->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Secteur");
        }
		/**
		*	La fonction qui donne le nombre de visiteur par secteur,
		*	avec une requête sql préparer.
		*/
        private function getNbVisiteurs()
        {
            $sql="SELECT COUNT(*) FROM Secteur S, Region R, Travailler T WHERE S.CodeSecteur = R.CodeSecteur AND R.CodeRegion = T.CodeRegion AND S.codeSecteur = :code";//La requête sql préparer
            $resultat=BD::getInstance()->prepare($sql);
            $resultat->bindParam(':code', $code); //On donne au code la donnée du code qui lui correspond bien.
            $resultat->execute();
            $nbVisiteurs=$resultat->fetch(PDO::FETCH_ASSOC);
            return $nbVisiteurs;
        }
		/**
		*	La fonction qui donne le nombre total de visiteur
		*	ordonné par secteur avec une requête sql.
		*/
        public static function getAllNbVisiteurs()
        {
            $sql="SELECT S.libelleSecteur, COUNT(*) AS nbVisiteurs FROM Secteur S, Region R, Travailler T WHERE S.CodeSecteur = R.CodeSecteur AND R.CodeRegion = T.CodeRegion GROUP BY S.libelleSecteur"; //La requête sql qui sera envoyé à la base de donnée.
            $resultat=BD::getInstance()->prepare($sql);
            $resultat->execute();
            $inc = 0;
            while($stat=$resultat->fetch(PDO::FETCH_ASSOC)) //On récupère les données de chaque ligne.
            {
                $retour[$inc][0] = $stat["libelleSecteur"];
                $retour[$inc][1] = $stat["nbVisiteurs"];
                $inc++;
            }
            return $retour;
        }
    }
?>
