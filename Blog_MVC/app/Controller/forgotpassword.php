<?php
  include('vendor/autoload.php');
  use Controller\Mailer;
  session_start();
  new Mailer();
  if(isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $_SESSION['user_name'] = $user_name;
    header('location: otp check');
  }

  if(!isset($_SESSION['code'])) {
    include('app/View/enter_user_name.php');
  } else {
    header("location: home");
  }