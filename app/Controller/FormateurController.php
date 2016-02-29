<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\CourManager;
use \Manager\UtilisateurManager;
use W\Manager\UserManager;
use \Manager\MessageManager;
use \Manager\SessionManager;
use \DateTime;

class FormateurController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function index($id =0)
	{
		$this->allowTo('formateur');

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



		
		$this->show('formateur/index',[
			'organisedThemes' => $this->getOrganisedThemes(),
			'cour' => $cour,
			'etudiant' => $etudiant,
			'messages' => $messages,
			'nbCoursTotal' => $nbCoursTotal,
			'summaryCours' => $summaryCours

			]);

	}

	public function addLesson(){
		//On autorise uniquement le formateur à ajouter un cour 
		$this->allowTo('formateur');
		if(isset($_POST['addLesson'])){
			//Récupération des données du formulaire
			$titre = trim(htmlentities($_POST['titre']));
			$themes_id = trim(htmlentities($_POST['themes_id']));
			$text_body = trim(htmlentities($_POST['text_body']));

			// Initialisation d'un tableau d'erreurs 
			$errors = [];

			if(empty($titre) || empty($theme_id) || empty($text_body)){
				$errors['vide'] = "Un des champs n'est pas renseigné";
				
			}

			if(empty($errors)){
				$date = new DateTime();
				$coursManager = new CourManager();

				
				$cours = $coursManager->insert([
					'title' => $titre,
					'themes_id' => $themes_id,
					'text_body' => $text_body,
					'created_at' => $date->format('Y-m-s H:i:s')
				]); 

				if($cours){
					$_SESSION['message'] = "Cours ajouté avec succès";

				}else{
					$_SESSION['message'] = "Erreurs cours";
				}

				$this->redirectToRoute('formateur');

			}else{
				$this->show('formateur/index',['cour' => $cour, 'organisedThemes' => $this->getOrganisedThemes()]);
			}
		}


	}

	public function lessonForm($id=0){
		//On autorise uniquement le formateur à accéder à la page d'ajout de cour 
		$this->allowTo('formateur');
		$courManager = New CourManager();
		$cour = $courManager->find($id);
		$messagesManager = new MessageManager();
		$messages = $messagesManager->getMessage();
		$this->show('formateur/lessonForm',[
			'cour' => $cour, 
			'organisedThemes' => $this->getOrganisedThemes(), 
			'messages' => $messages, 

			]);
	}

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

		$this->show('formateur/index',[
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