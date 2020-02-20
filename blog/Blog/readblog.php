<?php
  include('../Blog.php');
  if(isset($_GET['q'])){
    $q = $_GET['q'];
  }
  $blog =new Blog(" "," "," ");
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
        
          <?php
            session_start();
            if (isset($_SESSION['code'])) {
              echo "<li>";
              echo "<a href='../UserBlog' class='btn btn-secondary btn-sm'> My blogs </a>";
              echo "</li>";
              echo "<li>";
              echo "<a href='../Blog' class='btn btn-secondary btn-sm'>Home</a>";
              echo "</li>";
            } else {
              echo "<li>";
              echo "<a href='../Blog' class='btn btn-secondary btn-sm'>Home</a>";
              echo "</li>";  
            }
          ?>
          
        </li>
      </ul>
    </nav>
    <div class="container">
      <h1 class="read-heading">
        <?php
          echo $row['blog_title'];
        ?>
      </h1>
      <?php
      if ($row['image']) {
        echo "<img src=".$row['image'].">";
      }
      echo "<p class='read-body'>";
          echo $row['blog_body'];
      ?>
      </p>
    </div>
  </body>
</html>