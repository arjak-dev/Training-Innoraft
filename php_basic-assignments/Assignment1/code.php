<?php  
        if(isset($_POST['submit'])){
           
            $first_name = $_POST['fname'];
            $second_name = $_POST['sec'];
            $pattern = '/^[a-zA-Z]+$/';
            if(preg_match($pattern,$first_name) && preg_match($pattern,$second_name)){
                //header("Location: /Assignment2/");
                echo "<h1>Hi $first_name $second_name</h1>";
          
            }   
            else{
                echo "Invalid First Name And second name";
            }
        }
?>