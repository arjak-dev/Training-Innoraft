<!Doctype html>
<html>
  <head>
    <title>
      Edit blog
    </title>
    <link rel = "icon" type = "image/png" href = "title_logos/icons8-check-book-64.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
  </head>
  <body>
  <nav class="navbar navbar-expand-mg bg-dark navbar-dark">
      <a class= "logo-color" href="">Blogify</a>
    </nav>
    <div class='container add-blog'>
      <form action="edit blog?q=<?php echo $q;?>" method="POST">
        <h3>Add blog:</h3>
        <div class="form-group">
          <label for="inputlg">Enter the blog title :</label></br>
          <input type="text" name = "title" class="form-control input-sm" value="<?php echo $row['blog_title']?>" required></br>
        </div>
        <div class="form-group">
          Enter the blog body:</br>  
          <textarea class="blog-body" name = "blog-body" required><?php
              echo $row['blog_body'];
            ?>
          </textarea>
        </div>
        <input type="submit" class = "btn btn-success" value="SAVE" name = "save">
        <a class="btn btn-light" href="my blog">CANCEL</a>
      </form>
    </div>
  </body>
</html>