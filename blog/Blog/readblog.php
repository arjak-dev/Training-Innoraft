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
  </head>
  <body>
    <div class="container">
      <h1>
        <?php
          echo $row['blog_title'];
        ?>
      </h1>
      <p>
        <?php
          echo $row['blog_body'];
        ?>
      </p>
    </div>
  </body>
</html>