<?php
  namespace TeamData;
  
  /**
   * Defines the structure of the Team data
   * 
   * @var $name String 
   * -Team name 
   * 
   * @var $team Player-Array
   * -Players in the team
   */
  class Team {
    public $name;
    public $team;

    /**
     * Initializing Team member variables
     *
     * @param $players Player
     * Array containing player in the team
     *
     * @param $name String
     * Name of the team
     */

    function __construct($players, $name) {
      $this->team = $players;
      $this->name = $name;
    }

  }

