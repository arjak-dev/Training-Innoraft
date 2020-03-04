<?php
  include('vendor/autoload.php');
  use Controller\UserController;
  use Controller\GoogleConfig;
  session_start();
  if ($_GET['code']) {
    $googleConfig = new GoogleConfig('http://localhost/Training-Innoraft/Blog_MVC/login');
    $client = $googleConfig->returnclient();
    $client->authenticate($_GET['code']);
    $_SESSION['access_token'] = $client->getAccessToken();
    // var_dump($_SESSION['access_token']);
    header('location: google login');
  }
  $userController = new UserController();
  //getting the data from the Login page
  if(isset($_POST['submit'])){
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $status = $userController->checkuser($user_name, $password);
    //checking the credentials
    if($status){
      //starting the session and indicates that the user is logged in      
      //setting a session variable code
      $_SESSION['code'] = $status;
      header('location: home');
    } else {
      header('location: login?error=1');
    }
  }
  
  //load the login view
  if(isset($_SESSION['code'])) {
    header('location: home');
  } else {
    require_once('app/View/login.php');
  }