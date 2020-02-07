<?php   
        
         session_start();
         if(!isset($_SESSION['code'])){
                unset($_SESSION['code']);
                header("Location: /php_basic-assignments/");
         }elseif(isset($_GET['q'])){
            $q=$_GET['q'];
            switch($q){
                case 1:
                        header("Location: /php_basic-assignments/Assignment1/");
                       break;
              case 2:
                       header("Location: /php_basic-assignments/Assignment2/");
                       break;
               case 3:
                       header("Location: /php_basic-assignments/Assignment3/");
                       break;
               
               case 4:
                       header("Location: /php_basic-assignments/Assignment4/");
                       break;

               case 5:
                       header("Location: /php_basic-assignments/Assignment5/");
                       break;
               default:
                       header("Location: /php_basic-assignments/index.php");
        }
        }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Marks Input</title>
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta content="utf-8" http-equiv="encoding">
        <link rel="stylesheet" href="/style.css">
    </head>
    <body>
        
        <form action="code.php" method="POST" id="form_call" enctype="multipart/form-data">
                <h1>Assignment Three</h1>
                <b>First Name: </b><input type="text" name="fname" id="fname" required>
                <label id="fname_error"></label></br></br>
                <b>Second name: </b><input type="text" id="sname" name="sec" required>
                <label id= "sname_error"></label></br></br>
                <b> Full name:</b><input type="text" id="fullname" value="" disabled></br></br>
                <b> Enter your image:</b><input type="file" name="file" id="img_upload" required></br></br>    
                <b> Enter the marks: </b><textarea name="marks" id = "marks" required></textarea>
                <label id="marks_error"></label></br>
                <label>Enter Marks in this format: subject|marks (eg.: maths|80) and press enter to enter the next subject marks (Extra new lines are not accepted)</label></br></br>

                <input type="submit" name = "submit"/>
                <a href="logout.php" class="logout">logout</a>

        </form>                
        
        </body>
    <script src="valid.js"></script>
</html>