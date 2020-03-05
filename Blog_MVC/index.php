<?php
  if (isset($_GET['url'])) {
    $page = $_GET['url']; 
  } else {
    $page = 'home';
  }

  switch($page) {
    case 'home' :
      include(__DIR__."/app/Controller/home.php");
    break;

    case 'read' :
      include(__DIR__."/app/Controller/read.php");
    break;

    case 'login' :
      include(__DIR__."/app/Controller/login.php");
    break;

    case 'login?error' :
      include(__DIR__."/app/Controller/login.php");
    break;

    case 'registration' :
      include(__DIR__."/app/Controller/registration.php");
    break;

    case 'view profile' :
      include(__DIR__."/app/Controller/ViewProfile.php");
    break;

    case 'Edit Profile' :
      include(__DIR__."/app/Controller/edit_profile.php");
    break;

    case 'my blog' :
      include(__DIR__."/app/Controller/my blog.php");
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
      include(__DIR__."/app/Controller/edit blog.php");
    break;

    case 'edit blog' :
      include(__DIR__."/app/Controller/edit blog.php");
    break;

    case 'regvalid' :
      include(__DIR__."/app/Controller/regvalid.php");
    break;
    
    case 'google signup':
      include(__DIR__ . "/app/Controller/google_signup.php");
    break;

    case 'google login':
      include(__DIR__ . "/app/Controller/google_login.php");
    break;

    case 'change password':
      include(__DIR__ . "/app/Controller/change password.php");
    break;

    default: include(__DIR__."/app/View/Page_not_found.php");
  }
   