<?php
  include_once('./app/Controller/home.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Blogify
    </title>
  
    <!-- <link rel = "icon" type = "image/png" href = "../title_logos/icons8-home-64.png"> -->
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="css/style.css"  rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="Script/core.js" type="text/javascript" charset="utf-8" async defer></script>
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
            echo "<li class='nav-item profile-li'>";
              echo "<div class='dropdown'>";
                echo "<button class='btn btn-secondary dropdown-toggle btn-sm' type='button' id='dropdownMenu2' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
                  $user_id = $_SESSION['code'];  
                  $blog = new Blog(" "," "," "," "," "," "); 
                  $row = $blog->getusername($user_id);
                  if ($row['image'] == NULL) {
                    echo "<img class='profile-img' src='../dummy-image.jpg'>";
                  } else {
                    echo "<img class='profile-img' src='".$row['image']."'>";
                  }
                  echo "  ".$row['first_name']." ".$row['last_name']; 
                echo "</button>";
                echo "<div class='dropdown-menu dropdown-div' aria-labelledby='dropdownMenu2'>";
                  echo "<a class='dropdown-item' type='button' href='../View Profile'>View Profile</a>";
                  echo "<a class='dropdown-item' href='app/Controller/logout.php' type='button'>Logout</a>";
                echo "</div>";
                echo "</div>";
            echo "</li>";
        echo "</ul></nav>";
      } else {
        echo "<nav class='navbar navbar-expand-mg bg-dark navbar-dark'>";
        echo "<a class='logo-color' href=''>Blogify</a>";
        echo "<ul class='display-ul'>";
          echo "<li class='nav-item'>";
            echo "<a class='btn btn-primary btn-sm' href='login'>Sign in</a>";
          echo "</li>";
          echo "<li class='nav-item'>";
            echo "<a class='btn btn-secondary btn-sm' href='registration'>Sign up</a>";
          echo "</li>";
        echo "</ul></nav>";
      }
    ?>
    <div class="banner">
      <div id="head" class="head"></div>
    </div>
    <div class="container">
    <h3 class="read-blog">Read Blogs</h3>
    <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $user_name = $blog->getusername($row['user_id']);
            $title = $row['blog_title'];
            $time  = date('m/d/Y H:i', $row['time']);
           
                echo "<div class='card card-margin'>";
                echo "<div class='card-body'>";
                  echo "<h5 class='card-title card-head'>$title</h5>";
                  echo "<footer class='blockquote-footer'>".$user_name['first_name']." 
                  <cite title='Source Title'>$time</cite></footer>";
                  echo "<br>";
                  echo "<a href = 'readblog?q=".$row['blog_id']."' class= 'btn btn-primary'>Read More</a>";
                echo "</div>";
              echo "</div>";
          }
        } else {
          echo "<h3> No Blogs Present Till Date </h3>";
        }
      ?> 
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
         
          <?php
            if ($page_no != 0) {
              $index = $page_no - 2;
              echo "<li class='page-item'>";
                echo "<a class='page-link pager' href='?page_no=$index'>Previous</a>";
               
              echo "</li>";
            } 
            $index = $page_no;
            if ($page_no + 2 < $count) {
              $index += 2;
              $pager = $index/2;
              echo "<li class='page-item'><a class='page-link pager' href='?page_no=$index'>$pager</a></li>";
            }
             if ($page_no + 4 < $count) {
              $index += 2;
              $pager = $index/2;
              echo "<li class='page-item'><a class='page-link pager' href='?page_no=$index'>$pager</a></li>";
            }
            if ($page_no + 2 < $count) {
              echo "<li class='page-item'>";
                echo "<a class='page-link pager' href='?page_no=$index'>Next</a>";
              echo "</li>";
            }
          ?>  
        </ul>
    </nav> 
    </div>
    <script src="Script/script.js" type="text/javascript" charset="utf-8" async defer></script>
  </body>
</html>