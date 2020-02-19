<?php  
  session_start();
  if(!isset($_SESSION['code'])) {
    header('location: ../Blog');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Add Blog
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-mg bg-dark navbar-dark">
      <a class= "navbar-brand logo-color" href="">Bloggy</a>
    </nav>
    <div class='container add-blog'>
      <form action="index.php" method="POST" enctype="multipart/form-data">
        <h3>Add blog:</h3>
        <div class="form-group">
          Enter the blog title :</br>
          <input type="text" name = "title" class="form-control input-sm" placeholder="Enter your blog title"></br>
        </div>
        <div class="form-group">
          Enter the blog body:</br>  
          <textarea class="form-control input-sm" name = "blog-body" placeholder="Enter your blog body"></textarea>
        </div>
        <div class="form-group">
          Enter Your image :
          <div class="custom-file">
            Enter your Blog image:
            <input type="file" class="custom-file-input" id="customFile" name="file">
            <label class="custom-file-label" for="customFile">Enter your Blog image</label>
          </div>
        </div>
        
        <div>
          <input type="submit" class = "btn btn-success" value="SAVE" name = "save">
          <a class="btn btn-light" href="index.php">CANCEL</a>
        </div>
      </form>
    </div>
  </body>
</html>

