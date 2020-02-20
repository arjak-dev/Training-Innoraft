<?php
include('../User.php');
  $user = new User(" ", " ", " ", " ", " ", " ");
  session_start();
  if (isset($_SESSION['code'])) {
    $user_id  = $_SESSION['code'];
  } else {
   header('location:../Blog');
  }
  $result = $user->getuserdetails($user_id);
  $row = $result->fetch_assoc();
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $email_id = $row["email_id"];
    $phone_no = $row['phone_no'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Edit profile
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="bg_div">
      <div class="container text-center">
        </br>
        <h3>
          Edit Profile

        </h3>
        </br>
        <div class="center">
          <table>
            <form action="code.php" method="POST" enctype="multipart/form-data">
              <tr>
                <td>
                  First Name:
                </td>
                <td>
                  <input type="text" name = 'first_name' class="form-control" value="<?php echo $first_name ?>">
                </td>
              </tr>
              <tr>
                <td>
                  Last Name:
                </td>
                <td>
                  <input type="text" name = "last_name" class="form-control" value="<?php echo $last_name ?>">
                </td>
              </tr>
              <tr>
                <td>
                  Email Id:
                </td>
                <td>
                  <input type="text" name = "email_id" class="form-control"  value="<?php echo $email_id ?>">
                </td>
              </tr>
              <tr>
                <td>
                  Phone number:
                </td>
                <td>
                  <input type="text" name = "phone_no" class="form-control"  value="<?php echo $phone_no ?>">
                </td>
              </tr>
              </tr>
              </tr>
                <td>
                  Profile Picture: 
                </td>
                <td>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="file">
                  <label class="custom-file-label" for="customFile">profile image</label>
                </div>
                </td>
              </tr>
              <tr>
                <td>
                  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </td>
                <td>
                  <a class="btn btn-secondary " href="../View Profile">CANCEL</a>
                </td>
              </tr>
            </form>
          </table>
        </div>
    </div>
  </body>
</html>