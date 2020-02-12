<?php
namespace Subject;

class Subject implements SubjectInterface {  
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
   * @inheritDoc
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

