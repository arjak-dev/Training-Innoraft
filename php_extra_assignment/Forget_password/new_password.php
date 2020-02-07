<?php
    include("connection.php");
    session_start();
    $uid="";
    if(isset($_SESSION['uid'])){
        $uid=$_SESSION['uid'];
    }else{
        session_unset();
        session_destroy();
        header("login.html");
    }
    if(isset($_POST['submit'])){
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        if( $new_password == $confirm_password){
            $sql="update user_login set password='$new_password' where uid='$uid'";
            if($result=$connection->query($sql)){
                unset($_SESSION['uid']);
                // session_destroy();
                echo "<h1>CONGRATULATION YOUR PASSWORD IS UPDATED</H1>";
                echo "<a href='login.html'>Click here to go to the Login page</a>";
            }
            

        }else{
            echo "</h1>new password and confirm password does not match</h1>";
        }
    }

?>