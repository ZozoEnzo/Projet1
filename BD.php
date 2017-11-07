<?php
    /*
    *	Classe d'acces aux donnees Utilise les services de la classe PDO
    *	Les attributs sont tous statiques, les 4 premiers pour la connexion
    *	$maBD qui contiendra l'unique instance de la classe
    */
    class BD
    {
        private static $serveur='mysql:host=serverbtssiojv.ddns.net';
        private static $bdd='dbname=gsb1_enzo';
        private static $user='gsb1' ;
        private static $mdp='gsb1' ;
        private static $maBD;
        private static $unPdo = null;

        //	Constructeur privé, crée l'instance de PDO qui sera sollicitée
        //	pour toutes les méthodes de la classe
        private function __construct()
        {
            MonPdo::$unPdo = new PDO(MonPdo::$serveur.';'.MonPdo::$bdd, MonPdo::$user, MonPdo::$mdp);
            MonPdo::$unPdo->query("SET CHARACTER SET utf8");
            MonPdo::$unPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        public function __destruct()
        {
            MonPdo::$unPdo = null;
        }
        /**
        *	Fonction statique qui cree l'unique instance de la classe
        * Appel : $instanceMonPdo = MonPdo::getMonPdo();
        *	@return l'unique objet de la classe MonPdo
        */
        public static function getInstance()
        {
            if(self::$unPdo == null)
            {
                self::$maBD = new MonPdo();
            }
            return self::$unPdo;
        }

    }
?>
