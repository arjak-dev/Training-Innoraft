<?php
  namespace Subject;

  /**
   * Defines the function of the Subject class.
   */
  interface subjectInterface {
    
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
  public function getsubjectdetails($subject, $grade);
  }