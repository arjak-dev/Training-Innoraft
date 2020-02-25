<?php  
  include('vendor/autoload.php');
  use Model\Blog;
  session_start();
  if(!isset($_SESSION['code'])) {
    header('location: home');
  }  
  session_start();
  if(!isset($_SESSION['code'])) {
    header('location: home');
  }
  $title ="";
  $blog_body = "";
  $user_id = $_SESSION['code'];
  $img = "";
  if (isset($_POST['save'])) {
    $title = addslashes($_POST['title']);
    $blog_body = addslashes($_POST['blog-body']);
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
                $fileDestination="upload/".$fileNewName;
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
    $blog = new Blog($title, $blog_body, $img);
    $result = $blog->putdata($user_id,$blog);
  }
  
  $user_id = $_SESSION['code']; 
  $blog = new Blog(" "," "," "," "," "," "); 
  $row = $blog->getusername($user_id);
  $result = $blog->getuserblog($user_id);
  $time  = date('m/d/Y H:i', $row['time']);
  require_once('app/View/my blog.php');

?>