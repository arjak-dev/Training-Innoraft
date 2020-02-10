<?php
    class StudentData {
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
     * Return a student marks details
     * 
     * @param $student 
     * contains the student data 
     * 
     * @param $student_id
     * contain student id for which marks is needed 
     * 
     * @return
     * An associative array of subject code and marks
     * 
     */

    function getstudentmarksdetails($student, $student_id) {
      foreach($student as $key => $value) {
        if ($value->id == $student_id) {
          return $value->marks->subject_marks;
        }
      }
    }

    /**
     * Update student status as PASS or FAIL as per the result
     * A student is considered PASS if he/she passed in 40% of the total subject
     * 
     * @param $student_id
     * Student Identity no.
     * 
     * @param $student
     * Student data 
     * 
     * @param $subject
     * Details of the subject
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
      for ($j=0; $j<count($subject_details); $j++){
        if ($student_marks[$subject_details[$j][1]] >= $subject_details[$j][2]) {
          $pass_subject +=1;
        } 
      }
      /**
       * @var $percentage
       * Percentage of the subject passed from the total subject
       */
      $percentage = ($pass_subject/count($subject_details))*100;
      if($percentage>=40){
        if($student[$i]->id == $student_id){
          $student[$i]->student_status = "PASS";
        }
      }
      else{
        if($student[$i]->id == $student_id){
          $student[$i]->student_status = "FAIL";
        }
      }
      //Calling printstudentdetails for generating the student result 
      $this ->printstudentdetails($student[$i],$subject_details,$student_marks);
    }
    
    /**
     * Print the student result
     * 
     * @param $student
     * A Student details for the particular id
     * 
     * @param $subject_details
     * Contains all the subject details for the particular grade
     * 
     * @param $student_marks
     * Contains the marks of the partiuclar selected student   
     */

    function printstudentdetails($student,$subject_details,$student_marks){
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

  class SubjectData{  
    public $name;
    public $code;
    public $passing_marks;
    public $grade;

    /**
     * Initialize SubjectData class member variables
     * 
     * @param $name
     * Subject name
     * 
     * @param $code
     * Subject code
     * 
     * @param $passing_marks
     * Passing marks of the subject
     * 
     * @param $grade
     * The grade in which the subject is allocated 
     */

    function __construct($name,$code, $passing_marks, $grade){
      $this->name = $name;
      $this->code = $code;
      $this->passing_marks = $passing_marks;
      $this->grade = $grade;
    }

    /**
     * Get subject details for a particualar grade
     * 
     * @param $subject
     * Contains all subject detials for all grades
     * 
     * @param $grade
     * The grade for which the subject are need
     * 
     * @return
     * A array of SubjectData class for a single grade
     */

    function getsubjectdetails($subject, $grade) { 
        $output = [];
        foreach ($subject as $key => $value) {
          if ($value->grade == $grade) {
              $new =array($value->name, $value->code, $value->passing_marks);
              array_push($output, $new);
            }
        }
        return $output;
    }

  }

  class StudentMarks{
    public $subject_marks;

    /**
     * Initialize the StudentMarks class mamver Variables
     * 
     * @param $subject_marks 
     * Marks scored by a student  
     */
    
    function __construct($subject_marks){
      $this->subject_marks = $subject_marks;
    }

  }

?>