<?php
  include("class_def.php");
  
  //Initializing Peoples
  $peoples[0] = new People("abc", "F");
  $peoples[1] = new People("cde", "F");
  $peoples[2] = new People("efgh", "F");
  $peoples[3] = new People("ijkl", "M");
  $peoples[4] = new People("mnop", "M");
  $peoples[5] = new People("wert", "M");
  $peoples[6] = new People("vbmn", "M");
  $peoples[7] = new People("tyui", "M");
  $peoples[8] = new People("iopu", "M");
  $peoples[9] = new People("ytre", "M");
  
  //Initializing Sitting arrangement
  $seat[0] = new Seat($peoples[0]);
  $seat[1] = new Seat($peoples[1]);
  $seat[2] = new Seat($peoples[2]);
  $seat[3] = new Seat($peoples[3]);
  $seat[4] = new Seat($peoples[4]);
  $seat[5] = new Seat($peoples[5]);
  $seat[6] = new Seat($peoples[6]);
  $seat[7] = new Seat($peoples[7]);
  $seat[8] = new Seat($peoples[8]);
  $seat[9] = new Seat($peoples[9]);

  
  
  $new_arrangement = (new seat(1))->check_seat_arrangement($seat);
  foreach($new_arrangement as $key=>$value){
    print_r($value->person_name);
    echo "<br>";        
  }
?>