<?php
	require_once 'vendor/autoload.php';
	$google_client = new Google_Client();

	$google_client->setAuthConfig("/var/www/html/Training-Innoraft/Testing/credentials (1).json");
	$google_client->addScope("https://www.googleapis.com/auth/drive");
	$google_client->addScope('email');

	$google_client->addScope('profile');

	session_start();