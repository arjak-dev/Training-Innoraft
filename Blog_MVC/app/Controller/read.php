<?php
  include('vendor/autoload.php');
  use Model\Blog;
  if(isset($_GET['q'])){
    $q = $_GET['q'];
  }
  $blog =new Blog(" "," "," ");
  $result = $blog->getblogdetails($q);
  
  if ($result->num_rows) {
    $row = $result->fetch_assoc();
  }
?>