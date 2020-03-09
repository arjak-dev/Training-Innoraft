<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot password</title>
  <link rel="icon" type="image/png" href="title_logos/icons8-toggle-on-64.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
  </script>
</head>

<body>
  <div class="bg_div">
    <div class="container center_div card bg-dark text-white">
      <form action="forgot password" method="POST">
        <h3>Forgot password</h3></br>
        <label>Enter your user name or email id if you are a google user:</label>
        <input name="user_name" type="text" placeholder="user name" 
        class="form-control"></br>
        <button name="submit" type="submit" class="btn btn-primary button-position">
          Submit
        </button>
        <a class="btn btn-secondary button-position" href="login">CANCEL</a>
      </form>
    </div>
  </div>
</body>

</html>