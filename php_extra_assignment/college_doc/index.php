<?php
  include("class_def.php");

  $college_id = [273, 276, 277];
  $college_name = ["NSHM", "BBIT", "GNIT"];
  foreach ($college_id as $key => $value){
    $college[$key] = new college($college_id[$key], $college_name[$key]);
  }
  
  $doc_name = ["Result", 
    "Result", 
    "Result", 
    "Semester Exam Dates", 
    "Student Attendence List", 
    "Mar Marks", 
    "Student Registration"
  ];

  $doc_type = ["A",
    "A",
    "A",
    "B",
    "A",
    "A",
    "A"
  ];

  $doc_college = [273,
    276,
    277,
    "",
    273,
    "",
    277
  ];
  $doc_sent = [1,
    1,
    1,
    1,
    1,
    0,
    0
  ];
  foreach ($doc_name as $key => $value){
    $doc[$key] = new Document($doc_name[$key], $doc_type[$key], $doc_college[$key], $doc_sent[$key]);
  }

  $output = $doc[0]->putdoc($college,$doc);
  foreach($output as $key => $value){
    echo "[".$value->college_id ."]->college_name =".$value->college_name."<br>"; 
    echo "[".$value->college_id ."]->college_id =".$value->college_id."</br>";
    for($i=0; $i<count($value->docs); $i++){
      echo "[".$value->college_id ."]->docs[".$i."]->doc_name =".$value->docs[$i]->doc_name."<br>" ;
      echo "[".$value->college_id ."]->docs[".$i."]->doc_type =".$value->docs[$i]->doc_type."<br>" ;
      echo "[".$value->college_id ."]->docs[".$i."]->doc_sent_status =".$value->docs[$i]->doc_sent_status."<br>" ;
      echo "<br>";
    }
    echo "</br>";
    echo "</br>";

  }

?>