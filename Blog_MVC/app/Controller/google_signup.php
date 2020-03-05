<?php
  include('vendor/autoload.php');
  use Controller\GoogleConfig;
  use Controller\UserController;
  session_start();
  $googleConfig = new GoogleConfig('http://localhost/Training-Innoraft/Blog_MVC/registration');
  $authUrl = $googleConfig->createauthurl();
  $client = $googleConfig->returnclient();
  $objOAuthService = $googleConfig->getserviceOauth2();

  if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    $client->setAccessToken($_SESSION['access_token']);
  }

  if ($client->getAccessToken()) {
    $userData = $objOAuthService->userinfo->get();
    $_SESSION['access_token'] = $client->getAccessToken();
    $userController = new UserController();
    $userController->googlesignup($userData);
    header('location: home');
   } else {
    header('location:' . $authUrl);
  }