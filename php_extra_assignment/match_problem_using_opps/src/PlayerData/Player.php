<?php
  namespace PlayerData;

  class Player {
    public $name;
    public $run_scored;

    /**
     * Initializing the Player class member variables
     * 
     * @param $name
     * Player name
     * 
     * @param $run_scored
     * Run scored by a player 
     */

    function __construct($name, $run_scored) {
      $this->name = $name;
      $this->run_scored = $run_scored;
    }

  }


