<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['POST', '/', 'Default#mail', 'mail'],
		['POST', '/formConnexion', 'Connexion#index', 'formConnexion'],
		['GET', '/connexion', 'Connexion#pageConnexion', 'connexion'],
		['GET', '/admin/[:id]', 'Admin#index', 'admin'],
		['POST', '/admin/register/[:id]', 'Admin#register', 'register'],
		['GET', '/admin/inscription/[:id]', 'Admin#inscription', 'inscription'],
		['GET', '/etudiant', 'etudiant#index', 'etudiant'],
		['GET', '/formateur/[:id]', 'formateur#index', 'formateur'],
		['GET', '/deconnexion', 'Connexion#deconnexion', 'deconnexion'],
		['POST', '/resetPassword/[:id]', 'Connexion#resetPassword', 'resetPassword'],
		['GET', '/passwordForm', 'Connexion#passwordForm', 'passwordForm'],
		['POST', '/addLesson', 'Formateur#addLesson', 'addLesson'],
		['GET', '/lessonForm/[:id]', 'Formateur#lessonForm', 'lessonForm'],
		
		['GET', '/etudiant/[:id]', 'Etudiant#cours', 'etudiantCours'],
		['GET', '/etudiantValidateCours/[:id]', 'Etudiant#validateCours', 'etudiantValidateCours'],
		['GET', '/formateur/[:id]', 'Formateur#cours', 'formateurCours'],
		['GET', '/admin/[:id]', 'Admin#cours', 'adminCours'],
		['POST', '/session', 'Etudiant#session', 'session'],
		['POST', '/chat', 'Chat#addMessage', 'chat'],
		['GET', '/delete/[:id]', 'Admin#delete', 'delete'],

		

	);