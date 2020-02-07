<?php



$data = array(1=>array("student_id"=>"Abc01","name"=>"Arjak Mondal", "class"=>10,"hindi"=>40,"English"=>50,"maths"=>40),
            2=>array("student_id"=>"Abc02","name"=>"Sayatan Maity", "class"=>9,"hindi"=>40,"English"=>50,"maths"=>40),
            3=>array("student_id"=>"Abc03","name"=>"Arjak Mondal", "class"=>9,"hindi"=>40,"English"=>50,"maths"=>40),
            4=>array("student_id"=>"Abc04","name"=>"Kunal Singh", "class"=>12,"hindi"=>60,"English"=>80,"maths"=>50),
            5=>array("student_id"=>"Abc05","name"=>"Kunal Singh", "class"=>9,"hindi"=>60,"English"=>80,"maths"=>50),
            6=>array("student_id"=>"Abc06","name"=>"Kunal Singh", "class"=>10,"hindi"=>60,"English"=>80,"maths"=>50));
$i=1;
foreach($data as $val){

     $total = $val['hindi'] + $val['English'] + $val['maths'];
     $data[$i]['total'] = $total;
     $i+=1;
}
for($i=1;$i<=count($data);$i++){
    for($j=1;$j<=count($data);$j++){
        if($data[$i]['class']>$data[$j]['class']){
            $temp = $data[$i];
            $data[$i] = $data[$j];
            $data[$j] = $temp;
        }
    }
}
for($i=4;$i<=6;$i++){
    for($j=4;$j<=6;$j++){
        if($data[$i]['total']>$data[$j]['total']){
            $temp = $data[$i];
            $data[$i] = $data[$j];
            $data[$j] = $temp;
        }
    }
}
for($i=2;$i<=3;$i++){
    for($j=2;$j<=3;$j++){
        if($data[$i]['total']>$data[$j]['total']){
            $temp = $data[$i];
            $data[$i] = $data[$j];
            $data[$j] = $temp;
        }
    }
}

echo "<table border='1px solid black'>";
echo "<tr>";
echo "<td>Student ID</td>";
echo "<td>Name</td>";
echo "<td>class</td>";
echo "<td>Hindi Marks</td>";
echo "<td>English Marks</td>";
echo "<td>Maths Marks</td>";
echo "<td>Total</td>";
echo "</tr>";

foreach($data as $val){
    echo "<tr>";
    foreach($val as $name=>$value){
        echo "<td>".$value."</td>";
    }
    echo "</tr>";

}



?>
