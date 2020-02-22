<?php   
        
         session_start();
         if(!isset($_SESSION['code'])){
                unset($_SESSION['code']);
                header("Location: index.php");
         }elseif(isset($_GET['q'])){
            $q=$_GET['q'];
            switch($q){
                case 1:
                    header("Location: /php_basic-assignments/Assignment1/");
                   break;
          case 2:
                   header("Location: /php_basic-assignments/Assignment2/");
                   break;
           case 3:
                   header("Location: /php_basic-assignments/Assignment3/");
                   break;
           
           case 4:
                   header("Location: /php_basic-assignments/Assignment4/");
                   break;

           case 5:
                   header("Location: /php_basic-assignments/Assignment5/");
                   break;
           default:
                   header("Location: /php_basic-assignments/index.php");
    }
        }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Assignments List
        </title>
        <link rel="stylesheet" href="/Training-Innoraft/style.css">
    </head>
    <body>
        <H1>Assignments</H1>
        <ul class="list">
            <a href="Assignment1/"><li>Assignent 1</li></a>
            <a href="Assignment2/"><li>Assignent 2</li></a>
            <a href="Assignment3/"><li>Assignent 3</li></a>
            <a href="Assignment4/"><li>Assignent 4</li></a>
            <a href="Assignment5/"><li>Assignent 5</li></a>
            <a href="Assignment6/"><li>Assignent 6</li></a>
        </br>
        <a href="logout.php" class="logout">Logout</a>
        </ul>
    </body>
</html>