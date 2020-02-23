<?php
  include('app/Model/Blog.php');
  if(isset($_GET['q'])){
    $q = $_GET['q'];
  }
  $blog =new Blog(" "," "," ");
  $result = $blog->getblogdetails($q);
  
  if ($result->num_rows) {
    $row = $result->fetch_assoc();
  }
?>