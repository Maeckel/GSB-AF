<?php

namespace App\modeles;

use PDO;

class ModeleGSB {

	private static $connexion = null ;
		
	private function __construct(){
		self::$connexion = new PDO( 'mysql:host=localhost;dbname=gsbFrais', 'gsb', 'azerty' ) ;
	}

	private static function getConnexion(){
		if( self::$connexion == null ){
			new ModeleGSB() ;
		}
		return self::$connexion ;
	}

	public static function getVisiteur( $login , $mdp ){
		$bd = self::getConnexion() ;
		$sql = "select id , nom , prenom , login , mdp from visiteur where login = :login and mdp = :mdp" ;
		$st = $bd->prepare( $sql ) ;
		$st->execute( array( ':login' => $login , ':mdp' => $mdp ) ) ;
		$visiteur = $st->fetch( PDO::FETCH_ASSOC ) ;
		$st->closeCursor() ;
		return $visiteur ;
	}

    public static function getComptable( $login , $mdp ){
		$bd = self::getConnexion() ;
		$sql = "select id , nom , prenom , login , mdp from comptable where login = :login and mdp = :mdp" ;
		$st = $bd->prepare( $sql ) ;
		$st->execute( array( ':login' => $login , ':mdp' => $mdp ) ) ;
		$comptable = $st->fetch( PDO::FETCH_ASSOC ) ;
		$st->closeCursor() ;
		return $comptable ;
	}

	public static function getMois( $idVisiteur ){
		$bd = self::getConnexion() ;
		$sql = "select mois from FicheFrais where idVisiteur = :idVisteur" ;
		$st = $bd->prepare( $sql ) ;
		$st->execute( array( ':idVisiteur' => $idVisiteur ) ) ;
		$mois = $st->fetch( PDO::FETCH_ASSOC ) ;
		$st->closeCursor() ;
		return $mois ;
	}

}
