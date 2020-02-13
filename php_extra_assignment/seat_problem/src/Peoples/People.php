<?php
  namespace Peoples;
  
  /**
   * Define the structure to store each Student.
   * 
   * @var $name String
   * A person name
   * 
   * @var $gender
   * gender of a person 
   */
  class People {
    public $name;
    public $gender;

    /**
      * Initializing the People class data members
      * 
      * @param $name String
      * Name of a people
      * 
      * @param $gender Character
      * Gender of the people
      */
    function __construct($name,$gender) {
      $this->name = $name;
      $this->gender = $gender;
    }

  }
  