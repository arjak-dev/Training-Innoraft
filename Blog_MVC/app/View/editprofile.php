<?php
  include('app/Controller/edit_profile.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Edit profile
    </title>
    <link rel = "icon" type = "image/png" href = "title_logos/icons8-check-book-64.png">
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
    <div class="bg_div">
      <div class="container text-center">
        </br>
        <h3>
          Edit Profile

        </h3>
        </br>
        <div class="center">
          <table>
            <form action="Edit Profile" method="POST" enctype="multipart/form-data" id = "form_call"> 
              <tr>
                <td>
                  First Name:
                </td>
                <td>
                  <input type="text" id = "fname" name = 'first_name' class="form-control" value="<?php echo $first_name ?>" required>
                  <label id="fname_error"></label>
                </td>
              </tr>
              <tr>
                <td>
                  Last Name:
                </td>
                <td>
                  <input type="text" id = "sname" name = "last_name" class="form-control" value="<?php echo $last_name ?>" required>
                  <label id="sname_error"></label>
                </td>
              </tr>
              <tr>
                <td>
                  Email Id:
                </td>
                <td>
                  <input type="text" id="email_input" name = "email_id" class="form-control"  value="<?php echo $email_id ?>" required>
                  <label id="email_error"></label>
                </td>
              </tr>
              <tr>
                <td>
                  Phone number:
                </td>
                <td>
                  <input type="text" id="phno" name = "phone_no" class="form-control"  value="<?php echo $phone_no ?>" required>
                  <label id="ph_no_error"></label>
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
                  <a class="btn btn-secondary " href="view profile">CANCEL</a>
                </td>
              </tr>
            </form>
          </table>
        </div>
    </div>
    <script src="../script.js" type="text/javascript" charset="utf-8" async defer></script>>
  </body>
</html>