<?php
  include('vendor/autoload.php');
  use Controller\UserController;

  $userController = new UserController();
  //getting the data from the Login page
  if(isset($_POST['submit'])){
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $status = $userController->checkuser($user_name, $password);
    //checking the credentials
    if($status){
      //starting the session and indicates that the user is logged in
      session_start();
      //setting a session variable code
      $_SESSION['code'] = $status;
      header('location: home');
    } else {
      header('location: login?error=1');
    }
  }
  //load the login view
  require_once('app/View/login.php');