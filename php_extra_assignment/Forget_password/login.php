<?php
 include_once('connection.php');
    if(isset($_POST['submit'])){
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        
        $sql = "select * from user_login where BINARY user_name = '$user_name' and password = '$password'";
        if($result = $connection->query($sql)){
            if(mysqli_num_rows($result)>0){
                session_start();
                $_SESSION['code'] = "pass";
                header('location:Assignment5/');
            }else{
                echo "Invalid User Name or password</br>";
                echo "<a href='login.html'>Go to login page</a></br>";
                echo "<a href='index.php'>Go To registration page</a>";
            }
        }else{
            echo "$connection->error";
        }
    }

?>