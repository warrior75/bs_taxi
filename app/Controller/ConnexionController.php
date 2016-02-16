<?php

namespace Controller;

use \W\Controller\Controller;

class ConnexionController extends Controller
{

	// Traitement du formulaire de connexion
	public function index()
	{



		$this->show('connexion/etudiant');
	}

}