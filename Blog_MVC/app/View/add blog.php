<!DOCTYPE html>
<html>

<head>
  <title>
    Add Blog
  </title>
  <link rel="icon" type="image/png" href="title_logos/icons8-plus-64.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="css/style.css" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link href="css/footer.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
  </script>
</head>

<body>
  <nav class="navbar navbar-expand-mg bg-dark navbar-dark">
    <a class="navbar-brand logo-color" href="">Bloggy</a>
  </nav>
  <div class='container add-blog'>
    <form action="my blog" method="POST" enctype="multipart/form-data" id="form_submit">
      <h3>Add blog:</h3>
      <div class="form-group">
        Enter the blog title :</br>
        <input type="text" name="title" class="form-control input-sm" placeholder="Enter your blog title" required>
        </br>
      </div>
      <div class="form-group">
        Enter the blog body:</br>
        <textarea class="form-control input-sm" name="blog-body" placeholder="Enter your blog body" required>
          </textarea>
      </div>
      <div class="form-group">
        Enter Your image :
        <div class="custom-file">
          Enter your Blog image:
          <input type="file" class="custom-file-input" id="customFile" name="file">
          <label class="custom-file-label" for="customFile">
            Enter your Blog image
          </label>
        </div>
      </div>
      <div>
        <input type="submit" class="btn btn-success" value="SAVE" name="save">
        <a class="btn btn-light" href="my blog">CANCEL</a>
      </div>
    </form>
  </div>
</body>

</html>