<?php
  if (isset($_GET['url'])) {
    $page = $_GET['url']; 
  } else {
    $page = 'home';
  }


  switch($page) {
    case 'home' :
      include(__DIR__."/app/View/home.php");
    break;
    case 'readblog' :
      include(__DIR__."/app/View/readblog.php");
      //echo $page;
    break;
    case 'login' :
      include(__DIR__."/app/View/login.php");
    break;
    case 'registration' :
      include(__DIR__."/app/View/registration.php");
  }
   