<?php  
  include('vendor/autoload.php');
  use Model\Blog;
  
  //Checking the user is logged in or not 
  session_start();
  if(!isset($_SESSION['code'])) {
    header('location: home');
  }  

  //getting the data from the add blog page
  $title ="";
  $blog_body = "";
  $user_id = $_SESSION['code'];
  $img = "";
  if (isset($_POST['save'])) {
    $title = addslashes($_POST['title']);
    $title = htmlspecialchars($title);
    $blog_body = addslashes($_POST['blog-body']);
    $blog_body = htmlspecialchars($blog_body);
    if (isset($_FILES['file'])) {
      $file = $_FILES["file"];
      if($file['name'] != NULL){
        $fileName = $file['name'];
        $fileTempName = $file['tmp_name'];
        $fileType = $file['type'];
        $fileError = $file['error'];
        $img = $blogController->blogimageupload(
          $fileName,
          $fileTempName,
          $fileType,
          $fileError
        );
      } else {
        $img = "";
      }
    }

    //savaing the data in the Blog database.
    $blog = new Blog($title, $blog_body, $img);
    $result = $blog->putdata($user_id,$blog);
  }
  
  //preparing the data for the My Blog view page.
  $user_id = $_SESSION['code']; 
  $blog = new Blog(" "," "," "," "," "," "); 
  $row = $blog->getusername($user_id);
  $result = $blog->getuserblog($user_id);
  $time  = date('m/d/Y H:i', $row['time']);

  //Loading the My blog View. 
  require_once('app/View/my blog.php');