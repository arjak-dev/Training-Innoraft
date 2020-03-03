<?php
  require_once 'vendor/autoload.php';
  use Controller\UserController;
  session_start();
  $client = new Google_Client();
  $client->setAuthConfig('resources/credentials.json');

  $client->addScope("email");
  $client->addScope("profile");

  $redirect_uri = "http://localhost/Training-Innoraft/Blog_MVC/";
  $client->setRedirectUri($redirect_uri);
  $objOAuthService = new Google_Service_Oauth2($client);

  if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    $client->setAccessToken($_SESSION['access_token']);
  }
  if ($client->getAccessToken()) {
    $userData = $objOAuthService->userinfo->get();
    $_SESSION['access_token'] = $client->getAccessToken();
    $email = $userData['email'];
    $first_name = $userData["given_name"];
    $last_name = $userData['family_name'];
    $image = $userData['picture'];
    $userController = new UserController();
    $userController->googlelogin($first_name, $last_name, $image, $email);
    // session_unset();
    header('location: login');

  } else {
    $authUrl = $client->createAuthUrl();
    header('location:' . $authUrl);
  }