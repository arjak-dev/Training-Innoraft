<?php
  include("vendor/autoload.php");
  use Model\Blog;
  if(isset($_GET['q'])) {
    $q = $_GET['q'];
    $blog = new Blog(" ", " "," ");
    $blog->deleteblog($q);
    header('location: my blog'); 
  }
  
?>