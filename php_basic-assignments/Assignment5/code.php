<!DOCTYPE html>
<head>
      <title> downlaod </title>
</head>
<body>
<?php
    if(isset($_POST['submit'])){
        session_start();
        name_check();
        image_upload();
        marks_input();
        phone_no_check();
        email_validate();
       // send_data();
    }else{
        header("Location: /Login/");
    }
    function name_check(){
            $first_name = $_POST['fname'];
            
            $second_name = $_POST['sec'];

            $pattern = '/^[a-zA-Z]+$/';
            if(preg_match($pattern,$first_name) && preg_match($pattern,$second_name)){
                    echo "<h1>Hi $first_name $second_name</h1>";
                    $_SESSION['first_name']= $first_name;
                    $_SESSION['second_name'] =  $second_name;
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
                $fileDestination="upload/".$fileNewName;
                $_SESSION['img_name'] = $fileName;
                $_SESSION['img_dest'] = $fileDestination;
                move_uploaded_file($fileTempName,$fileDestination);
                echo "Your image:</br>";
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
            $_SESSION['marks'] = $final_marks;;
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
            //header("Location: http://www.phpasgn.com/Assignment4/");
      }
    function phone_no_check(){
        $ph_no = $_POST['ph_no'];
        $valid='/^\+(91)[0-9]{10}$/';
        if(preg_match($valid,$ph_no)){
          //  header("Location: http://www.phpasgn.com/Assignment5/");
          print_r("your phone no.:".$ph_no);
          $_SESSION['phone_no.'] =  $ph_no;
          echo "</br>";
        }else{
            echo "invalid phn no.";
        }
    }
    function email_validate(){
          //api Key
        $key = '5a4e62a20fafb27a5caa9d6d94776fe6';

         //email input from user
        $email_id = $_POST['email_input'];
        print_r("Your mail id:".$email_id);
        $_SESSION['email_id'] = $email_id;

        //initialize curl:
        /*$ch = curl_init('http://apilayer.net/api/check?access_key='.$key.'&email='.$email_id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        //DATA STORE
        $json = curl_exec($ch);
        curl_close($ch);


        //Decoding jason file:
        $final_result = json_decode($json, true);
        if($final_result['format_valid'] && $final_result['smtp_check']){
            print_r("Your mail id:".$email_id);
        }else{
                print_r("your mail id is not valid");
        }*/
    }
?>
</body>
</html>
