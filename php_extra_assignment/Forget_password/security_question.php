<?php
session_start();
    $uid="";
    if(isset($_SESSION['uid'])){
        $uid=$_SESSION['uid'];
    }else{
        header("login.html");
        session_unset();
        session_destroy();
    }
        include('securty_question.php');
        $obj = new Security_question();
        $result = $obj->fetchQuestion($uid);
        $ans = $obj->fetchAns($uid);
        if(isset($_POST['submit'])){
           $security_answer = $_POST['security_answer'];
           if( $security_answer ==  $ans) 
                header('location: new_password.html');
            else{
                header('location:forgot.html');
            }
        }


?>



<!DOCTYPE html>
<html>
    <title>
        Security Question
    </title>
    <link rel="stylesheet" type="text/css" href="/style.css">
    <body>
        <form action="security_question.php" method="POST">
            <h1>Step 2</h1>
            <b>Answere this security quesiton</b>
            </br>
            <?php
                echo "$result</br>";
            ?>
            </br>
            <input type="text" name="security_answer">
            <?php
                if(isset($ans_check))
                    echo " $ans_check";
            ?>
            </br>
            <input type="submit" name="submit">
        </form>
    </body>

</html>
