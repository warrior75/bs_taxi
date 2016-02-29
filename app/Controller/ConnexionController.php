<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\Manager;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \Manager\CourManager;
use \Manager\UtilisateurManager;
use \Manager\MessageManager;
use \Manager\SessionManager;
use \DateTime;

class ConnexionController extends Controller
{




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

					// créer
					$sessionManager = new SessionManager();
					$nbCoursValideTab = $sessionManager->nbCourParEtudiantValide($resultUser['id']);
					$nbCoursValide = $nbCoursValideTab['nbCourParEtudiantValide'];

					$courManager = New CourManager();
					$nbCoursTotalTab = $courManager->countCours();
					$nbCoursTotal = $nbCoursTotalTab[0]['nbCoursTotal'];

					if ($nbCoursValideTab) {
						$_SESSION['progress']=($nbCoursValide * 100)/$nbCoursTotal;
					} else {
						$_SESSION['progress'] = 0;
					}

			





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
		if(isset($_SESSION['user'])){
			$role = $_SESSION['user']['role'];
			$this->redirectToRoute($role);
		}
		
		$this->show('connexion/pageConnexion');
	}

	public function deconnexion(){
		$authentificationManager = new AuthentificationManager();
		$authentificationManager->logUserOut();
		// $this->show('default/home',['info' => 'Vous avez été déconnecté du service']);
		$_SESSION['message'] = 'Vous avez été déconnecté du service';
		$this->redirectToRoute('home');
	}

	public function resetPassword($id=0){

		if(isset($_POST['reset'])){
			$password = trim(htmlentities($_POST['password']));
			$confirmPassword = trim(htmlentities($_POST['confirmPassword']));

			// Initialisation d'un tableau d'erreurs
			$error = [];

			// Instanciation d'un objet de type userManager
			$userManager = new userManager();
			$userManager->setTable('users');

			//Test si les champs ne sont pas trop court 
			if(strlen($password) <= 6 ){
				$error['password'] = 'Le mot de passe est trop court (minimum 6 caractères)';
			}
			//Test si les mdp ne correspondent pas
			if($password != $confirmPassword){
				$error['password'] = 'Les mots de passes ne sont pas identiques';
			}

			if(empty($error)){
				// Récupération des infos utilisateur
				$loggedUser = $this->getUser();
				$password_hash = password_hash($password,PASSWORD_DEFAULT);
				$id = $loggedUser['id'];
				$resultUser = $userManager->update([
					'password' => $password_hash
				],$id);

				if($resultUser){


					$infos = "Le mot de passe a été changé avec succès";

					$role = $loggedUser['role'];


					if( $role === "admin"){
						
						$courManager = New CourManager();
						$cour = $courManager->find($id);

						$messagesManager = new MessageManager();
						$messages = $messagesManager->getMessage();
						$this->redirectToRoute('admin',['infos'=>$infos]);
					}

					if( $role === "formateur"){
		
						$courManager = New CourManager();
						$cour = $courManager->find($id);

						$messagesManager = new MessageManager();
						$messages = $messagesManager->getMessage();
						$this->redirectToRoute('formateur',['infos'=>$infos]);
					} 

					if( $role === "etudiant"){

						$courManager = New CourManager();
						$cour = $courManager->find($id);

						$messagesManager = new MessageManager();
						$messages = $messagesManager->getMessage();
						$this->redirectToRoute('etudiant',['infos'=>$infos]);
					} 
				}else{
					$this->showNotFound();
				}
			}else{

						$courManager = New CourManager();
						$cour = $courManager->find($id);

						$messagesManager = new MessageManager();
						$messages = $messagesManager->getMessage();
						$this->show('connexion/passwordForm',[
							'error' => $error,
							'cour' => $cour, 
							'organisedThemes' => $this->getOrganisedThemes(), 
							'messages' => $messages,
							]);
			}



		}
	}

	public function passwordForm($id=0){
		$courManager = New CourManager();
		$cour = $courManager->find($id);
		
		$messagesManager = new MessageManager();
		$messages = $messagesManager->getMessage();
		
		$this->show('connexion/passwordForm',
			[
				'cour' => $cour, 
				'organisedThemes' => $this->getOrganisedThemes() , 
				'messages' => $messages , 
			]);
	}

		private function getOrganisedThemes() {
		$courManager = New CourManager();
		$coursAndThemes =  $courManager->findThemeAndCours();

		$organisedThemes = [];

		foreach ($coursAndThemes as $key => $val) {

			$themeName = ucfirst($val['theme_name']);

			// Si la clé existe pas dans le tab $organisedThemes, je la crée
			if(!array_key_exists($themeName, $organisedThemes)) {
				$organisedThemes[$themeName] =  [];
			}

			// Ensuite j'insere les donnée du cours
			$organisedThemes[$themeName][] = [
				'title' => $val['title'],
				'text_body' => $val['text_body'],
				'id' => $val['id']
			];
		}

		return $organisedThemes;
	}

}