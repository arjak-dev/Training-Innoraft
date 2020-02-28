<?php
  include('vendor/autoload.php');
  use Model\Blog;
  //starting the session for checking whether the user is logged in or not 
  session_start();

  //getting the blog id from the get request
  if(isset($_GET['q'])){
    $q = $_GET['q'];
  }
  //creating the blog instance
  $blog =new Blog(" "," "," ");
  $result = $blog->getblogdetails($q);
  
  //show the result if the no. of rows is more then 0
  if ($result->num_rows) {
    $row = $result->fetch_assoc();
  }
  
  // loading the read blog view 
  require_once('app/View/readblog.php');
?>