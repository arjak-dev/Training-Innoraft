<?php
  include('../Model/User.php');
  if(isset($_POST['submit'])){
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $status = (new User('a','a','a','a','a','a'))->checkuser($user_name, $password);
    if($status){
      session_start();
      $_SESSION['code'] = $status;
      echo $status;
      header('location: ../../home');
    } else {
      header('location: ../../login?error=1');
    }
  }
  ?>