<?php   
        
         session_start();
         if(!isset($_SESSION['code'])){
                unset($_SESSION['code']);
                session_destroy();
                header("Location: /login.html");
         }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Email Input</title>
    </head>
    <link rel="stylesheet" href="/style.css">
    <body>
        <form action="code.php" method= "POST" id="form_call" enctype="multipart/form-data">
            <H1>FORM FILL UP</H1>
                <b>First Name: </b><input type="text" name="fname" id="fname" required>
                <label id="fname_error"></label></br>
                <b>Second name: </b><input type="text" id="sname" name="sec" required>
                <label id= "sname_error"></label></br>
                <b> Full name:</b><input type="text" id="fullname" value="" disabled></br>
                <b> Enter your image:</b><input type="file" name="file" id="img_upload" required>    
                <div>
                   <b> Enter the marks: </b><textarea name="marks" id = "marks_table" required></textarea>
                </div>
                <div>
                    <b> Enter the phone no.: </b><input type="text" name="ph_no" id= "phno" required>
                    <label id = "ph_no_error"></label>
                </div>
                <div>
                    <b> Enter email id:</b><input name = "email_input" type="text" id="email_input" required>
                    <label id="email_error"></label>
                </div>
                <input type="submit" value="submit" name="submit">
                <a href="logout.php" class="logout">logout</a>
        </form>
        
        </br>
        </br>
    </body>
    <script src="valid.js"></script>
</html>
