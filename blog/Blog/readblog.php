<?php
  include('../Blog.php');
  if(isset($_GET['q'])){
    $q = $_GET['q'];
  }
  $blog =new Blog(" "," ");
  $result = $blog->getblogdetails($q);
  
  if ($result->num_rows) {
    $row = $result->fetch_assoc();
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Read Blog
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
  </head>
  <body>
    <nav class="navbar navbar-expand-mg bg-dark navbar-dark">
      <a class= "navbar-brand logo-color" href="">Blogify</a>
      <ul class='display-ul'>
        <li>
          <a href="../UserBlog" class="btn btn-secondary btn-sm"> Blogs </a>
        </li>
      </ul>
    </nav>
    <div class="container">
      <h1 class="read-heading">
        <?php
          echo $row['blog_title'];
        ?>
      </h1>
      <p class="read-body">
        <?php
          echo $row['blog_body'];
        ?>
      </p>
    </div>
  </body>
</html>