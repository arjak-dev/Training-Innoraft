<?php
  include('vendor/autoload.php');
  use Model\Blog;
  session_start();
  $page_no = 0;
  // echo "$count";
  $blog = new Blog("","","");
  if(isset($_GET['page_no'])) {
    $page_no = $_GET['page_no'];
  } else {
    $page_no = 0;
  }
  $user_id = $_SESSION['code'];
  $result = $blog->getall($page_no);
  $count = $blog->countblog();
  $page_title = "Blogify";
  $time  = date('m/d/Y H:i', $row['time']);
  $row = $blog->getusername($user_id);
  echo "$title";
  require_once('app/View/home.php');
?>