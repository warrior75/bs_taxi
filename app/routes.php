<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['POST', '/formConnexion', 'Connexion#index', 'formConnexion'],
		['GET', '/connexion', 'Connexion#pageConnexion', 'connexion'],
		['GET', '/admin', 'Admin#index', 'admin'],
		['POST', '/admin/register', 'Admin#register', 'register'],
		['GET', '/admin/inscription', 'Admin#inscription', 'inscription'],
		['GET', '/etudiant', 'etudiant#index', 'etudiant'],
		['GET', '/formateur', 'formateur#index', 'formateur'],
		['GET', '/deconnexion', 'Connexion#deconnexion', 'deconnexion'],
		['POST', '/resetPassword', 'Connexion#resetPassword', 'resetPassword'],
		['GET', '/passwordForm', 'Connexion#passwordForm', 'passwordForm'],
		['POST', '/addLesson', 'Formateur#addLesson', 'addLesson'],
		['GET', '/lessonForm/[:id]', 'Formateur#lessonForm', 'lessonForm'],
		
		['GET', '/etudiant/[:id]', 'Etudiant#cours', 'etudiantCours'],
		['GET', '/formateur/[:id]', 'Formateur#cours', 'formateurCours'],
		['GET', '/admin/[:id]', 'Admin#cours', 'adminCours'],
		['POST', '/session', 'Etudiant#session', 'session'],
		['POST', '/chat', 'Chat#addMessage', 'chat'],

		

	);