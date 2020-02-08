<?php

class student {
    public $id;
    public $name;
    public $dob;
    public $grade;
    public $marks;
    public $student_status;

    function getStudentMarksDetails($student,$student_id){
     
      foreach($student as $key=>$value){
        if($value->id==$student_id){
          return $value->marks->subject_marks;
        }
      }
    }

    function getStudentStatus($student_id,$student,$subject){
     
      //----------getting each student marks subject wise--------//
      $student_marks = $this->getStudentMarksDetails($student,$student_id);
     
      //---------getting subject details as per the marks--------//
      foreach($student as $key=>$value){
        if($value->id == $student_id){
          $subject_details = (new subject())->getSubjectDetails($subject,$value->grade);
        break;
        }
      }
     
      //-------------calculating No. of pass Subject-----------------//
      $pass_subject = 0;
      for($i=0;$i<count($subject_details);$i++){
        if($student_marks[$subject_details[$i][1]]>= $subject_details[$i][2]){
          $pass_subject +=1;
        } 
      }
    
      
      //-----------calculating pass subject percentage----//
      $percentage = ($pass_subject/count($subject_details))*100;
    
      //------updatign the pass value of student class------//
      if($percentage>=40){
        foreach($student as $key=>$value){
          if($value->id == $student_id){
            $value->pass = "pass";
          }
        }
      }
     
      else{
        foreach($student as $key=>$value){
          if($value->id == $student_id){
            $value->pass = "fail";
          }
        }
      }
     
        
      foreach($student as $key=>$value){
        if($value->id == $student_id){
          print_r($value);
        break;
        }
    }
  }
}


class subject{
    
    public $name;
    public $code;
    public $passing_marks;
    public $grade;

    function getSubjectDetails($subject,$grade){
        $output = [];
        foreach($subject as $key=>$value){
          if($value->grade == $grade){
              $new =array($value->name,$value->code,$value->passing_marks);
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