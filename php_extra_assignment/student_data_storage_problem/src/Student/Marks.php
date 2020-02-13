<?php
  namespace Student;
  
  /**
   * Define the structure to store each student marks
   * 
   * @var $subject_marks Associative Array
   * -Subject code and marks 
   */
  class Marks {
    public $subject_marks;

    /**
     * Initialize the StudentMarks class mamver Variables
     * 
     * @param $subject_marks Associative Array
     * Marks scored by a student  
     */
    function __construct($subject_marks){
        $this->subject_marks = $subject_marks;
    }

  }