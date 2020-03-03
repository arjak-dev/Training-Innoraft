<?php
    include('vendor/autoload.php');
    use Model\User;
     if(isset($_POST['user_name'])){
      $user_name = $_POST['user_name'];
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $email_id = $_POST['email_id'];
      $phone_no = $_POST['phone_no'];
      $password = $_POST['password'];
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
                $fileDestination="profile_picture/".$fileNewName;
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
      $new_user = new User($user_name, $first_name, $last_name, $email_id, $phone_no, $password);
    $result = $new_user->putdata($new_user,$img);
    // $result = "true";
     echo json_encode(
        [
          "error" => $result
        ]);

     
    } 
   
    