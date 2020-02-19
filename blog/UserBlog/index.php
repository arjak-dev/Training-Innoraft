<?php
include('../Blog.php');
  
  session_start();
  if(!isset($_SESSION['code'])) {
    header('location: ../Blog');
  }
  $title ="";
  $blog_body = "";
  $user_id = $_SESSION['code'];
  if (isset($_POST['save'])) {
    $title = $_POST['title'];
    $blog_body = addslashes($_POST['blog-body']);
    $blog = new Blog($title, $blog_body);
    $result = $blog->putdata($user_id,$blog);
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      My Blogs
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
        <a href="../Blog" class="btn btn-secondary btn-sm"> Home </a>
          <a href="add_blog.php" class="btn btn-secondary btn-sm"> Add Blogs </a>
          <a href="../logout.php" class="btn btn-secondary btn-sm"> Logout </a>
        </li>
      </ul>
    </nav>
    <div class="container">
      <h3><?php echo "$result"; ?></h3>
      <?php
        $blog = new Blog("","");
        $result = $blog->getuserblog($user_id);
        if (mysqli_num_rows($result)) {
          while ($row = $result->fetch_assoc()) {
            $user_name = $blog->getusername($row['user_id']);
            $title = $row['blog_title'];
            $time  = date('m/d/Y H:i', $row['time']);
            echo "<a href = '../Blog/readblog.php?q=".$row['blog_id']."' class='blog-anchor'>";
              echo "<div class='card card-margin'>";
                echo "<div class='card-body'>";
                  echo "<h5 class='card-title'>$title</h5>";
                  echo "<footer class='blockquote-footer'>$user_name 
                       <cite title='Source Title'>$time</cite></footer>";
                  echo "<br>";
                  echo "<a href='../Edit?q=".$row['blog_id']."' class='btm-margin btn btn-primary'>Edit</a>";
                  echo "<a href='../Delete?q=".$row['blog_id']."' class='btm-margin btn btn-danger'>Delete</a>";
                  echo "</div>";
                echo "</div>";
              echo "</a>";  
            
          }
        } else {
          echo "<h3> No Blogs Present Till Date </h3>";
        }
      ?>  
    </div>
  </body>
</html>