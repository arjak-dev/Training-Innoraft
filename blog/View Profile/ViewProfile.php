<?php
  include('../User.php');
  $user = new User(" ", " ", " ", " ", " ", " ");
  session_start();
  if (isset($_SESSION['code'])) {
    $user_id  = $_SESSION['code'];
  } else {
    header('location:../Blog');
  }
  $result = $user->getuserdetails($user_id);
  $row = $result->fetch_assoc();
    $first_name = $row['first_name'];
    $last_nmae = $row['last_name'];
    $email_id = $row["email_id"];
    $phone_no = $row['phone_no'];