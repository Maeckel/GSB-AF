<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use App\modeles\ModeleGSB;
use App\Entity\FicheFrais;
use App\Entity\LigneFraisForfait;

class VisiteurController extends AbstractController
{

    public function index(): Response
    {
        $erreur = 'EMail ou mot de passe incorrect.' ;

        return $this->render('visiteur/index.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }

    public function Authentification(Request $request)
    {
        $login = $_POST[ "login" ] ;
	    $mdp = $_POST[ "mdp" ] ;
	
	    $visiteur = ModeleGSB::getVisiteur( $login , $mdp ) ;
	
	    if( $visiteur !== FALSE ){

            $session = $request->getSession();

		    $session->set('id' , $visiteur[ "id" ]) ;
		    $session->set('nom' , $visiteur[ "nom" ]) ; 
		    $session->set('prenom' , $visiteur[ "prenom" ]) ; 
            $session->set('login' , $visiteur[ "nom" ]) ; 
		    $session->set('mdp' , $visiteur[ "mdp" ]) ; 

            $login = $session->get('login');
            $mdp = $session->get('mdp');
		
		    return $this->redirectToRoute('app_espace_visiteur', array('visiteur' => $visiteur) );
	    }
	    else {
		    $erreur = 'EMail ou mot de passe incorrect.' ;
		    return $this->redirectToRoute( 'app_visiteur' , array('erreur' => $erreur) ) ;
	    }

    }

    public function Consulter(Request $request)
    {
        session_start();

        $idVisiteur = $this->get('session')->get('id');
        $Year = date('Y');
        $Co = $this -> getDoctrine() 
					-> getRepository('App\Entity\FicheFrais') ;
        $mois = $Co -> Mois($idVisiteur , $Year);

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $choix = $_POST[ "Mois" ] ;

            $fiche = $Co -> findOneBy(array('id' => $choix , 'visiteur' => $idVisiteur));

            $Co2 = $this -> getDoctrine() 
					    -> getRepository('App\Entity\LigneFraisForfait') ;
            $frais = $Co2 -> findBy(array('Visiteur' => $idVisiteur, 'Fichefrais' => $choix ));

            return $this->render('visiteur/consulter.html.twig', [ 'mois' => $mois , 'fiche' => $fiche, 'frais' => $frais ]);
        }
        
        return $this->render('visiteur/consulter.html.twig', [ 'mois' => $mois ]);
    }

    public function Renseigner()
    {
        session_start();
        
        return $this->render('visiteur/renseigner.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }

    public function Espace()
    {
        session_start();
        
        return $this->render('visiteur/espace.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }

    public function Deconnecter()
    {
        session_start();
        session_destroy();
        
        return $this->redirectToRoute( 'app_visiteur' ) ;
        
    }
};