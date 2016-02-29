<?php

namespace Controller;

use \W\Manager\Manager;
use \W\Controller\Controller;
use \W\Security\AuthentificationManager;
use \W\Manager\UserManager;
use \DateTime;
use \PHPMailer;
use \Manager\CourManager;
use \Manager\MessageManager;
use \Manager\UtilisateurManager;
use \Manager\SessionManager;



class AdminController extends Controller
{

	/**
	 * Page accessible uniquement pour les admin
	 */
	public function index($id = 0)
	{
		$this->allowTo('admin');
		

		$userManager = New UtilisateurManager();
		$etudiant = $userManager->findEleve();

			$courManager = New CourManager();
			$cour = $courManager->find($id);
			$nbCoursTotalTab = $courManager->countCours();
			$nbCoursTotal = $nbCoursTotalTab[0]['nbCoursTotal'];


		$messagesManager = new MessageManager();
		$messages = $messagesManager->getMessage();

		$summaryCours = [];

		foreach ($etudiant as $value) {

			$sessionManager = new SessionManager();
			$nbCoursValide = $sessionManager->nbCourParEtudiantValide($value['id']);
			$summaryCours[$value['id']]= [
					'etudiant' => $value,
					'nbCoursValide' =>$nbCoursValide['nbCourParEtudiantValide'],
				];
		}

		$userFormateur = New UtilisateurManager();
		$formateur = $userFormateur->findFormateur();



		
		$this->show('admin/index',[
			'organisedThemes' => $this->getOrganisedThemes(),
			'cour' => $cour,
			'etudiant' => $etudiant,
			'formateur' => $formateur,
			'messages' => $messages,
			'nbCoursTotal' => $nbCoursTotal,
			'summaryCours' => $summaryCours

			]);
	}

	// fonction privée qui génére un mdp aléatoire
	private function random_password( $length = 8 ){ 
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?"; 
		$password = substr( str_shuffle( $chars ), 0, $length ); 
		return $password;
	}



	// Traitement du formulaire d'inscription
	public function register($id = 0){
		if(isset($_POST['addUser'])){
				// Création de mes variables
				$firstname = trim(htmlentities($_POST['firstname']));
				$lastname = trim(htmlentities($_POST['lastname']));
				$email = trim(htmlentities($_POST['email']));
				$password = $this->random_password();
				$password_hash = password_hash($password,PASSWORD_DEFAULT); 
				$role = trim(htmlentities($_POST['role']));
				$phone = trim(htmlentities($_POST['phone']));

				//Initialisation d'un tableau d'erreurs vide
				$errors = [];

				// Instanciation d'un objet de type UseManager

				$userManager = new UserManager();

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
						'phone' => $phone,
						'created_at' => $date->format('Y-m-d H:i:s'),
						'updated_at' => $date->format('Y-m-d H:i:s')
					]);
					$infos = " Inscription réussie <br> Identifiant: $email <br> Mot de passe : $password ";
					$courManager = New CourManager();
					$cour = $courManager->find($id);

					$messagesManager = new MessageManager();
					$messages = $messagesManager->getMessage();
					$this->show('admin/inscription',[
						'infos' => $infos,
						'cour' => $cour, 
						'organisedThemes' => $this->getOrganisedThemes() , 
						'messages' => $messages , 
						]);
	 
				}

			}
		}	
	// Affiche la page du formulaire d'inscription
	public function inscription($id){

		$courManager = New CourManager();
		$cour = $courManager->find($id);

		$userManager = New UtilisateurManager();
		$etudiant = $userManager->findEleve();

		$userFormateur = New UtilisateurManager();
		$formateur = $userFormateur->findFormateur();

		$messagesManager = new MessageManager();
		$messages = $messagesManager->getMessage();
		$this->show('admin/inscription',[
			'cour' => $cour, 
			'organisedThemes' => $this->getOrganisedThemes() , 
			'messages' => $messages , 
			'etudiant' => $etudiant ,
			'formateur'=> $formateur]);

	}

	// gestion des des cours et themes
		public function cours($id) {

		$courManager = New CourManager();
		$cour = $courManager->find($id);
		$nbCoursTotalTab = $courManager->countCours();
		$nbCoursTotal = $nbCoursTotalTab[0]['nbCoursTotal'];

		$userManager = New UtilisateurManager();
		$etudiant = $userManager->findEleve();

		$messagesManager = new MessageManager();
		$messages = $messagesManager->getMessage();

		
		$sessionManager = new SessionManager();
		$nbCoursValideTab = $sessionManager->nbCourParEtudiantValide();
		
		$nbCoursValide = $nbCoursValideTab[0]['nbCourParEtudiantValide'];
		$nbCoursProgressTab = $sessionManager->nbCourParEtudiantProgress();
		
		$nbCoursProgress = $nbCoursProgressTab[0]['nbCourParEtudiantProgress'];
		$nbCoursInvalide = $nbCoursTotal-($nbCoursProgress+$nbCoursValide);

		$this->show('admin/index',[
			'cour' => $cour, 
			'organisedThemes' => $this->getOrganisedThemes() , 
			'messages' => $messages , 
			'etudiant' => $etudiant,
			'nbCoursTotal' => $nbCoursTotal,
			'nbCoursValide' => $nbCoursValide,
			'nbCoursProgress' => $nbCoursProgress,
			'nbCoursInvalide' => $nbCoursInvalide
			
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