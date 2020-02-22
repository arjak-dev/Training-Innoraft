<?php
  include('ViewProfile.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Profile
    </title>
    <link rel = "icon" type = "image/png" href = "../icons8-toggle-on-64.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <!-- <link href='https://$row =fonts.googleapis.com/css?family=Sofia' rel='stylesheet'> -->
    <link href='https://fonts.googleapis.com/css?family=Amiko' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-mg bg-dark navbar-dark">
      <a class= "navbar-brand logo-color" href="">Blogify</a>
      <ul class='display-ul'>
        <li>
          <a href="../Blog" class="btn btn-secondary btn-sm"> Home </a>
        </li>
      </ul>
    </nav>
    <div class = "container Profile">
      <div class="profile-div text-center">
      <?php
        // $user_id = $_SESSION['code'];  
        // $user = new User(" "," "," "," "," "," "," "); 
        // $result = $user->getuserdetails($user_id);
        // $row = $result->fetch_assoc();
         if ($row['image'] == NULL) {
            echo "<img class='profile-image' src='../dummy-image.jpg'>";
          } else {
            echo "<img class='profile-image' src='".$row['image']."'>";
          }
      ?>
        <table>
          <tr>
            <td>
              First Name
            </td>
            <td>
              <?php
                echo $row['first_name'];
              ?>
            </td>
          </tr>
          <tr>
            <td>
              last Name
            </td>
            <td>
              <?php
                echo $row['last_name'];
              ?>
            </td>
          </tr>
          <tr>
            <td>
              Phone Number
            </td>
            <td>
              <?php
                echo $row['phone_no'];
              ?>
            </td>
          </tr>
          <tr>
            <td>
              Email ID
            </td>
            <td>
              <?php
                echo $row['email_id'];
              ?>
            </td>
          </tr>
        </table>
        <a class="btn btn-secondary button-position" href="../Edit Profile">Edit Profile</a>
      </div>
    </div>
  </body>
</html>