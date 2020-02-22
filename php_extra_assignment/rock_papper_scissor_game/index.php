<?php
    $var = "";
    $result= "";
    include("code.php");
    $obj =new stone_paper_scissor();
    if (isset($_POST['stone'])) {
        $var=$obj->getComputerResult();
        $result = $obj->getFinalResult($var,$_POST['stone']);
    }
    else if (isset($_POST['paper'])) {
        $var=$obj->getComputerResult();
        $result = $obj->getFinalResult($var,$_POST['paper']);
    }
    else if (isset($_POST['scissor'])) {
        $var=$obj->getComputerResult();
        $result = $obj->getFinalResult($var,$_POST['scissor']);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Question 5
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
       
            <form action="index.php" method ="POST" >
                <div class= "main">
                        <div>
                            <h2>Users Input</h2>
                            <button name = "stone" value="1">STONE</button>
                            <button name = "paper" value="2">PAPER</button>
                            <button name = "scissor" value="3">SCISSOR</button>
                        </div>
                        <div>
                            <h2>Computers Input</h2>
                            <?php
                                if($var == 1){
                                   echo 'stone';
                                }else if($var == 2){
                                    echo 'papar';
                                }else if($var == 3)
                                    echo 'scissor';
                               
                                $var = 0;
                            ?>
                        </div>
                        <div>
                            <h2>Result</h2>
                            <?php
                                echo "$result";
                                $result = "";
                            ?>
                        </div>
                </div>
            </form>
        
    </body> 
</html>

    