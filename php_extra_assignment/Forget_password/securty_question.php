<?php
   
    class Security_question {
        public function fetchQuestion($uid){
            include('connection.php');
            $sql="select security_question from user_login where uid='$uid'";
            // echo "$sql";
            $result=$connection->query($sql);
            // print_r($result);
            $row= $result->fetch_assoc();
            return $row['security_question'];
        }
        public function fetchAns($uid){
            include('connection.php');
            $sql="select security_answere from user_login where uid='$uid'";
            $result=$connection->query($sql);
            $row= $result->fetch_assoc();
            return $row['security_answere'];
        }
    }
?>