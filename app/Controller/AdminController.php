<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \DateTime;
use \PHPMailer;


class AdminController extends Controller
{

	/**
	 * Page accessible uniquement pour les admin
	 */
	public function index()
	{
		$this->allowTo('admin');
		$this->show('admin/index');
	}

	// fonction privée qui génére un mdp aléatoire
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
			$password = $this->random_password();
			$password_hash = password_hash($password,PASSWORD_DEFAULT); 
			$role = trim(htmlentities($_POST['role']));

			//Initialisation d'un tableau d'erreurs vide
			$errors = [];

			// Instanciation d'un objet de type UseManager
			$userManager = new userManager();
			$userManager->setTable('users');

			if(empty($email) || (filter_var($email,FILTER_VALIDATE_EMAIL))=== false){
				$errors['email'] = "Adresse email incorect";
			}elseif($userManager->emailExists($email)) {
				$errors['email'] = "Cette adresse email existe déjà";
			}

			if(empty($lastname)){
				$errors['lastname'] = "Veuillez renseigner le nom";
			}

			if(empty($firstname)){
				$errors['firstname'] = "Veuillez renseigner le prénom";
			}

			// S'il n'y a pas d'erreurs on insère un utilisateur en bdd
			if(empty($errors)){
				$date = new DateTime();
				$resultUser = $userManager->insert([
					'email' => $email,
					'firstname' => $firstname,
					'lastname' => $lastname,
					'password' => $password_hash,
					'role' => $role,
					'created_at' => $date->format('Y-m-s H:i:s'),
					'updated_at' => $date->format('Y-m-s H:i:s')
				]);
			$infos = " Inscription réussie <br> Identifiant: $email <br> Mot de passe : $password ";

			$this->show('admin/inscription',['infos' => $infos]);
 
		}

		}
	}	
	// Affiche la page du formulaire d'inscription
	public function inscription(){
		$this->show('admin/inscription');
	}

}