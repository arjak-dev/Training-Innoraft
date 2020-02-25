<?php include_once('app/Controller/registration.php');?> 
<!DOCTYPE html>
<html>
  <head>
    <title>Registration</title>
    <link rel = "icon" type = "image/png" href = "title_logos/icons8-toggle-off-64.png">
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
    <div class="reg_bg_div">
      <div class = "card bg-dark text-white reg_div">
        <form action="" method="POST" id="form_call"  enctype="multipart/form-data">
          <h3>
            Create Account
          </h3>
          User Name:</br>
          <input type="text" name = "user_name" class = "form-control" placeholder="User Name" required>
          <lable></lable></br>
          First name:</br>
          <input type="text" id = "fname" name = "first_name" class = "form-control input-sm" placeholder="First Name " required>
          <label id ="fname_error"></label></br>
          Name:</br>
          <input type="text" id = "sname" name = "last_name" class = "form-control input-sm" placeholder="Last Name" required>
          <label id="sname_error"></label></br>
          Email id:</br>
          <input type="text" name = "email_id" id ="email_input" class = "form-control" placeholder="Email id" required>
          <label id="email_error"></label></br>
          Phone no.:</br>
          <input type="text" name = "phone_no" class = "form-control" id ="phno" placeholder="Phone Number" required>
          <label id="ph_no_error"></label></br>
          Create a Password:</br>
          <input type="password" name = "password" class = "form-control" placeholder="Password" required></br>
          <label></label>
          Enter Your image :
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile" name='file'>
              <label class="custom-file-label" for="customFile">profile image</label>
            </div>
          <label>
            <?php
              if(isset($result)) {
                echo $result;
              }
              $result ="";
            ?>
          </label>
          <input type="submit" name='submit' class="btn btn-primary button-position"></br>
          <a class="btn btn-secondary button-position" href="home">CANCEL</a>
        </form>
      </div>
    </div>
    <script src = "Script/registration_script.js" ></script>
  </body>
</html>
