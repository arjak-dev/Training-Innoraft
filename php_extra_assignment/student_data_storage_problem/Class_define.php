<?php

class student {
    public $id;
    public $name;
    public $dob;
    public $grade;
    public $marks;

    function getSubjectCodeAndMarks($student,$student_id){
        $student_marks=[];    
        foreach($student as $key=>$value){
                if($value->id == $student_id){
                        return $value->marks->subject_marks;
                }
            }
    }
   
    function getStudentstatus($student,$subject){
        print_r($student[0]->marks->subject_marks);
    //    foreach($student as $key=>$value){
    //        foreach($subject as $key=>$value){
    //         //    if($student->marks[0)
    //        }
    //    }

    }
}
class subject{
    
    public $name;
    public $code;
    public $passing_marks;
    public $grade;
    
    function getSubjectDetails($subject,$grade){
        $selected_subjects = [];
        foreach($subject as $key=>$value){
            if($subject[$key]->grade == $grade){
                $selected_subjects += array($subject[$key]);
            }
        }    
       return $selected_subjects;  
    } 
}
class marks{
    public $subject_marks;
}


?>