<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\CourManager;
use \Manager\ThemeManager;


class EtudiantController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function index()
	{
		$this->allowTo('etudiant');

		// récupérer les données de la session utilisateur
		$loggedUser = $this->getUser();


		$this->show('etudiant/index', ['organisedThemes' => $this->getOrganisedThemes()]);
	}

	public function cours($id) {

		$courManager = New CourManager();
		$cour = $courManager->find($id);

		$this->show('etudiant/index',['cour' => $cour]);

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

