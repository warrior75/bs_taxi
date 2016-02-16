<?php

namespace Controller;

use \W\Controller\Controller;

class ConnexionController extends Controller
{


// connexion à la base de données
protected $dbh;

	// Traitement du formulaire de connexion
	public function index()
	{




		$this->show('connexion/etudiant');
	}

}