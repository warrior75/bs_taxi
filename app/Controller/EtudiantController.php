<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\CourManager;

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

		
		
		$coursManager = New CourManager();
		$cours=$coursManager->findAll($orderBy="id", $orderDir ="ASC", $limit = null, $offset = null );
		debug($cours);

		$this->show('etudiant/index',['cours'=>$cours]);

	
	}



}

