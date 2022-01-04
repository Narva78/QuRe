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

	
#INFO MEDECIN (conexion + profil)

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
	
	

#INFO PATIENT (conexion + profil)
	
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


#INFO PHARMACIEN (conexion + profil)
	
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

#Cryptage de donnée
	
	public function cryptage(){
		$password = "select utilisateur.mdp
		from utilisateur";
		$password = PdoGsb::$monPdo->query($req);
		$password = md5($password_1);
	}
	

#ADMIN
	
	public function getInfoAdmin(){
		$req = "select id, nom, prenom, adresse, email
		from utilisateur
		where utilisateur.status = 0";
		$res = PdoGsb::$monPdo->query($req);
		$leResultat = $res->fetchAll();
		return $leResultat;
	}
	
?>


