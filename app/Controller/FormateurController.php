<?php

namespace Controller;

use \W\Controller\Controller;

class FormateurController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function index()
	{
		$this->show('formateur/index');
	}

}