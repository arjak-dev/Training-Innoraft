<?php
	// if(isset($_POST['name'])) {
  //   if($_POST['name'] == 'aa') {
  //     // header("location: dashboard.html");
  //   } else {
  //     echo "aa";
  //   }
  // }
  
  echo json_encode(
    [
      "message" => "suc",
      "name" => $_POST['name'] 
    ]
  )
 
?>