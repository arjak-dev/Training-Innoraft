<?php
  include('../User.php');
  if(isset($_POST['submit'])){
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $status = (new User('a','a','a','a','a','a'))->checkuser($user_name, $password);
    if($status){
      session_start();
      $_SESSION['code'] = $status; 
      header('location: ../Blog');
    } else {
      $error = "login failed";
    }
  }
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Login to your Account
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="bg_div container ">
    <div class="center_div card bg-dark text-white">
      <form action="index.php" method="POST">
        <h3>
          Login
        </h3></br>
        Enter user name:</br>
        <input type="text" name = "username" class = "form-control" placeholder="User Name" required>
        <label></label></br>
        Enter password: </br>
        <input type="password" name = "password" class = "form-control" placeholder="Password" required>
        <lable>
          <?php
            if (isset($error)){
              echo "$error";
            }
            $error = "";
          ?>
        </lable></br>
        <button name="submit" type="submit" class="btn btn-primary button-position">Submit</button>
      </form>
    </div>
  </div>
  </body>
</html>


