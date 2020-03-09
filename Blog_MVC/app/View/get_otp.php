<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OTP Check</title>
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
      <form action="otp check" method="POST"> 
        <h3> Enter Code </h3></br>
        <label>Enter the code that has been sent to the registered mail id:
        </label></br>
        </br>
        <input type="text" class="form-control" placeholder="Enter Code">
        </br>
        <button name="submit" type="submit" class="btn btn-primary button-position">
          Submit
        </button>
        <a class="btn btn-secondary button-position" href="login">CANCEL</a>
      </form>
    </div>
  </div>
</body>

</html>