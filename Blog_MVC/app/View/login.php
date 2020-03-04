<!DOCTYPE html>
<html>

<head>
  <title>
    Login to your Account
  </title>
  <link rel="icon" type="image/png" href="title_logos/icons8-toggle-on-64.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="bg_div">
    <div class="container center_div card bg-dark text-white">
      <form action="login" method="POST">
        <h3>
          Login
        </h3></br>
        <a href="google login" class="btn btn-danger btn-block">
          <i class="fa fa-google"></i>
          Sign in with <b>Google</b>
        </a></br>
        <h5> ---OR---</h5>
        Enter user name:</br>
        <input type="text" name="username" class="form-control" placeholder="User Name" required>
        <label></label></br>
        Enter password: </br>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <lable>
          <?php
          if (isset($_GET['error'])) {
            echo "Login Failed";
          }
          ?>
        </lable></br>
        <button name="submit" type="submit" class="btn btn-primary button-position">Submit</button>
        <a class="btn btn-secondary button-position" href="home">CANCEL</a>
      </form>
    </div>
  </div>
</body>

</html>