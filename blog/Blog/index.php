<?php
  include('../Blog.php');
  // include('../User.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Blogify
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php
      session_start();
      // session_unset();
      if (isset($_SESSION['code'])){
        echo "<nav class='navbar navbar-expand-mg bg-dark navbar-dark'>";
          echo "<a class='navbar-brand logo-color' href=''>Blogify</a>";
          echo "<ul class='display-ul'>";
            echo "<li class='nav-item'>";
              echo "<a class='btn btn-primary btn-sm' href='../UserBlog'>My Blog</a>";
            echo "</li>";
            echo "<li class='nav-item'>";
              echo "<div class='dropdown'>";
                echo "<button class='btn btn-secondary dropdown-toggle btn-sm' type='button' id='dropdownMenu2' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
                  $user_id = $_SESSION['code'];  
                  $blog = new Blog(" "," "," "," "," "," "); 
                  $row = $blog->getusername($user_id);
                  echo "<img class='profile-img' src='".$row['image']."'>";
                  echo "  ".$row['first_name']." ".$row['last_name']; 
                echo "</button>";
                echo "<div class='dropdown-menu dropdown-div' aria-labelledby='dropdownMenu2'>";
                  echo "<a class='dropdown-item' type='button' href='../View Profile'>View Profile</a>";
                  echo "<a class='dropdown-item' href='../logout.php' type='button'>Logout</a>";
                echo "</div>";
                echo "</div>";
            echo "</li>";
        echo "</ul></nav>";
      } else {
        echo "<nav class='navbar navbar-expand-mg bg-dark navbar-dark'>";
        echo "<a class='logo-color' href=''>Blogify</a>";
        echo "<ul class='display-ul'>";
          echo "<li class='nav-item'>";
            echo "<a class='btn btn-primary btn-sm' href='../Login'>Sign in</a>";
          echo "</li>";
          echo "<li class='nav-item'>";
            echo "<a class='btn btn-secondary btn-sm' href='../Registration'>Sign up</a>";
          echo "</li>";
        echo "</ul></nav>";
      }
    ?>
    <div class="banner">
      <h1>Convert your thinking
        <br> into blogs</h1>
    </div>
    <div class="container">
    <h3 class="read-blog">Read Blogs</h3>
    <?php
        $blog = new Blog("","","");
        $result = $blog->getall();
        if ($result->num_rows > 0) {
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