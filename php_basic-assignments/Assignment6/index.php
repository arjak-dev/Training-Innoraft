<?php 
  ob_start();
  echo "<h1>Document</h1>";
  echo "</br>";
    session_start();
    if(isset($_SESSION['first name'])){
    $first_name = $_SESSION['first_name'];
    echo "<b>First Name</b> : $first_name</br>";
    
    }
    //echo "$first_name";
    if(isset($_SESSION['second name'])){
    $second_name = $_SESSION['second_name'];
    echo "<b>Second Name</b>: $second_name</br>";}
    
    if(isset($_SESSION['marks'])){
    $final_marks = $_SESSION['marks'];
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
   echo "</br>";}

    if(isset($_SESSION['phone_no.'])){
    $phone_no = $_SESSION['phone_no.'];
    echo "<b>Phone Number</b>: $phone_no</br>";  }

    if(isset($_SESSION['email_id'])){
    $email_id = $_SESSION['email_id'];
    echo "<b>Email</b>: $email_id</br>";}
    if(isset($_SESSION['img_dest'])){
      $img_dest = $_SESSION['img_dest'];}

    if(isset($_SESSION['img_name'])){
    $img_name = $_SESSION['img_name'];
    $img_path = "var/www/phpasgn/php_basic-assignments/Assignment5/upload/".$img_name;
    echo "<b>Profile Picture:</b></br>";
    echo "<img src='$img_dest 'width='100px' height='100px'>";
    echo "</br>";}

   

   // session_destroy();
   

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
       $file_name = "user".time().".doc" ;
    touch($file_name);
    // $file_name = $first_name.'.doc';
    //$file = fopen($file_name,"w");
    //fwrite($file,$a);
    $content_file = ob_get_contents();
    file_put_contents($file_name,$content_file);
    //readfile($file_name);
?>
