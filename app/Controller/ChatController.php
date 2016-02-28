<?php

namespace Controller;

use \W\Controller\Controller;
use  W\Manager\Manager;
use \Manager\MessageManager;
use \DateTime;

class ChatController extends Controller
{

	// Methode qui permet d'ajouter un message en bdd
	public function addMessage()
	{
		
			if(isset($_POST['sendMessage'])){

				// Création de mes variables 
				$text_body = trim(htmlentities($_POST['text_body']));
				$firstname = trim(htmlentities($_SESSION['user']['firstname'])); 
				$lastname = trim(htmlentities($_SESSION['user']['lastname'])); 

				//Initialisation d'un tableau d'erreurs vide
				$errors = [];

				// Instanciation d'un objet de type MessageManager
				$messagesManager = new MessageManager();

				// Je test s'il n'envoie pas un message vide
				if(empty($text_body)){
					$errors['text_body'] = "Veuillez saisir quelque chose";
				}
				
				// S'il n'y a pas d'erreurs, on insere le msg en bdd
				if(empty($errors)){
					$date = new DateTime();
					$resultUser = $messagesManager->insert([
						
						'firstname' => $firstname,
						'lastname' => $lastname,
						'text_body' => $text_body,
						'created_at' => $date->format('Y-m-d H:i'),

					]);
				$this->show('formateur/index',['errors' => $errors]);
				}
				
			}

		
	}

	// Methode qui permet de récupérer les 10 derniers messages et les afficher
	public function getMessages(){

		$messagesManager = new MessageManager();
		$messages = $messagesManager->showMessage();

		$this->show('formateur/index',['messages' => $messages]);
	}

}