<?php
  include('vendor/autoload.php');
  use Model\Blog;
  if (isset($_GET['q'])) {
  }
if (isset($_POST['save'])) {
      $title = addslashes($_POST['title']);
      $body = addslashes($_POST['blog-body']);
      $blog_id = $_GET['q'];
      $blog = new Blog(" ", " "," ");
      // echo "$title";
      // echo "$blog_id";
      // echo "$body";
      $blog->updateblog ($blog_id, $title,$body);
      header('location: my blog');
      echo "success";
}

if (isset($_GET['q'])) {
    $q = $_GET['q'];
  }
  $blog = new Blog(" ", " "," ");
  $result = $blog->getblogdetails($q);
  $row = $result->fetch_assoc();