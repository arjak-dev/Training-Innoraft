<?php
  include('vendor/autoload.php');
  //using the User controller class
  use Controller\UserController;
  session_start();

  //Getting the data from the view
  if(isset($_POST['submit'])) {
    $new_password = $_POST['new_password'];
    $user_id = $_SESSION['code'];
    $user = new UserController();
    $result = $user->changepassword($user_id, $new_password);
    header('location: home');
  }

  //checking if the user is logged in or not
  if(isset($_SESSION['code'])){
    include_once('app/View/change password.php');
  } else {
    header("location: home");
  }