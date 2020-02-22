<?php
  namespace PlayerData;

  /**
   * Defines the structure of the Player data 
   * 
   * @var $name String
   * -Player Name
   * 
   * @var $run_scored int
   * -Run scored by a player
   */
  class Player {
    public $name;
    public $run_scored;

    /**
     * Initializing the Player class member variables
     * 
     * @param $name String
     * -Player name
     * 
     * @param $run_scored int
     * -Run scored by a player 
     */
    function __construct($name, $run_scored) {
      $this->name = $name;
      $this->run_scored = $run_scored;
    }

  }


