<?php
 
namespace Student;

/**
 * It defines the structure to store student details 
 * 
 * @var $id String 
 * -Student Identity no.
 * 
 * @var $name String 
 * -Student Name
 * 
 * @var $dob TimeStamp 
 * -Date of Birth of the student 
 * 
 * @var $garde int 
 * -Grade/class of the student 
 * 
 * @var $marks Marks
 * -Marks of the student 
 */
class StudentData implements StudentInterface {
  public $id;
  public $name;
  public $dob;
  public $grade;
  public $marks;
  public $student_status;
          
  /**
   * Initialize the StudentData class member variables
   * 
   * @param $id 
   * Student Identity no.
   * 
   * @param $name
   * Student name
   * 
   * @param $dob
   * Student Date of birth
   * 
   * @param $grade
   * Student grade or standard
   * 
   * @param $marks
   * marks scored by a student 
   */
  function __construct($id, $name, $dob, $grade, $marks) {
    $this->id = $id;
    $this->name = $name;
    $this->dob = $dob;
    $this->grade = $grade;
    $this->marks = $marks;
  }

  /**
   * @inheritDoc
   */
  function getstudentmarksdetails($student, $student_id) {
    foreach($student as $key => $value) {
      if ($value->id == $student_id) {
        return $value->marks->subject_marks;
      }
    }
  }

  /**
   * @inheritDoc
   */
  function getstudentstatus($student_id, $student, $subject) {
    //Get the student data as per the student id
    for ($i=0; $i < (count($student)); $i++) {
      if ($student[$i]->id == $student_id) { 
        break;
      }
    }
    //Get the marks obtained by the student as per the student id no.
    $student_marks = $this->getstudentmarksdetails($student, $student_id);
    //Get the subject details as per the grade
    $subject_details = $subject[0]->getsubjectdetails($subject, $student[$i]->grade);

    /**
     * @var $pass_subject
     * counts the no. of subject that the student has passed
     */
    $pass_subject = 0;
    for ($j=0; $j<count($subject_details); $j++) {
      if ($student_marks[$subject_details[$j][1]] >= $subject_details[$j][2]) {
        $pass_subject +=1;
      } 
    }

    /**
     * @var $percentage
     * Percentage of the subject passed from the total subject
     */
    $percentage = ($pass_subject/count($subject_details))*100;
    if ($percentage>=40) {
      if ($student[$i]->id == $student_id) {
        $student[$i]->student_status = "PASS";
      }
    }
    else {
      if($student[$i]->id == $student_id) {
        $student[$i]->student_status = "FAIL";
      }
    }
    //Calling printstudentdetails for generating the student result 
    $this ->printstudentdetails($student[$i],$subject_details,$student_marks);
  }
  
  /**
   * @inheritDoc
   */
  function printstudentdetails($student,$subject_details,$student_marks){
    echo "<table border='1px solid' class = 'table'>";
      echo "<thead class = 'thead-dark'>";
        echo "<tr>";
        echo "<th scope = 'col'>NAME</th>";
        echo "<th scope = 'col'>DOB</th>";
        echo "<th scope = 'col'>Grade</th>";
        echo "<th scope = 'col'>Subject</th>";
        echo "<th scope = 'col'>Result</th>";
        echo "</tr>";
        echo "</thead>";
      echo "<tr>";
      echo "<td>$student->name</td>";
      echo "<td>".date('d/m/y',$student->dob)."</td>";
      echo "<td>$student->grade</td>";
      echo "<td>";
      for ($i=0; $i<count($subject_details); $i++) {
        if ($student_marks[$subject_details[$i][1]]) {
          echo $subject_details[$i][1]."(".$student_marks[$subject_details[$i][1]].",".$subject_details[$i][2].")";
        }
        else {
          echo $subject_details[$i][1]."- NOT APPEARED";
        }
        echo "<br>";
      }
      echo "</td>";
      echo "<td>$student->student_status</td>";
      echo "</tr>";
    echo "</table>";
  }
}

