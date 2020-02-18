<?php
  include('../Blog.php');
  if (isset($_GET['q'])) {
    
      echo $_GET['q'];
  }
if (isset($_POST['save'])) {
      $title = $_POST['title'];
      $body = $_POST['blog-body'];
      $blog_id = $_GET['q'];
      $blog = new Blog(" ", " ");
      $blog->updateblog ($blog_id, $title,$body);
      header('location:../UserBlog');
}


