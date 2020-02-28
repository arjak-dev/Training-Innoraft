<?php
  include("vendor/autoload.php");
  use Controller\BlogController;
  if(isset($_GET['q'])) {
    $q = $_GET['q'];
    $blog_controller = new BlogController();
    $blog_controller->delete($q);
    header('location: my blog'); 
  }
  
?>