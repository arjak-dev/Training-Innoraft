<?php
  include("../Blog.php");
  if(isset($_GET['q'])) {
    $q = $_GET['q'];
    $blog = new Blog(" ", " "," ");
    $blog->deleteblog($q);
    header('location:../UserBlog'); 

  }
  
?>