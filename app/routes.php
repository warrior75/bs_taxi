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


	);