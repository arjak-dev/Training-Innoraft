<?php
  //including the Blog class through autoloader
  require_once 'vendor/autoload.php';
  use Model\Blog;

  //starting the session to get the user id 
  // and checking the user is login on or not
  session_start();
  
  $page_no = 0;

  //Creating the instance of the BLog class
  $blog = new Blog("","","");

  //Get the page no. from the GET request for implementing pager
  if(isset($_GET['page_no'])) {
    $page_no = $_GET['page_no'];
    //checking the query string is valid or not 
    if (!ctype_digit($page_no)) {
      header('location: error');
    }
  } else {
    $page_no = 0;
  }
  
  
  //Preparing the value for the home View.
  $user_id = $_SESSION['code'];
  $result = $blog->getall($page_no);
  $count = $blog->countblog();
  $page_title = "Blogify";
  $time  = date('m/d/Y H:i', $row['time']);
  $row = $blog->getusername($user_id);
  
  //loading the view of the Home page 
  require_once('app/View/home.php');