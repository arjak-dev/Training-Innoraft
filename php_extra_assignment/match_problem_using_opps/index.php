<?php
  include("class_def.php");
  
  //Initializing Players
  $players[0] = new Players("a", 60);
  $players[1] = new Players("b", 50);
  $players[2] = new Players("c", 70);
  $players[3] = new Players("d", 30);
  $players[4] = new Players("e", 40);
  $players[5] = new Players("f", 180);
  $players[6] = new Players("g", 105);
  $players[7] = new Players("h", 54);

  //Initializing Teams
  $team[0] = new Team([$players[0], $players[1]], "w");
  $team[1] = new Team([$players[2], $players[3]], "x");
  $team[2] = new Team([$players[4], $players[5]], "y");
  $team[3] = new Team([$players[6], $players[7]], "z");

  //Initializing matches
  $match[0] = new Match($team[0], $team[1]);
  $match[1] = new Match($team[0], $team[2]);
  $match[2] = new Match($team[0], $team[3]);
  $match[3] = new Match($team[1], $team[2]);
  $match[4] = new Match($team[1], $team[3]);
  $match[5] = new Match($team[2], $team[3]);

  
  $match[0]->gethighestscore($match);
  $match[0]->getournamentwinner($match);
  $match[0]->getmaximumscore($match);

  


?>