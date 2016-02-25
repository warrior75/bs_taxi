<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\CourManager;
use \DateTime;

class FormateurController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function index()
	{
		$this->allowTo('formateur');
		$this->show('formateur/index');
	}

	public function addLesson(){
		//On autorise uniquement le formateur à ajouter un cour 
		$this->allowTo('formateur');
		if(isset($_POST['addLesson'])){
			//Récupération des données du formulaire
			$titre = trim(htmlentities($_POST['titre']));
			$theme_id = trim(htmlentities($_POST['theme_id']));
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
					'theme_id' => $theme_id,
					'text_body' => $text_body,
					'created_at' => $date->format('Y-m-s H:i:s')
				]); 

				debug($cours);
				die();

				if($cours){
					$_SESSION['message'] = "Cours ajouté avec succès";

				}else{
					$_SESSION['message'] = "Erreurs cours";
				}

				$this->redirectToRoute('formateur');

			}else{
				$this->show('formateur/index',['errors' => $errors]);
			}
		}


	}

	public function lessonForm(){
		//On autorise uniquement le formateur à accéder à la page d'ajout de cour 
		$this->allowTo('formateur');
		$this->show('formateur/lessonForm');
	}

}