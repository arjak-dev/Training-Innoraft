<?php
class Players {
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

class Match {
  public $team1;
  public $team2;

   /**
    * Initializing the Match member variables
    * 
    * @param $team1
    * Contains data of team-1 like players name 
    *
    * @param $team2
    * Contains data of team-2 
    */

  function __construct($team1, $team2) {
    $this->team1 = $team1;
    $this->team2 = $team2; 
  }

  /**
   * Get the highest Scorer of the Tournamnet
   * 
   * @param $match
   * An array contains the details of each match 
   * 
   * Prints : Highest Scorer Player Name with the run  
   */

  function gethighestscore($match) {
    
    /**
     * @var $max
     * Stores the Highest Run
     * 
     * @var $max_player_name
     * Stores the Player name who scored the highest run
     */

    $max = 0;
    $max_player_name = "";
    foreach ($match as $key => $value) {
      foreach ($value as $k => $v) {
        foreach ($v->team as $k2 => $v2) {
          if ($v2->run_scored > $max) {
            $max = $v2->run_scored;
            $max_player_name = $v2->name;
          }
        }
      }
    }
    echo "<h2>";
    echo "<b>The name of the max player is :</b> $max_player_name <b>Run Scored :</b> $max";
    echo "</h2>";

  }

  /**
   * Get the total team score 
   * 
   * @param $team
   * Contains team playing in each match that is 2 teams 
   * 
   * @return
   * An Associative array of team name and total score 
   * 
   */

  function gettotalteamScore($team) {
    
    /**
     * @var $output
     * The array which stores the team name and their toal scores 
     * 
     * @var $sum
     * Use to calculate the total score of the team  
     */

    $output = [];
    foreach($team as $key => $value) {
      $sum = 0;
      foreach($value->team as $k => $v) {
        $sum += $v->run_scored;
      }
      array_push($output, ["$value->name" => $sum]);
    }
    return $output;
  }

  /**
   * Get the Team which own the tournament
   * 
   * @param $match
   * An array contains the details of each match
   * 
   * Prints: 
   * The Winner team and the Run scored by them  
   */

  function getournamentwinner($match) {
    
    /**
     * @var $max
     * Store the score of the winner team 
     * 
     * @var $team_name
     * Stores the Winner team name 
     */

    $max = 0;
    $team_name = "";
    foreach ($match as $key => $value) {
      $total_team_score = $this->gettotalteamScore($value);
      $max = 0;
      foreach ($total_team_score as $k => $v) {
        foreach( $v as $k1 => $v1) {
          if($v1 > $max){
            $max = $v1;
            $team_name = $k1;
          }
        }
      }
    }
    echo "<h2>";
    echo "<b>The winner team :</b>$team_name <b>Score :</b> $max";
    echo "</h2>";
  }

  /**
   * Get the Maximum Scoring match (Score of team-1 + Score of team-2)
   * 
   * @param $match
   * An array contains the details of each match
   * 
   * Print:
   * The name of the maximum scring match with the total run scored in that match 
   */

  function getmaximumscore($match){
    
    /**
     * @var $max
     * Stoes the Highest total score in the match
     * 
     * @var $maximum_scoring_match
     * Store the name of Maximum scoring match 
     */

    $max = 0;
    $maximum_scoring_match = "";
    foreach ($match as $key => $value){
      $sum = 0;
      $total_team_score = $this->getTotalTeamScore($value);
      foreach ($total_team_score as $k => $v) {
        foreach ($v as $k1 => $v1) {
          $sum += $v1; 
        }
      }
      if ($sum > $max) {
        $max = $sum;
        $maximum_scoring_match = $key;
      }
    }
    echo "<h2>";
    echo "Maximum scoring match: Match ".($key+1)." :Score :".$max;
    echo "</h2>";
  }

}

?>