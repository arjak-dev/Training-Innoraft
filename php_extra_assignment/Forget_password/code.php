<?php
    if(isset($_POST['submit'])){
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $security_question=$_POST['security_question'];
        $security_answere=$_POST['security_answere'];
        include_once('connection.php');
        if(!$connection){
             echo "database connection failure";
        }   
        $sql = "select * from user_login where BINARY user_name = '$user_name'";
        $result = $connection->query($sql);
        if(mysqli_num_rows($result)>0){
            echo "user_name already exits";
            echo "<a href = 'index.php' >click here to go user Registration page</a>";
            exit();
            $result -> free();
            $connection -> close();
        }else{
            $sql = "insert into user_login (user_name,password,security_question,security_answere) values('$user_name','$password','$security_question','$security_answere')";
            if($connection->query($sql)){
                echo "user Registered";
                echo "<a href='login.html'>Click here to go to the login page</a>";
            }else{
                echo "$connection->error";
            }
        }
    }
?>