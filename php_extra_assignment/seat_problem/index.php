<?php
  include("./vendor/autoload.php");
  
  //Initializing Peoples
  //Initializing Sitting arrangement
  $people_name = [
    "abc",
    "cde",
    "efgh",
    "ijkl",
    "mnop",
    "wert",
    "vbmn",
    "tyui",
    "iopu",
    "ytre"
  ];
  $people_gender = [
    "F",
    "M",
    "F",
    "F",
    "M",
    "M",
    "M",
    "M",
    "M",
    "M"
  ];
  foreach ($people_name as $key => $value){
    $peoples[$key] = new Peoples\People($value, $people_gender[$key]);
    $seat[$key] = new Seats\Seat($peoples[$key]);
  }
  
  $new_arrangement = $seat[0]->check_seat_arrangement($seat);
  foreach($new_arrangement as $key=>$value){
    print_r($value->person_name);
    echo "<br>";        
  }
?>