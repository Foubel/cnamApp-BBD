<?php

	$app->get('/api/hello/{name}', 'hello');

	$app->options('/api/catalogue', 'optionsCatalogue' );

	// API Nécessitant un Jwt valide
	$app->get('/api/catalogue', 'getCatalogue');

	$app->options('/api/utilisateur', 'optionsUtilisateur');

	// API Nécessitant un Jwt valide
	$app->get('/api/utilisateur', 'getUtilisateur');

	// APi d'authentification générant un JWT
	$app->post('/api/utilisateur/login', 'postLogin');

	$app->post('/api/utilisateur/register', 'postRegister');

	$app->get('/{routes:.+}', function ($request, $response, $args) {
		return $response->write(file_get_contents(__DIR__ . 'index.html'));
	});
	


	
	

