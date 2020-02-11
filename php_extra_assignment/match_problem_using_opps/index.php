<?php
  
  include("Match.php");
  include("Team.php");
  include("Player.php");
  use Match\Match;
  use Team\Team;
  use Player\Player;
  
  //Initializing Players
  $player_name = [
    "a",
    "b",
    "c",
    "d",
    "e",
    "f",
    "g",
    "h"
  ];
  $player_score = [
    60,
    50,
    70,
    30,
    40,
    180,
    105,
    54
  ];
  foreach ($player_name as $key => $value){
    $players[$key] = new Player($value, $player_score[$key]);
  }
  

  //Initializing Teams
  $team = [
    new Team([$players[0], $players[1]], "w"),
    new Team([$players[2], $players[3]], "x"),
    new Team([$players[4], $players[5]], "y"),
    new Team([$players[6], $players[7]], "z"),
  ];

  //Initializing matches

  $match = [
    new Match($team[0], $team[1]),
    new Match($team[0], $team[2]),
    new Match($team[0], $team[3]),
    new Match($team[1], $team[2]),
    new Match($team[1], $team[3]),
    new Match($team[2], $team[3])
  ];
  
  $match[0]->gethighestscore($match);
  $match[0]->getournamentwinner($match);
  $match[0]->getmaximumscore($match);

  


?>