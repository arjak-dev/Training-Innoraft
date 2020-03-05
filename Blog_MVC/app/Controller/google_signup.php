<?php
  include('vendor/autoload.php');
  // using the classes
  use Controller\GoogleConfig;
  use Controller\UserController;

  //starting the session to get the access token
  session_start();
  $googleConfig = new GoogleConfig('http://localhost/Training-Innoraft/Blog_MVC/registration');
  $authUrl = $googleConfig->createauthurl();
  $client = $googleConfig->returnclient();
  $objOAuthService = $googleConfig->getserviceOauth2();
  
  //getting the access token
  if (isset($_SESSION['access_token']) && $_SESSION['access_token'] != NULL) {
    $client->setAccessToken($_SESSION['access_token']);
    session_unset();
  }

  //sending the data to the UserController
  if ($client->getAccessToken()) {
    $userData = $objOAuthService->userinfo->get();
    $userController = new UserController();
    $userController->googlesignup($userData);
    header('location: home');
   } else {
    header('location:' . $authUrl);
  }