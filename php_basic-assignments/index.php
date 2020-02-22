<?php
session_start();
//$_SESSION['code'] = "2";
// $_SESSION['code'] = 0;
if(isset($_SESSION['code'])){
       header("Location: list.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="/Training-Innoraft/style.css">
    </head>
</html>
<body>
    
    <form action="login.php" method="POST" id = "login_form">
    <h1>User Login</h1>
        User Name :<input type="text" id="user_name" name="user_name" placeholder = "username" required></br></br>
        Password: <input type="password" id="password" name="password" placeholder = "password" required></br></br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>