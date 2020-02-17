<?php
  include('../User.php');
  if(isset($_POST['submit'])){
    $user_name = $_POST['user_name'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_id = $_POST['email_id'];
    $phone_no = $_POST['phone_no'];
    $password = $_POST['password'];
    $new_user = new User($user_name, $first_name, $last_name, $email_id, $phone_no, $password);
    $result = $new_user->putdata($new_user);
    if ($result == 'true') {
      header ('location: ../Login');
    }else {
      $error = $result;
    }
  }

  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="reg_bg_div">
      <div class = "card bg-dark text-white reg_div">
        <form action="index.php" method="POST">
          <h3>
            Registration:
          </h3>
          Enter your User Name:</br>
          <input type="text" name = "user_name" class = "form-control" placeholder="User Name" required></br>
          <lable></lable></br>
          Enter your First name:</br>
          <input type="text" name = "first_name" class = "form-control" placeholder="First Name " required></br>
          <label></label></br>
          Enter your last Name:</br>
          <input type="text" name = "last_name" class = "form-control" placeholder="Last Name" required></br>
          <label></label></br>
          Enter your Email id:</br>
          <input type="text" name = "email_id" class = "form-control" placeholder="Email id" required></br>
          <label></label></br>
          Enter your Phone no.:</br>
          <input type="text" name = "phone_no" class = "form-control" placeholder="Phone Number" required></br>
          <label></label></br>
          Create a password:</br>
          <input type="text" name = "password" class = "form-control" placeholder="Password" required></br>
          <label>
            
          </label>
          <label>
            <?php
              if(isset($result)) {
                echo $result;
              }
              $result ="";
            ?>
          </label>
          <input type="submit" name='submit' class="btn btn-primary button-position">
        </form>
      </div>
    </div>
  </body>
</html>
