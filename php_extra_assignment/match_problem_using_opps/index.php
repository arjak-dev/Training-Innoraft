<?php
  include("class_def.php");
  //-------initializing the players------------//
  $players[0]=new players("a",60);
  $players[1]=new players("b",50);
  $players[2]=new players("c",70);
  $players[3]=new players("d",30);
  $players[4]=new players("e",40);
  $players[5]=new players("f",180);
  $players[6]=new players("g",105);
  $players[7]=new players("h",54);

  // print_r(json_encode($players[0]));

  //---------initializing teams-----------------//
  $team[0]=new team([$players[0],$players[1]],"w");
  $team[1]=new team([$players[2],$players[3]],"x");
  $team[2]=new team([$players[4],$players[5]],"y");
  $team[3]=new team([$players[6],$players[7]],"z");


  //-----matches-------//
  $match[0]=new match($team[0],$team[1]);
  $match[1]=new match($team[0],$team[2]);
  $match[2]=new match($team[0],$team[3]);
  $match[3]=new match($team[1],$team[2]);
  $match[4]=new match($team[1],$team[3]);
  $match[5]=new match($team[2],$team[3]);

  $output = new match(1,2);
  $output->getHighestScore($match);
  $output->getTournamentWinner($match);
  $output->getMaximumScoreInAMatch($match);

  // foreach($match as $key=>$value){
  //   foreach($value as $k => $v){
  //     print_r($k);
  //     print_r($v);
  //     print_r("</br>");
  //   }
  // }

  // print_r($match[0]->team1->team[0]);
  // print_r($match[0]->team1->team[1]);

  // foreach($team as $key=>$value){
  //   foreach($value as $ky=>$val){
  //     print_r($key);
  //     echo "<br>";
  //   }
  // }



?>