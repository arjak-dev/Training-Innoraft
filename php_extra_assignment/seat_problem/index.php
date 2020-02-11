<?php
  include("People.php");
  include("Seat.php");
  use People\People;
  use Seat\Seat;
  
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
    "F",
    "F",
    "M",
    "M",
    "M",
    "M",
    "M",
    "M",
    "M"
  ];
  foreach ($people_name as $key => $value){
    $peoples[$key] = new People($value, $people_gender[$key]);
    $seat[$key] = new Seat($peoples[$key]);
  }
  
  $new_arrangement = (new seat(1))->check_seat_arrangement($seat);
  foreach($new_arrangement as $key=>$value){
    print_r($value->person_name);
    echo "<br>";        
  }
?>