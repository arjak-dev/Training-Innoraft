<?php
  namespace Student;
  /**
   * Defines the function of the student Student class.
   * 
   */
  interface StudentInterface {

    /**
   * Return a student marks details
   * 
   * @param $student String
   * contains the student data 
   * 
   * @param $student_id int
   * contain student id for which marks is needed 
   * 
   * @return Associative-Array
   * subject code and marks for a paeticular student.
   * 
   */
    public function getstudentmarksdetails($student, $student_id);

    /**
   * Update student status as PASS or FAIL as per the result
   * A student is considered PASS if he/she passed in 40% of the total subject
   * 
   * @param $student_id int
   * -Student Identity no.
   * 
   * @param $student Student
   * -Student data 
   * 
   * @param $subject Subject
   * -Details of the subject
   */
    public function getstudentstatus($student_id, $student, $subject);

     /**
   * Print the student result
   * 
   * @param $student String
   * A Student details for the particular id
   * 
   * @param $subject_details Subject
   * Contains all the subject details for the particular grade
   * 
   * @param $student_marks Marks
   * Contains the marks of the partiuclar selected student   
   */
    public function printstudentdetails($student,$subject_details,$student_marks);

  }