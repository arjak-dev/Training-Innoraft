<?php
  include('../User.php');
    session_start();
    if(isset($_SESSION['code'])) {
      $user_id = $_SESSION['code'];
    } else {
      header('location: ../Blog');
    }
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

          $allowed = array("jpg","jpeg","png");
          $fileActualExtension = strtolower(end($fileExtension));
        
          if(in_array($fileActualExtension,$allowed)){
            if ($fileError === 0) {
              $fileNewName = uniqid(rand(),true).".".$fileActualExtension;
              $fileDestination="../profile_picture/".$fileNewName;
              move_uploaded_file($fileTempName,$fileDestination);
              $img = $fileDestination;
            }
          } else {
              $img = ""; 
          }
        } else {
            $img = "";
        } 
      }
      // echo "$first_name";
      // echo "$last_name";
      // echo "$phone_no";
      $user = new User(" ", " ", " "," "," "," ");
      $user->updateuser($user_id, $first_name, $last_name, $email_id, $phone_no, $img);
      header('location: ../View Profile');
    }

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
    $last_name = $row['last_name'];
    $email_id = $row["email_id"];
    $phone_no = $row['phone_no'];