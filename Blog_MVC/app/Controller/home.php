<?php
  include('./app/Model/Blog.php');
  // include('../User.php');
  $page_no = 0;
  echo "$count";
  $blog = new Blog("","","");
  if(isset($_GET['page_no'])) {
    $page_no = $_GET['page_no'];
  } else {
    $page_no = 0;
  }
  $result = $blog->getall($page_no);
  $count = $blog->countblog();
?>