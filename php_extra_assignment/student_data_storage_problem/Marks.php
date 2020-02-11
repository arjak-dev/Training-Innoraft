<?php
namespace Marks {

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

}
