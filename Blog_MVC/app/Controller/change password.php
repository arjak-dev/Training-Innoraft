<?php
  include('vendor/autoload.php');
  use Controller\UserController;
  session_start();
  if(isset($_POST['submit'])) {
    $new_password = $_POST['new_password'];
    $user_id = $_SESSION['code'];
    $user = new UserController();
    $result = $user->changepassword($user_id, $new_password);
    var_dump($result);
    header('location: home');
  }
  if(isset($_SESSION['code'])){
    include_once('app/View/change password.php');
  } else {
    header("location: home");
  }