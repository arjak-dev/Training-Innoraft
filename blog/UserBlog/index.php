<?php
  include_once('user_blog.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      My Blogs
    </title>
     <link rel = "icon" type = "image/png" href = "../title_logos/icons8-menu-16.png">
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
    <nav class="navbar navbar-expand-mg bg-dark navbar-dark">
      <a class= "navbar-brand logo-color" href="">Blogify</a>
      <ul class='display-ul'>
        <li class='nav-item'>
        <a href="../Blog" class="btn btn-secondary btn-sm"> Home </a>
        </li>
        <li class='nav-item'>
          <a href="add_blog.php" class="btn btn-secondary btn-sm"> Add Blogs </a>
        </li>
        <li class='nav-item profile-li'>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php
            $user_id = $_SESSION['code'];  
            $blog = new Blog(" "," "," "," "," "," "); 
            $row = $blog->getusername($user_id);
            if ($row['image'] == NULL) {
            echo "<img class='profile-img' src='../dummy-image.jpg'>";
            } else {
            echo "<img class='profile-img' src='".$row['image']."'>";
            }
            echo "  ".$row['first_name']." ".$row['last_name']; 
          ?>
          </button>
          
          <div class="dropdown-menu dropdown-div" aria-labelledby="dropdownMenu2">
            <a class="dropdown-item" type="button" href="../View Profile">View Profile</a>
            <a class="dropdown-item" href="../logout.php" type="button">Logout</a>
          </div>
        </div>
        </li>
      </ul>
    </nav>
    <div class="container">
      <h3><?php echo "$result"; ?></h3>
      <?php
        $blog = new Blog("", "", "");
        $result = $blog->getuserblog($user_id);
        if (mysqli_num_rows($result)) {
          while ($row = $result->fetch_assoc()) {
            $user_name = $blog->getusername($row['user_id']);
            $title = $row['blog_title'];
            $time  = date('m/d/Y H:i', $row['time']);
              echo "<div class='card card-margin'>";
                echo "<div class='card-body'>";
                  echo "<h5 class='card-title'>$title</h5>";
                  echo "<footer class='blockquote-footer'>".$user_name['first_name']."
                       <cite title='Source Title'>$time</cite></footer>";
                  echo "<br>";
                  echo "<a href='../Blog/readblog.php?q=".$row['blog_id']."' class='btm-margin btn btn-success'>Read more</a>";
                  echo "<a href='../Edit?q=".$row['blog_id']."' class='btm-margin btn btn-primary'>Edit</a>";
                  echo "<a href='../Delete?q=".$row['blog_id']."' class='btm-margin btn btn-danger'>Delete</a>";
                  echo "</div>";
                echo "</div>";
          }
        } else {
          echo "<h3> No Blogs Present Till Date </h3>";
        }
      ?>  
    </div>
  </body>
</html>