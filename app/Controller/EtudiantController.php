<?php

namespace Controller;

use \W\Controller\Controller;

class EtudiantController extends Controller
{

	// connexion à la BDD
	protected $dbh;

	/**
	 * Page d'accueil par défaut
	 */
	public function index()
	{
		$this->allowTo('etudiant');
		$this->show('etudiant/index');

		// récupérer les données de la session utilisateur
		$loggedUser = $this->getUser();

		// debug 
		debug($connectedAdmin);

		// new Manager

		$this->update()
	}



}

