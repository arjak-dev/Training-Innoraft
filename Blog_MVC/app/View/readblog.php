<!DOCTYPE html>
<html>

<head>
  <title>
    Read Blog
  </title>
  <link rel="icon" type="image/png" href="title_logos/icons8-credit-card-64.png">
  <link rel="icon" type="image/png" href="/icon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
  <link href="css/footer.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-mg bg-dark navbar-dark">
    <a class="navbar-brand logo-color" href="">Blogify</a>
    <ul class='display-ul'>
      <?php if (isset($_SESSION['code'])) : ?>
        <li>
          <a href='my blog' class='btn btn-secondary btn-sm'>My blogs</a>
        </li>
        <li>
          <a href='home' class='btn btn-secondary btn-sm'>Home</a>
        </li>
      <?php else : ?>
        <li>
          <a href='home' class='btn btn-secondary btn-sm'>Home</a>
        </li>
      <?php endif ?>
      </li>
    </ul>
  </nav>
  <div class="container">
    <h1 class="read-heading">
      <?php
      echo $row['blog_title'];
      ?>
    </h1>
    <?php if ($row['image']) : ?>
      <img class='blog-img' src="<?php echo $row['image'] ?>">;
    <?php endif ?>
    <p class='read-body'>
      <?php echo nl2br($row['blog_body']) ?>
    </p>
  </div>
  <?php include('app/View/footer_layout.php'); ?> 
</body>
</html>