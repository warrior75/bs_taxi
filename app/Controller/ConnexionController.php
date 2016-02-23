<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\Manager;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;

class ConnexionController extends Controller
{


// connexion à la base de données
protected $dbh;

	// Traitement du formulaire de connexion
	public function index(){

		if(isset($_POST['action'])){

			print_r($_POST);
			$email = trim(htmlentities($_POST['email']));
			$password = trim(htmlentities($_POST['password']));

			// Initialisation d'un tableau d'erreurs vide
			$errors = [];

			// Instanciation d'un object de type UserManager
			$userManager = new UserManager();
			$userManager->setTable('users'); // Bug du framework le nom de la table est mal défini

			$resultUser = $userManager->getUserByUsernameOrEmail($email);

			// S'il trouve un user avec cet email
			if($resultUser){
				$authentificationManager = new AuthentificationManager();

				//  Teste si le mot de passe est valide
				if($authentificationManager->isValidLoginInfo($email, $password)){

				$role = $resultUser['role'];

					// Teste le role du user

					if( $role === "admin"){
						
						$authentificationManager->logUserIn($resultUser);

						$this->redirectToRoute('admin');

					}elseif($role === "formateur"){
						$authentificationManager->logUserIn($resultUser);
						$this->redirectToRoute('formateur');
					}elseif($role === "etudiant"){
						$authentificationManager->logUserIn($resultUser);
						$this->redirectToRoute('etudiant');
					}



				}else{
					$error['password'] = "Erreur de mot de passe";
					$this->show('connexion/pageConnexion',['error'=> $error]);
				}

			}else {
				$error['email'] = "Erreur d'email";
				$this->show('connexion/pageConnexion',['error'=> $error]);
			}
		}

	}
	public function pageConnexion()
	{
		$this->show('connexion/pageConnexion');
	}

}