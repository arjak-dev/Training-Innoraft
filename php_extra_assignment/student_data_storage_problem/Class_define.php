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


      //------gettihn the student object from the id------------//
      for($i=0;$i<(count($student));$i++){
        if($student[$i]->id == $student_id){
        break;
        }
      }
      //----------getting each student marks subject wise--------//
      $student_marks = $this->getStudentMarksDetails($student,$student_id);
      //---------getting subject details as per the marks--------//
      $subject_details = (new subject())->getSubjectDetails($subject,$student[$i]->grade);
      //-------------calculating No. of pass Subject-----------------//
      $pass_subject = 0;
      for($j=0;$j<count($subject_details);$j++){
        if($student_marks[$subject_details[$j][1]]>= $subject_details[$j][2]){
          $pass_subject +=1;
        } 
      }
      //-----------calculating pass subject percentage----//
      $percentage = ($pass_subject/count($subject_details))*100;
      //------updatign the pass value of student class------//
      if($percentage>=40){
       if($student[$i]->id == $student_id){
          $student[$i]->student_status = "pass";
        }
      }
      else{
        if($student[$i]->id == $student_id){
          $student[$i]->student_status = "fail";
        }
      }
      //--------------Printing The Student details-----------------//
      $this ->printStudentdetails($student[$i],$subject_details,$student_marks);
    }
    function printStudentdetails($student,$subject_details,$student_marks){
      echo "<table border='1px solid'>";
      echo "<tr>";
      echo "<td>NAME</td>";
      echo "<td>DOB</td>";
      echo "<td>Grade</td>";
      echo "<td>Subject</td>";
      echo "<td>Result</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>$student->name</td>";
      echo "<td>".date('d/m/y',$student->dob)."</td>";
      echo "<td>$student->grade</td>";
      echo "<td>";
      for($i=0;$i<count($subject_details);$i++){
        if($student_marks[$subject_details[$i][1]])
          echo $subject_details[$i][1]."(".$student_marks[$subject_details[$i][1]].",".$subject_details[$i][2].")";
        else
          echo $subject_details[$i][1]."- NOT APPEARED";

        echo "<br>";
      }
      echo "</td>";
      echo "<td>$student->student_status</td>";
      echo "</tr>";
      echo "</table>";
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