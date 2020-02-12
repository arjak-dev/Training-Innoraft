<?php

namespace CollegeData;

  /**
   * College specifes the Structure to store College details.
   * 
   * @var $college_id String
   * -College Identity
   * 
   * @var $college_name String 
   * -College Name
   * 
   * @var $docs Document Array
   * -College Document Array
   */
  class College {
    public $college_id;
    public $college_name;
    public $docs = [];

    /**
     * Initializing College class Data Members.
     * 
     * @param $college_id
     * College Identity Number
     * 
     * @param $college_name
     * College name 
     */
    function __construct($college_id, $college_name) {
      $this->college_id = $college_id;
      $this->college_name = $college_name;
    }

  }
