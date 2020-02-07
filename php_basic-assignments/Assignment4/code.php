<?php    
    if(isset($_POST['submit'])){
        name_check();
        image_upload();
        marks_input();
        phone_no_check();
    }
    function name_check(){
        $first_name = $_POST['fname'];
            $second_name = $_POST['sec'];
            $pattern = '/^[a-zA-Z]+$/';
            if(preg_match($pattern,$first_name) && preg_match($pattern,$second_name)){
                //header("Location: http://www.phpasgn.com/Assignment2/");
                echo "<h1>Hi $first_name $second_name</h1>";
            }   
            else{
                echo "Invalid First Name And second name";
            }
    }
    function image_upload(){
        $file = $_FILES["file"];
        
        //initializing the file varible from the super global variable $_FILES
        if($file['name'] != NULL){
            $fileName = $file['name'];
            $fileTempName = $file['tmp_name'];
            $fileType = $file['type'];
            $fileError = $file['error'];
            global $fileDestination;
            $fileExtension = explode('.',$fileName);
            $allowed = array("jpg","jpeg","png");
            $fileActualExtension = strtolower(end($fileExtension));
          
            if(in_array($fileActualExtension,$allowed)){
          
            if($fileError === 0){
          
                $fileNewName = uniqid(rand(),true).".".$fileActualExtension;
                $fileDestination="./upload/".$fileNewName;
                move_uploaded_file($fileTempName,$fileDestination);
                echo "Your image:";
                echo "</br>";
                echo "<img src= $fileDestination width = 100px height = 100px>";  
                //header("Location: http://www.phpasgn.com/Assignment3/");
            }
            }else{
                echo "Wrong file Type";
            }
            }else{
                echo "no image input";
            }
    
        }
        function marks_input(){
            $marks = $_POST['marks'];
            $test = explode(PHP_EOL,$marks);
            global $final_marks;
            foreach($test as $val)
            {
                if(strlen($val) > 1){
                    $temp = explode('|',$val);
                    $final_marks[$temp[0]]=$temp[1];
                }  
            }
            echo "</br>";
            echo "</br>";
             echo "<table style='border: 1px solid black'>";
             echo "<th>Marks</th>";
             foreach($final_marks as $sub => $point){
                 echo "<tr >";
                     echo "<td style='border: 1px solid black'>$sub</td>";
                     echo "<td style='border: 1px solid black'>$point</td>";
                 echo "</tr>";
             }
             echo "</table>";
             echo "<br>";
             echo "<br>";
           // header("Location: http://www.phpasgn.com/Assignment4/");
      }
    function phone_no_check(){
        $ph_no = $_POST['ph_no'];
        $valid='/^\+(91)[0-9]{10}$/';
        if(preg_match($valid,$ph_no)){
            //header("Location: /Assignment5/");
            print_r("<b>your phone no.:</b>".$ph_no);
        }else{
            echo "invalid phn no.";
        }
    }
?>