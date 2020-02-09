<?php
class players{
  public $name;
  public $run_scored;
  function __construct($name,$run_scored){
    $this->name = $name;
    $this->run_scored = $run_scored;
  }
}
class team{
  public $name;
  public $team;
   
  function __construct($players,$name){
    $this->team = $players;
    $this->name = $name;
  }
}
class match{
  public $team1;
  public $team2;
  function __construct($team1,$team2){
    $this->team1=$team1;
    $this->team2=$team2; 
  }

  function getHighestScore($match){
    // print_r($match[0]->team1->team[0]);
    $max=0;
    $max_player_name = "";
    foreach($match as $key=>$value){
      foreach($value as $k=>$v){
        foreach($v->team as $k2=>$v2){
          if($v2->run_scored > $max){
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
  function getTotalTeamScore($team){
    $output = [];
    foreach($team as $key=>$value){
      $sum = 0;
      foreach($value->team as $k=>$v){
        $sum += $v->run_scored;
      }
      array_push($output, ["$value->name"=>$sum]);
    }
    return $output;
  }


  function getTournamentWinner($match){
    foreach($match as $key=>$value){
      $total_team_score=$this->getTotalTeamScore($value);
      $max=0;
      foreach($total_team_score as $k=>$v){
        // print_r( $v);
        foreach($v as $k1=>$v1){
          if($v1> $max){
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
  function getMaximumScoreInAMatch($match){
    $max =0;
    $maximum_scoring_match = "";
    foreach($match as $key=>$value){
      $sum=0;
      $total_team_score =$this->getTotalTeamScore($value);
      foreach($total_team_score as $k=>$v){
        foreach($v as $k1=>$v1){
          $sum += $v1; 
        }
      }
      if($sum>$max){
        $max= $sum;
        $maximum_scoring_match = $key;
      }
    }
    echo "<h2>";
    echo "Maximum scoring match: Match ".($key+1)." :Score :".$max;
    echo "</h2>";
  }

}

?>