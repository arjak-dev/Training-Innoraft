<!DOCTYPE html>
<html>
  <head>
    <title>
      Add Blog
    </title>
    <link rel = "icon" type = "image/png" href = "title/icons8-plus-64.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-mg bg-dark navbar-dark">
      <a class= "navbar-brand logo-color" href="">Bloggy</a>
    </nav>
    <div class='container add-blog'>
      <form action="my blog" method="POST" enctype="multipart/form-data">
        <h3>Add blog:</h3>
        <div class="form-group">
          Enter the blog title :</br>
          <input type="text" name = "title" class="form-control input-sm" placeholder="Enter your blog title" required></br>
        </div>
        <div class="form-group">
          Enter the blog body:</br>  
          <textarea class="form-control input-sm" name = "blog-body" placeholder="Enter your blog body" required></textarea>
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
          <a class="btn btn-light" href="my blog">CANCEL</a>
        </div>
      </form>
    </div>
  </body>
</html>

