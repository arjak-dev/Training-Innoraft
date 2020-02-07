<?php 
    session_start();
    $first_name = $_SESSION['first_name'];
    //echo "$first_name";
    $second_name = $_SESSION['second_name'];
    $final_marks = $_SESSION['marks'];
    $phone_no = $_SESSION['phone_no.'];
    $email_id = $_SESSION['email_id'];
    $img_name = $_SESSION['img_name'];
    $img_dest = $_SESSION['img_dest'];

   // session_destroy();
   $img_path = "/var/www/phpasgn/Assignment5/upload/".$img_name;

  //echo "$img_name";
  header("Content-type: application/vnd.ms-word");
  header("Content-Disposition: attachment;Filename=document_name.doc");
    // $a = "First name : ".$first_name."</br>";
    // echo "";
    // $a .= "Last name: ".$second_name."</br>";
    // $a .= "Email id : ".$email_id."</br>";
    // $a .="Phone No.: ".$phone_no."</br>";
    // $a .="Marks with Subjects: </br>";
       // echo "$img_path";
    ob_start();
   echo "<h1>Document</h1>";
    echo "</br>";
    echo "<b>First Name</b> : $first_name</br>";
    echo "<b>Second Name</b>: $second_name</br>";
    echo "<b>Email</b>: $email_id</br>";
    echo "<b>Phone Number</b>: $phone_no</br>";  
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
   echo "</br>";
  //echo "<b>Profile Picture:</b></br>";
   // echo "<img src='$img_dest 'width='100px' height='100px'>";
    //echo "</br>";
    $file_name = $first_name.".doc" ;
    touch($file_name);
    // $file_name = $first_name.'.doc';
    //$file = fopen($file_name,"w");
    //fwrite($file,$a);
    $content_file = ob_get_contents();
    file_put_contents($file_name,$content_file);
    //readfile($file_name);
?>
