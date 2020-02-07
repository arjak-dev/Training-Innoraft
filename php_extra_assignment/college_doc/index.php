<?php
    include("class_def.php");

    $college[0] = new college();
    $college[0]->college_id = 273;
    $college[0]->college_name = "NSHM";

    
    $college[2] = new college();
    $college[2]->college_id = 276;
    $college[2]->college_name = "BBIT";
    
    $college[3] = new college();
    $college[3]->college_id = 277;
    $college[3]->college_name = "GNIT";
    
    // print_r($college);

    $doc[0] = new document();
    $doc[0] ->doc_name = "Result";
    $doc[0] ->doc_type = "A";
    $doc[0] ->doc_college = "273";
    $doc[0] ->doc_sent = 1;

    $doc[1] = new document();
    $doc[1] ->doc_name = "Result";
    $doc[1] ->doc_type = "A";
    $doc[1] ->doc_college = "276";
    $doc[1] ->doc_sent = 1;

    $doc[2] = new document();
    $doc[2] ->doc_name = "Result";
    $doc[2] ->doc_type = "A";
    $doc[2] ->doc_college = "277";
    $doc[2] ->doc_sent = 1;

    $doc[3] = new document();
    $doc[3] ->doc_name = "Semester Exam Dates";
    $doc[3] ->doc_type = "B";
    $doc[3] ->doc_college = "";
    $doc[3] ->doc_sent = 1;

    $doc[4] = new document();
    $doc[4] ->doc_name = "Student attendence list";
    $doc[4] ->doc_type = "A";
    $doc[4] ->doc_college = "273";
    $doc[4] ->doc_sent = 1;

    $doc[5] = new document();
    $doc[5] ->doc_name = "MAR Marks";
    $doc[5] ->doc_type = "B";
    $doc[5] ->doc_college = "";
    $doc[5] ->doc_sent = 0;

    $doc[6] = new document();
    $doc[6] ->doc_name = "Student Registration";
    $doc[6] ->doc_type = "A";
    $doc[6] ->doc_college = "277";
    $doc[6] ->doc_sent = 1;

    $output = (new document())->putDoc($college,$doc);
    foreach($output as $key => $value){
        echo "[".$value->college_id ."]->college_name =".$value->college_name."<br>"; 
        echo "[".$value->college_id ."]->college_id =".$value->college_id."</br>";
        for($i=0;$i<count($value->docs);$i++){
            echo "[".$value->college_id ."]->docs[".$i."]->doc_name =".$value->docs[$i]->doc_name."<br>" ;
            echo "[".$value->college_id ."]->docs[".$i."]->doc_type =".$value->docs[$i]->doc_type."<br>" ;
            echo "[".$value->college_id ."]->docs[".$i."]->doc_sent_status =".$value->docs[$i]->doc_sent_status."<br>" ;
            echo "<br>";
        }
           
        echo "</br>";
        echo "</br>";

    }

?>