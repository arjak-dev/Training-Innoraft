<?php
  include('vendor/autoload.php');
  
  //Using the classes
  use Controller\GoogleConfig;
  use Controller\UserController;
  
  //starting the seesion to get the access token
  session_start();

  //getting the google client objects
  $googleConfig = new GoogleConfig('http://localhost/Training-Innoraft/Blog_MVC/login');
  $authUrl = $googleConfig->createauthurl();
  $client = $googleConfig->returnclient();
  $objOAuthService = $googleConfig->getserviceOauth2();

  //getting the session token
  if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    $client->setAccessToken($_SESSION['access_token']);
    session_unset();
  }

  //send the value to the user Controller
  if ($client->getAccessToken()) {
    $userData = $objOAuthService->userinfo->get();
    $userController = new UserController();
    $user_id = $userController->googlelogin($userData);
    if($user_id) {
      $_SESSION['code'] = $user_id;
    }
    header('location: home');
  } else {
    header('location:' . $authUrl);
  }