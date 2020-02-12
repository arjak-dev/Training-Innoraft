<?php
  namespace Peoples;
  
  class People {
    public $name;
    public $gender;

    /**
      * Initializing the People class data members
      * 
      * @param $name 
      * Name of a people
      * 
      * @param $gender
      * Gender of the people
      */

    function __construct($name,$gender) {
      $this->name = $name;
      $this->gender = $gender;
    }

  }
  