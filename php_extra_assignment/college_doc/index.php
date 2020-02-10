<?php
  include("class_def.php");

  $college[0] = new College(273, "NSHM");
  $college[1] = new College(276, "BBIT");
  $college[2] = new College(277, "GNIT");
  
  $doc[0] = new Document("Result", "A", 273,1);
  $doc[1] = new Document("Result", "A", 276, 1);
  $doc[2] = new Document("Result", "A", 277, 1);
  $doc[3] = new Document("Semester Exam Dates", "B", "", 1);
  $doc[4] = new Document("Student Attendence List", "A", 273, 1);
  $doc[5] = new Document("Mar Marks", "A", "", 0);
  $doc[6] = new Document("Student Registration", "A", 277, 1);

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