<?php
  session_start();

  if(isset($_POST['submit'])) {
    header('location: change password');
  }

  if(isset($_SESSION['user_name'])) {
    include('app/View/get_otp.php');
  } else {
    header('location: home');
  }