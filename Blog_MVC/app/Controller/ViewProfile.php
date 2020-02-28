<?php
  include('vendor/autoload.php');
  use Controller\UserController;
  $userController = new UserController();
  //checking the user is logged in or not 
  session_start();
  $user_id = 0;
  if (isset($_SESSION['code'])) {
    $user_id  = $_SESSION['code'];
  } else {
    header('location:home');
  }

  $userdetails = $userController->provideuserdetails($user_id);
  $first_name = $userdetails['first_name'];
  $last_nmae = $userdetails['last_name'];
  $email_id = $userdetails["email_id"];
  $phone_no = $userdetails['phone_no'];
  $image = $userdetails['image'];

  //loading the View of the view Profile 
  require('app/View/viewprofile.php');