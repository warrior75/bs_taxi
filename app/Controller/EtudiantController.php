<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\CourManager;
use \Manager\ThemeManager;


class EtudiantController extends Controller
{

	

	/**
	 * Page d'accueil par défaut
	 */
	public function index()
	{
		$this->allowTo('etudiant');
		

		// récupérer les données de la session utilisateur
		$loggedUser = $this->getUser();

		
		
		// $coursManager = New CourManager();
		// $cours=$coursManager->findAll($orderBy="id", $orderDir ="ASC", $limit = null, $offset = null );
		$courManager = New CourManager();
		$coursAndThemes =  $courManager->findThemeAndCour();

		


		$this->show('etudiant/index',['themes'=>$coursAndThemes]);

	
	}



}

