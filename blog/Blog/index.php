<?php
  include('../Blog.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Bloggy
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <?php
      session_start();
      // session_unset();
      if (isset($_SESSION['code'])){
        echo "<nav class='navbar navbar-expand-mg bg-dark navbar-dark'>";
          echo "<a class='navbar-brand logo-color' href=''>Bloggy</a>";
          echo "<ul class='display-ul'>";
            echo "<li class='nav-item'>";
              echo "<a class='btn btn-primary btn-sm' href='../UserBlog'>My Blog</a>";
            echo "</li>";
            echo "<li class='nav-item'>";
              echo "<a class='btn btn-secondary btn-sm' href='../logout.php'>Logout</a>";
            echo "</li>";
        echo "</ul></nav>";
      } else {
        echo "<nav class='navbar navbar-expand-mg bg-dark navbar-dark fixed-top'>";
        echo "<a class='navbar-brand logo-color' href=''>Bloggy</a>";
        echo "<ul class='display-ul'>";
          echo "<li class='nav-item'>";
            echo "<a class='btn btn-primary btn-sm' href='../Login'>Login</a>";
          echo "</li>";
          echo "<li class='nav-item'>";
            echo "<a class='btn btn-secondary btn-sm' href='../Registration'>Register</a>";
          echo "</li>";
        echo "</ul></nav>";
      }
    ?>
    <div class="container">
    <?php
        $blog = new Blog("","");
        $result = $blog->getall();
        if (mysqli_num_rows($result)) {
          while ($row = $result->fetch_assoc()) {
            $user_name = $blog->getusername($row['user_id']);
            $title = $row['blog_title'];
            $time  = date('m/d/Y H:i', $row['time']);
            echo "<a href = '../Blog/readblog.php?q=".$row['blog_id']."' class= 'blog-anchor'>";
                echo "<div class='card card-margin'>";
                echo "<div class='card-body'>";
                  echo "<h5 class='card-title'>$title</h5>";
                  echo "<footer class='blockquote-footer'>$user_name 
                  <cite title='Source Title'>$time</cite></footer>";
                  echo "<br>";
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