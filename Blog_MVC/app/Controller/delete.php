<?php
  //includeing the BlogController by autoloader.
  include("vendor/autoload.php");
  use Controller\BlogController;

  //getting the id of the blog that is to be deleted.
  if(isset($_GET['q'])) {
    $blog_id = $_GET['q'];
    $blog_controller = new BlogController();
    $blog_controller->delete($blog_id);
    header('location: my blog'); 
  }
  