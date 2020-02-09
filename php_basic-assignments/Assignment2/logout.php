<?php
    session_start();
    //$code = $_SESSION['code'];
    //print_r($code);
    unset($_SESSION['code']);
    session_destroy();
    header("Location: /Training-Innoraft/php_basic-assignments/index.php");
?>