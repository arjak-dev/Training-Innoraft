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
    break;
    case 'login' :
      include(__DIR__."/app/View/login.php");
    break;
    case 'registration' :
      include(__DIR__."/app/View/registration.php");
    break;
    case 'view profile' :
      include(__DIR__."/app/View/viewprofile.php");
      break;
    case 'Edit Profile' :
      include(__DIR__."/app/View/editprofile.php");
      break;
    case 'my blog' :
      include(__DIR__."/app/View/my blog.php");
      break;
    case 'logout' :
      include(__DIR__."/app/Controller/logout.php");
      break;
    case 'add blog' :
      include(__DIR__."/app/View/add blog.php");
      break;
    case 'Delete' :
      include(__DIR__."/app/Controller/delete.php");
      break;
    case 'edit' :
      include(__DIR__."/app/View/edit blog.php");
      break;
    case 'edit blog' :
      include(__DIR__."/app/Controller/edit blog.php");
      break;
    default: echo "<h1>No Page Found</h1>";
  }
   