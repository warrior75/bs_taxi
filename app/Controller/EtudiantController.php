<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\CourManager;
use \Manager\MessageManager;
use \Manager\SessionManager;
use \Manager\ThemeManager;



class EtudiantController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function index($id = 0)
	{
		$this->allowTo('etudiant');

		// récupérer les données de la session utilisateur
		$loggedUser = $this->getUser();

		$courManager = New CourManager();
		$cour = $courManager->find($id);

		$messagesManager = new MessageManager();
		$messages = $messagesManager->getMessage();
		
		$this->show('etudiant/index',[
			'organisedThemes' => $this->getOrganisedThemes(),
			'cour' => $cour,
			'messages' => $messages,
			]);
	}

	public function cours($id) {
		$loggedUser = $this->getUser();
		$courManager = New CourManager();
		$cour = $courManager->find($id);
		
		$messagesManager = new MessageManager();
		$messages = $messagesManager->getMessage();
		
		//créer une session si elle n'existe pas
		$sessionManager = New SessionManager();
		
		if (!$sessionManager->findByUserIdAndCourID($loggedUser['id'],$id)) {
			// sinon on crée la session
				$sessionManager->insert([
						'cours_id'=>$id,
						'status' => 'in_progress',
						'users_id' => $loggedUser['id']
					]);
		}
		$this->show('etudiant/index',['cour' => $cour, 'organisedThemes' => $this->getOrganisedThemes() , 'messages' => $messages]);
	}

	public function validateCours($id){
		$loggedUser = $this->getUser();
		
		$messagesManager = new MessageManager();
		$messages = $messagesManager->getMessage();

		$courManager = New CourManager();
		$cour = $courManager->find($id);
		
		if ($cour){
			$sessionManager = New SessionManager();
			
			$sessionExist = $sessionManager->findByUserIdAndCourID($loggedUser['id'],$id);
			
			$sessionManager->update(['status' => 'validate'],$sessionExist['id']);
			
			$infos = "Votre cours a été validé avec succès";
			
			$this->show('etudiant/index',[
				'cour' => $cour, 
				'organisedThemes' => $this->getOrganisedThemes() , 
				'messages' => $messages,
				'infos' => $infos,
			]);

		} else {
			$this->showNotFound();
		}
	
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

