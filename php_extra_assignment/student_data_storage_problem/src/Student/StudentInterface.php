<?php
  namespace Student;

  interface StudentInterface {

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
    public function getstudentmarksdetails($student, $student_id);

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
    public function getstudentstatus($student_id, $student, $subject);

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
    public function printstudentdetails($student,$subject_details,$student_marks);
  }