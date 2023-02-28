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

	public static function Delete( $idLigne ){
		$bd = self::getConnexion() ;
		$sql = "DELETE FROM ligne_frais_hors_forfait WHERE id = :idLigne" ;
		$st = $bd->prepare( $sql ) ;
		$st->execute( array( ':idLigne' => $idLigne ) ) ;
		$st->closeCursor() ;
	}

	public static function AjouterFraisHorsForfait( $idVisiteur , $idFichefrais , $Libelle , $Date , $Montant ){
		$bd = self::getConnexion() ;
		$sql = 'insert into ligne_frais_hors_forfait(visiteur_id , fichefrais_id, libelle , date , montant) ' . 'values(:idVisiteur , :idFichefrais , :Libelle , :Date , :Montant)' ;
		$st = $bd->prepare( $sql ) ;
		$st->execute( array( ':idVisiteur' => $idVisiteur , ':idFichefrais' => $idFichefrais , ':Libelle' => $Libelle , ':Date' => $Date , ':Montant' => $Montant ) ) ;
		$st->closeCursor() ;
	}

	public static function Update( $idVisiteur , $idFichefrais , $idFraisforfait , $Quantite ){
		$bd = self::getConnexion() ;
		$sql = "UPDATE ligne_frais_forfait SET quantite = :Quantite where visiteur_id = :idVisiteur and fichefrais_id = :idFichefrais and fraisforfait_id = :idFraisforfait" ;
		$st = $bd->prepare( $sql ) ;
		$st->execute( array( ':Quantite' => $Quantite , ':idVisiteur' => $idVisiteur, ':idFichefrais' => $idFichefrais, ':idFraisforfait' => $idFraisforfait ) ) ;
		$st->closeCursor() ;
	}

}
