<!DOCTYPE html>
<html>
  <head>
    <title>
      My Blogs
    </title>
     <link rel = "icon" type = "image/png" href = "title_logos/icons8-menu-16.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
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
        <a href="home" class="btn btn-secondary btn-sm"> Home </a>
        </li>
        <li class='nav-item'>
          <a href="add blog" class="btn btn-secondary btn-sm"> 
            Add Blogs 
          </a>
        </li>
        <li class='nav-item profile-li'>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle btn-sm" 
          type="button" id="dropdownMenu2" 
          data-toggle="dropdown" 
          aria-haspopup="true" aria-expanded="false">
          <?php 
            if ($row['image'] == NULL) {
            echo "<img class='profile-img' src='../dummy-image.jpg'>";
            } else {
            echo "<img class='profile-img' src='".$row['image']."'>";
            }
            echo "  ".$row['first_name']." ".$row['last_name']; 
          ?>
          </button>
          <div class="dropdown-menu dropdown-div" 
          aria-labelledby="dropdownMenu2">
            <a class="dropdown-item" type="button" href="view profile">
              View Profile
            </a>
            <a class="dropdown-item" href="logout" type="button">
              Logout
            </a>
          </div>
        </div>
        </li>
      </ul>
    </nav>
    <div class="container">
      <?php if (mysqli_num_rows($result)): ?>
          <?php while ($row = $result->fetch_assoc()):  
            $user_name = $blog->getusername($row['user_id']); ?>
            <div class='card card-margin'>
                <div class='card-body'>
                  <h5 class='card-title'> <?php echo $row['blog_title'] ?></h5>
                  <footer class='blockquote-footer'>
                    <?php echo $user_name['first_name'] ?>
                       <cite title='Source Title'>
                        <?php echo $time ?>
                       </cite>
                  </footer>
                  <br>
                  <a 
                    href='read?q= <?php echo $row['blog_id'] ?>' 
                    class='btm-margin btn btn-success'>
                    Read more
                  </a>
                  <a 
                    href='edit?q=<?php echo $row['blog_id'] ?>' 
                    class='btm-margin btn btn-primary'>
                    Edit
                  </a>
                  <a 
                    href='Delete?q=<?php echo $row['blog_id'] ?>' 
                    class='btm-margin btn btn-danger'>
                    Delete
                  </a>
                </div>
              </div>
          <?php endwhile ?>
          <?php else: ?>
            <h3> No Blogs Present Till Date </h3>
        <?php endif ?>
    </div>
  </body>
</html>