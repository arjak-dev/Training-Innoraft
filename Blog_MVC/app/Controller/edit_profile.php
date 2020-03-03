<?php
  //including the autoloading class 
  include('vendor/autoload.php');
  use Controller\UserController;

  //creating the instance of the user class 
  $usercontroller = new UserController();

  //Checking the user is already logged in or not.
  session_start();
  if(isset($_SESSION['code'])) {
    $user_id = $_SESSION['code'];
  } else {
    header('location: ../Blog');
  }

  //getting the user data which is to be updated from the View form
  if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_no = $_POST['phone_no'];
    $email_id = $_POST['email_id'];
    $img = "";
      if (isset($_FILES['file'])) {
      $file = $_FILES["file"];
      if($file['name'] != NULL){
        $fileName = $file['name'];
        $fileTempName = $file['tmp_name'];
        $fileType = $file['type'];
        $fileError = $file['error'];
        $fileExtension = explode('.',$fileName);
        $img = $usercontroller->profilepicupload(
          $fileName,
          $fileTempName,
          $fileType,
          $fileError,
          $fileExtension
        );
      } else {
          $img = "";
      } 
    }
    
    //passing the data to the UserController class to handle the updatation 
    // process
    $usercontroller->updatedata($user_id, $first_name, $last_name, $email_id, 
    $phone_no, $img);
    header('location: view profile');
  }

  //getting the data to be displayed in the view
  $userdetails = $usercontroller->provideuserdetails($user_id);
  $first_name = $userdetails['first_name'];
  $last_name = $userdetails['last_name'];
  $email_id = $userdetails["email_id"];
  $phone_no = $userdetails['phone_no'];
  
  //loading the view of the edit profile
  require_once('app/View/editprofile.php');