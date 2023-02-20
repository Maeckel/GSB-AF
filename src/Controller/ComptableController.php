<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use App\modeles\ModeleGSB;

class ComptableController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('comptable/index.html.twig', [
            'controller_name' => 'ComptableController',
        ]);
    }

    public function Authentification(Request $request)
    {
        $login = $_POST[ "login" ] ;
	    $mdp = $_POST[ "mdp" ] ;
	
	    $comptable = ModeleGSB::getComptable( $login , $mdp ) ;
	
	    if( $comptable !== FALSE ){

            $session = $request->getSession();

		    $session->set('id' , $comptable[ "id" ]) ;
		    $session->set('nom' , $comptable[ "nom" ]) ; 
		    $session->set('prenom' , $comptable[ "prenom" ]) ; 
            $session->set('login' , $comptable[ "nom" ]) ; 
		    $session->set('mdp' , $comptable[ "mdp" ]) ; 

            $login = $session->get('login');
            $mdp = $session->get('mdp');
		
		    return $this->render('comptable/espace.html.twig', array('comptable' => $comptable) );
	    }
	    else {
		    $erreur = 'EMail ou mot de passe incorrect.' ;
		    return $this->redirectToRoute( 'app_comptable' ) ;
	    }

    }

    public function Valider()
    {
        session_start();
        
        return $this->render('comptable/valider.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }

    public function Suivre()
    {
        session_start();
        
        return $this->render('comptable/suivre.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }

    public function Espace()
    {
        session_start();
        
        return $this->render('comptable/espace.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }

    public function Deconnecter()
    {
        session_start();
        session_destroy();
        
        return $this->redirectToRoute( 'app_comptable' ) ;
        
    }
};
