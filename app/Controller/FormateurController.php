<?php

namespace Controller;

use \W\Controller\Controller;

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
			
		}


	}

	public function lessonForm(){
		//On autorise uniquement le formateur à accéder à la page d'ajout de cour 
		$this->allowTo('formateur');
		$this->show('formateur/lessonForm');
	}

}