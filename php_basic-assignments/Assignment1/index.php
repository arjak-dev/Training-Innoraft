<?php   
        // echo "session delete";
         session_start();
         //$_SESSION['code'] = "2";
        // $_SESSION['code'] = 0;
         if(!isset($_SESSION['code'])){
                unset($_SESSION['code']);
                header("Location: /Training-Innoraft/php_basic-assignments/");
        }
        elseif(isset($_GET['q'])){
                 $q=$_GET['q'];
                 switch($q){
                       case 1:
                                 header("Location: /Training-Innoraft/php_basic-assignments/Assignment1/");
                                break;
                       case 2:
                                header("Location: /Training-Innoraft/php_basic-assignments/Assignment2/");
                                break;
                        case 3:
                                header("Location: /Training-Innoraft/php_basic-assignments/Assignment3/");
                                break;
                        
                        case 4:
                                header("Location: /Training-Innoraft/php_basic-assignments/Assignment4/");
                                break;

                        case 5:
                                header("Location: /Training-Innoraft/php_basic-assignments/Assignment5/");
                                break;
                        default:
                                header("Location: /Training-Innoraft/php_basic-assignments/index.php");
                 }
         }
?>
<!DOCTYPE html>
<html>
<head>
        <title> First assignment</title>
        <link rel="stylesheet" href="/Training-Innoraft/style.css">
</head>
<body>
        
        <form action="code.php" method="post" id="form_call">
        <h1>Assignment One</h1>
                <b>First Name: </b><input type="text" name="fname" id="fname" required>
                 <label id="fname_error"></label></br></br>
                <b>Second name: </b><input type="text" id="sname" name="sec" required>
                <label id= "sname_error"></label></br></br>
                <b> Full name:</b><input type="text" id="fullname" value="" disabled></br></br>
                <button type="submit" name="submit">Submit</button>
                <a href="logout.php" class="logout">logout</a>
         </form>
        
        </br>
        </br>
</body>
<script src="valid.js"></script>
</html>
