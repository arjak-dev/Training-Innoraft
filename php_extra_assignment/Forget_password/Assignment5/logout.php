<?php
    session_start();
    //$code = $_SESSION['code'];
    //print_r($code);
    unset($_SESSION['code']);
    header("Location: /php_extra_assignment/Question4/login.html");
?>  