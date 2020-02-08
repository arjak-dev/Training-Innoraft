<?php

class student {
    public $id;
    public $name;
    public $dob;
    public $grade;
    public $marks;

    }
}
class subject{
    
    public $name;
    public $code;
    public $passing_marks;
    public $grade;

    function getPassingMarksAndGrade($subject,$grade){
        $output = [];
        foreach($subject as $key=>$value){
              if($value->grade == $grade){
                $new =array($value->name,$value->grade,$value->passing_marks);
                array_push($output,$new);
               echo "<br>";
            }
        }
       return $output;
    }      
    
}
class marks{
    public $subject_marks;
}


?>