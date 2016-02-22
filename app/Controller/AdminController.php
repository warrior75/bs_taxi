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
		$this->show('connexion/admin');
	}

}