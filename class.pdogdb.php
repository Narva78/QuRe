<?php

class PdoGsb{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=qure';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdoGsb=null;


        private function __construct(){
            PdoGsb::$monPdo = new PDO(PdoGsb::$serveur.';'.PdoGsb::$bdd, PdoGsb::$user, PdoGsb::$mdp); 
            PdoGsb::$monPdo->query("SET CHARACTER SET utf8");
        }
        public function _destruct(){
            PdoGsb::$monPdo = null;
        }

	
#INFO MEDECIN	

	public function getInfosMed($login, $mdp){
		$req = "select utilisateur.id as id, 
		utilisateur.nom as nom, 
		utilisateur.prenom as prenom,
		utilisateur.status from utilisateur 
		where utilisateur.RPPS='$login' and utilisateur.mdp='$mdp'";
		$rs = PdoGsb::$monPdo->query($req);
		$ligne = $rs->fetch();
		return $ligne;
	}
	
	
	public function getNomMed(){
		$req = "select utilisateur.id as id, 
		utilisateur.nom as nom, 
		utilisateur.prenom as prenom from utilisateur
		where utilisateur.status=2";
		$res = PdoGsb::$monPdo->query($req);
		$leResultat = $res->fetchAll();
		return $leResultat;
	}
	
	

#INFO PATIENT
	
	public function getInfosPatient($login, $mdp){
		$req = "select utilisateur.id as id, 
		utilisateur.nom as nom, 
		utilisateur.prenom as prenom,
		utilisateur.status from utilisateur 
		where utilisateur.secuSocial='$login' and utilisateur.mdp='$mdp'";
		$rs = PdoGsb::$monPdo->query($req);
		$ligne = $rs->fetch();
		return $ligne;
	}
	
	public function getNomPatient(){
		$req = "select utilisateur.id as id, 
		utilisateur.nom as nom, 
		utilisateur.prenom as prenom from utilisateur
		where utilisateur.status=1";
		$res = PdoGsb::$monPdo->query($req);
		$leResultat = $res->fetchAll();
		return $leResultat;
	}


#INFO PHARMACIEN
	
	public function getInfosPharmacien($login, $mdp){
	$req = "select utilisateur.id as id, 
	utilisateur.nom as nom, 
	utilisateur.prenom as prenom,
	utilisateur.status from utilisateur 
	where utilisateur.id='$login' and utilisateur.mdp='$mdp'";
	$rs = PdoGsb::$monPdo->query($req);
	$ligne = $rs->fetch();
	return $ligne;
}

	public function getNomPharmacien(){
		$req = "select utilisateur.id as id, 
		utilisateur.nom as nom, 
		utilisateur.prenom as prenom from utilisateur
		where utilisateur.status=3";
		$res = PdoGsb::$monPdo->query($req);
		$leResultat = $res->fetchAll();
		return $leResultat;
	}


?>

