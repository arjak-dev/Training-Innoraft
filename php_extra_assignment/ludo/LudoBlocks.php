<?php
  class LudoBlocks {
    public $token = [];

    /**
     * @param $token Array of interger
     * Contains the distance of the four tokens from the HOME. 
     */
    function __construct($token){
      $this->token = $token;
    }
  }