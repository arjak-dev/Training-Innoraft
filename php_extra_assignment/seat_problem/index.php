<?php
    include("class_def.php");
    $peoples[0] = new people();
    $peoples[0]->name = "abc";
    $peoples[0]->gender = "F";

    $peoples[1] = new people();
    $peoples[1]->name = "cde";
    $peoples[1]->gender = "F";

    $peoples[2] = new people();
    $peoples[2]->name = "efgh";
    $peoples[2]->gender = "F";

    $peoples[3] = new people();
    $peoples[3]->name = "ijkl";
    $peoples[3]->gender = "M";

    $peoples[4] = new people();
    $peoples[4]->name = "mnop";
    $peoples[4]->gender = "M";

    $peoples[5] = new people();
    $peoples[5]->name = "wert";
    $peoples[5]->gender = "M";

    $peoples[6] = new people();
    $peoples[6]->name = "vbnm";
    $peoples[6]->gender = "M";

    $peoples[7] = new people();
    $peoples[7]->name = "tyui";
    $peoples[7]->gender = "M";

    $peoples[8] = new people();
    $peoples[8]->name = "iopu";
    $peoples[8]->gender = "M";

    $peoples[9] = new people();
    $peoples[9]->name = "ytre";
    $peoples[9]->gender = "M";
    // print_r($peoples);
    
    $seat[0] = new seat();
    $seat[0]->person_name = $peoples[0];

    $seat[1] = new seat();
    $seat[1]->person_name = $peoples[1];

    $seat[2] = new seat();
    $seat[2]->person_name = $peoples[2];

    $seat[3] = new seat();
    $seat[3]->person_name = $peoples[3];

    $seat[4] = new seat();
    $seat[4]->person_name = $peoples[4];

    $seat[5] = new seat();
    $seat[5]->person_name = $peoples[5];

    $seat[6] = new seat();
    $seat[6]->person_name = $peoples[6];

    $seat[7] = new seat();
    $seat[7]->person_name = $peoples[7];

    $seat[8] = new seat();
    $seat[8]->person_name = $peoples[8];

    $seat[9] = new seat();
    $seat[9]->person_name = $peoples[9];

    $new_arrangement = (new seat())->seat_arrange($seat);
    foreach($new_arrangement as $key=>$value){
           print_r($value->person_name);
           echo "<br>";
           
    }
?>