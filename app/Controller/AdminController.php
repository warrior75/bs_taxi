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

	private function random_password( $length = 8 ){ 
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?"; 
		$password = substr( str_shuffle( $chars ), 0, $length ); 
		return $password;
	}



	// Traitement du formulaire d'inscription
	public function register(){
		if(isset($_POST['addUser'])){
			// Création de mes variables
			$firstname = trim(htmlentities($_POST['firstname']));
			$lastname = trim(htmlentities($_POST['lastname']));
			$email = trim(htmlentities($_POST['email']));
			$firstname = trim(htmlentities($_POST['firstname']));
			$password = random_password();
			$password_hash = password_hash($password); 
			$role = trim(htmlentities($_POST['role']));

			//Initialisation d'un tableau d'erreurs vide
			$errors = [];

			if(empty($firstname) ) {



		}

	}

	// Affiche la page du formulaire d'inscription
	public function inscription(){
		$this->show('admin/inscription');
	}

}