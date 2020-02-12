<?php
  namespace TeamData;
    
  class Team {
    public $name;
    public $team;

    /**
     * Initializing Team member variables
     *
     * @param $players
     * Array containing player in the team
     *
     * @param $name
     * Name of the team
     */

    function __construct($players, $name) {
      $this->team = $players;
      $this->name = $name;
    }

  }

