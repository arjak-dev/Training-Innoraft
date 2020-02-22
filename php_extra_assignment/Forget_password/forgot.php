<?php
    include('connection.php');
    if(isset($_POST['submit'])){
        $user_name=$_POST['user_name'];
        $sql = "select uid from user_login where user_name='$user_name'";
        // echo "$sql";
        $uid = $connection->query($sql);
       // print_r($uid);
        if(mysqli_num_rows($uid)<1)
        {
            echo "user name not present";

        }else{
            $data=$uid->fetch_assoc();
            session_start();
            $_SESSION['uid'] = $data['uid']; 
            $connection->close();   
            header('location:security_question.php');
            
            // print_r($row['uid']);
        }    
}
    
?>