<?php
	/**
	*	La classe visiteur, une classe qui récupère
	*	toutes les données d'un visiteur avec le matricule
	*	du visiteur, le codeSecteur dans lequel se trouve
	*	le secteur du visiteur, il est récupérer de la
	*	classe Secteur, il y a le codeDep qui est récupérer
	*	de la classe département, le nom du visiteur, son
	*	adresse, son code postal, sa ville et sa date d'embauche.
	*/
    class Visiteur {
        private $matriculeVisiteur;
        private $codeSecteur;
        private $codeDep;
        private $nomVisiteur;
        private $adresseVisiteur;
        private $cpVisiteur;
        private $villeVisiteur;
        private $dateEmbauche;

		/*
		*	Les getters et setters du matriculeVisiteur, du codeSecteur,
		*	du codeDep, du nomVisiteur, de l'adresseVisiteur, du cpVisiteur,
		*	de la villeVisiteur et de la *dateEmbauche.
		*/
        public function getMatricule() { // VIS_MATRICULE
            return $this->matriculeVisiteur;
        }
        public function setMatricule($value) {
            $this->matriculeVisiteur=$value;
        }
        public function getCodeSecteur() {
            return $this->codeSecteur;
        }
        public function setSecteur($value) {
            $this->codeSecteur=$value;
        }
        public function getCodeDep() {
            return $this->codeDep;
        }
        public function setCodeDep() {
            $this->codeDep=$value;
        }
        public function getnom() { // VIS_NOM
            return $this->nomVisiteur;
        }
        public function setnom($value) {
            $this->nomVisiteur=$value;
        }
        public function getadresse() {// VIS_ADRESSE
            return $this->adresseVisiteur;
        }
        public function setadresse($value) {
            $this->adresseVisiteur=$value;
        }
        public function getcp() { // VIS_CP
            return $this->cpVisiteur;
        }
        public function setcp($value) {
            $this->cpVisiteur=$value;
        }

        public function getville() {// VIS_VILLE
            return $this->villeVisiteur;
        }
        public function setville($value) {
            $this->villeVisiteur=$value;
        }
        public function getdateEmbauche() { // VIS_DATEEMBAUCHE
            return $this->dateEmbauche;
        }
        public function setdateEmbauche($value) {
            $this->dateEmbauche=$value;
        }
		/**
		*	affiche la liste de l'ensemble de visiteur qui on pour role délégué.
		*/
        public static function getDelegues() {
            $sql="select * from visiteur v, travailler t where v.matriculeVisiteur = t.matriculeVisiteur and t.roleTravailler = 'Délégué'";
            $resultat=BD::getInstance()->query($sql);
            $lesDeleg=$resultat->fetchAll (PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Visiteur');
            return $lesDeleg;
        }
		/**
		*	affiche le secteur d'un visiteur depuis son matricule
		*/
        public static function getSecteur($matricule) {
            $sql="select libelleSecteur from Secteur s, Visiteur v where s.codeSecteur = v.codeSecteur and v.matriculeVisiteur=:matricule";
            $resultat=BD::getInstance()->prepare($sql);
            $resultat->bindParam(':matricule', $matricule);
            $resultat->execute();
            $laLigne=$resultat->fetch(PDO::FETCH_ASSOC);
            $retour=$laLigne["libelleSecteur"];
            return $retour;
        }
		/**
		*	affiche le département d'un visiteur depuis son matricule
		*/
        public static function getDepartement($matricule) {
            $sql="select nomDep from departement d, visiteur v where d.codeDep = v.codeDep and v.matriculeVisiteur=:matricule"; //requête sql pour l'affichage
            $resultat=BD::getInstance()->prepare($sql);
            $resultat->bindParam(':matricule', $matricule); //donner le paramêtre $matricule au matricule de la requête
            $resultat->execute();
            $laLigne=$resultat->fetch(PDO::FETCH_ASSOC);
            $retour=$laLigne["nomDep"];
            return $retour;
        }
		//Affiche tout l'ensemble des secteurs
        public static function getAll() {
            BD::getInstance()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $req = BD::getInstance()->prepare("SELECT * FROM Secteur");
            $req->execute();
            return $req->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Visiteur");
        }
		/**
		*	affiche la liste de tout les visiteurs en fonction d'une région
		*/
        public static function getAllVisiteurs($region) {
            $test=$region;
            $sql="  SELECT  V.matriculeVisiteur, V.codeSecteur, V.codeDep, V.nomVisiteur,
                            V.adresseVisiteur, V.cpVisiteur, V.villeVisiteur, V.dateEmbauche
                    FROM    Region R, Visiteur V, Travailler T
                    WHERE   R.codeRegion = T.codeRegion AND
                            T.matriculeVisiteur = V.matriculeVisiteur AND
                            R.codeRegion = :region"; //requête sql pour l'affichage
            BD::getInstance()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $req = BD::getInstance()->prepare($sql);
            $req->bindParam(':region', $test); //donner le paramêtre $region a la region de la requête
            $req->execute();
            return $req->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Visiteur");
        }
		/**
		*	affiche la liste de tous les visiteurs en fonction d'une région d'une date de début et d'une date de fin
		*	$region type region de la classe région; le nom de la région
		*	$dateDebut type date ; date de début, avec la date d'embauche
		*	$dateFin type date ; date de fin, avec la date d'embauche
		*/
        public static function rechercheParDate($region, $dateDebut, $dateFin) {
            $sql= " SELECT v.matriculeVisiteur, v.nomVisiteur, v.adresseVisiteur, v.cpVisiteur, v.villeVisiteur, v.dateEmbauche, s.libelleSecteur
                    FROM Visiteur v, travailler t, secteur s
                    WHERE s.codeSecteur = v.codeSecteur
                    AND v.matriculeVisiteur = t.matriculeVisiteur
                    AND t.codeRegion = ':region'
                    AND dateEmbauche BETWEEN ':dateDebut' and ':dateFin'";
            BD::getInstance()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $req = BD::getInstance()->prepare($sql);
            $req->bindParam(':dateDebut', $dateDebut);
            $req->bindParam(':dateFin', $dateFin);
            $req->bindParam(':region', $region);
            $req->execute();
            return $req->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Visiteur");
        }
    }
?>
