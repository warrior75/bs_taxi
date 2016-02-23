<?php

namespace Controller;

use \W\Controller\Controller;

class EtudiantController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function index()
	{
		$this->allowTo('etudiant');
		$this->show('etudiant/index');
	}

}