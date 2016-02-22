<?php

namespace Controller;

use \W\Controller\Controller;

class AdminController extends Controller
{

	/**
	 * Page accessible uniquement pour les admin
	 */
	public function index()
	{
		$this->show('admin/index');
	}

	// Traitement du formulaire d'inscription
	public function register(){

	}

	// Affiche la page du formulaire d'inscription
	public function inscription(){
		$this->show('admin/inscription');
	}

}