<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;

class ConnexionController extends Controller
{


// connexion à la base de données
protected $dbh;

	// Traitement du formulaire de connexion
	public function index(){

		if(isset($_POST['action'])){

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

					// Récupère le role de l'utilisateur 
					$query = $dbh->prepare('SELECT role FROM users WHERE email = :email');
					$query->bindValue(':email',$email,PDO::PARAM_STR);
					$query->execute();
					$role = $query->fetch();


					// Teste le role du user

					if( $role === "admin"){

						$this->show('connexion/admin');
					}elseif($role === "formateur"){
						$authentificationManager->logUserIn($resultUser);
						$this->show('connexion/formateur');
					}elseif($role === "etudiant"){

						$this->show('connexion/etudiant');
					}



				}else{
					$error['password'] = "Erreur de mot de passe";
				}

			}else {
				$error['email'] = "Erreur d'email";
			}
		}

	}

}