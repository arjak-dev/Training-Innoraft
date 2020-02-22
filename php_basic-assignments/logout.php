<?php
    session_start();
    //$code = $_SESSION['code'];
    //print_r($code);
    unset($_SESSION['code']);
    session_destroy();
    header("Location: index.php");
?>