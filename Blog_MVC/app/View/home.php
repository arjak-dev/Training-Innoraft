<!DOCTYPE html>
<html>
  <head>
    <script 
      src="Script/core.js" 
      type="text/javascript" 
      charset="utf-8" async defer>
    </script>
    <title>
      <?php echo $page_title ?>
    </title>
    <link rel = "icon" type = "image/png" href = "title_logos/icons8-home-64.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" 
    rel="stylesheet">
    <script 
      src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script 
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script 
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>
  
  </head>
  <body>
      <nav class='navbar navbar-expand-mg bg-dark navbar-dark'>
      <a class='navbar-brand logo-color' href=''>Blogify</a>
      <ul class='display-ul'>
      <li class='nav-item'>
    
      <?php if (isset($_SESSION['code'])): ?>
        <a class='btn btn-primary btn-sm' href='my blog'>My Blog</a>
        </li>
        <li class='nav-item profile-li'>
          <div class='dropdown'>
            <button class='btn btn-secondary dropdown-toggle btn-sm' 
            type='button' id='dropdownMenu2' data-toggle='dropdown' 
            aria-haspopup='true' aria-expanded='false'>
              <?php if ($row['image'] == NULL) : ?>
                <img class='profile-img' src='../dummy-image.jpg'>
              <?php else: ?>
                <img class='profile-img' src='<?php echo $row['image'] ?>'>
              <?php endif ?>
            <?php echo $row['first_name']." ".$row['last_name']; ?> 
            </button>
            <div class='dropdown-menu dropdown-div' 
            aria-labelledby='dropdownMenu2'>
              <a class='dropdown-item' type='button' href='view profile'>
                View Profile</a>
              <a class='dropdown-item' href='logout' type='button'>Logout</a>
            </div>
            </div>
        </li>
        </ul>
        </nav>
      <?php else : ?>
          <a class='btn btn-primary btn-sm' href='login'>Sign in</a>
          </li>
          <li class='nav-item'>
          <a class='btn btn-secondary btn-sm' href='registration'>Sign up</a>
          </li>
        </ul></nav>
      <?php endif ?>
    <div class="banner">
      <div id="head" class="head"></div>
    </div>
    <div class="container">
    <h3 class="read-blog">Read Blogs</h3>
    <?php if ($result->num_rows > 0): ?>
          <?php while ($row = $result->fetch_assoc()): ?>
              <div class='card card-margin'>
                <div class='card-body'>
                  <h6 class='card-title card-head'>
                    <?php echo $row['blog_title']?>
                  </h6>
                  <footer class='blockquote-footer'>
                  <?php $user_name = $blog->getusername($row['user_id']); 
                   echo $user_name['first_name'] ?>
                  <cite title='Source Title'><?php echo $time ?> </cite>
                  </footer>
                  <br>
                  <a href = 'read?q=<?php echo $row['blog_id'] ?>'
                   class= 'btn btn-primary'>Read More</a>
                </div>
              </div>
          <?php endwhile ?>
        <?php else: ?>
          <h3> No Blogs Present Till Date </h3>
        <?php endif ?>
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
          <?php if ($page_no != 0) : 
              $index = $page_no - 2; ?>
              <li class='page-item'>
                <a class='page-link pager' href='?page_no=<?php echo $index ?>'>
                Previous</a>
              </li>
          <?php endif;
            $index = $page_no;
            if ($page_no + 2 < $count): 
              $index += 2; 
              $pager = $index/2; ?>
              <li class='page-item'><a class='page-link pager' 
                href='?page_no=<?php echo $index ?>'><?php echo $pager ?></a>
              </li>
            <?php endif ?>
            <?php if ($page_no + 4 < $count) :
              $index += 2;
              $pager = $index/2;
            ?>
            <li class='page-item'><a class='page-link pager' 
              href='?page_no=<?php echo $index ?>'><?php echo $pager ?></a>
            </li>
            <?php endif ?>
            <?php if ($page_no + 2 < $count) : ?>
              <li class='page-item'>
                <a class='page-link pager' 
                href='?page_no=<?php echo $index ?>'>Next</a>
              </li>
            <?php endif ?>
        </ul>
    </nav> 
    </div>
    <script src="Script/script.js" type="text/javascript" 
    charset="utf-8" async defer></script>
  </body>
</html>