<?php
if(isset($_POST['submit'])){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    if($user_name == "admin" && $password == "admin"){
        session_start();
        $_SESSION['code']="pass";
        header("Location: list.php");
    }else{
        echo "invalid password";
    }
}



?>