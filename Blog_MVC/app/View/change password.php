<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Change password</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
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
      <form action="change password" method="POST" id=form_call>
        <h3>Change Password</h3>
        </br>
        <label> New Password:</label>
        <input type="password" placeholder="New Password" class="form-control" 
        id="new_password" name="new_password"></br>
        <label>Confirm Password:</label>
        <input type="password" placeholder="Confirm password" class="form-control" 
        id="confirm_password">
        </br>
        <label id="error"></label>
        </br>
        <button name="submit" type="submit" 
        class="btn btn-primary button-position">SUBMIT</button>
        <a class="btn btn-secondary button-position" href="home">CANCEL</a>
      </form>
    </div>
  </div>
  <script src="Script/check_password.js"></script>
</body>
</html>