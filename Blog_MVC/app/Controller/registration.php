<?php
  include('app/Model/User.php');
  if(isset($_POST['submit'])){
    $user_name = $_POST['user_name'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_id = $_POST['email_id'];
    $phone_no = $_POST['phone_no'];
    $password = $_POST['password'];
    $new_user = new User($user_name, $first_name, $last_name, $email_id, $phone_no, $password);
    $result = $new_user->putdata($new_user);
    // print_r($result);
    if ($result == 'true') {
      header ('location: login');
    }else {
      $error = $result;
    }
  }

  ?>