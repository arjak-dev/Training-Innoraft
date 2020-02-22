<?php
  class LudoGame { 

     /**
      * Get the total game winner with all the inputs
      * @param $blue LudoBlock
      * Position of yogita
      * @param $green LudoBlock
      * Position of Zubin
      * @param $input Array
      * Dice inputs
      */
    function totalgamewinner($blue, $green, $input){
      $winner = [];
      foreach ($input as $key => $value){
        $blue = new LudoBlocks([1,0,0,0]);
        $green = new LudoBlocks([1,2,3,0]);
        array_push($winner, $this->gamewinner($blue, $green, $value));
      }
      $this->result($winner);
    }

    /**
      * Calcualte the game winner
      *
      * @param $blue LudoBlocks
      * Blue block in ludo
      * @param $greem LudoBlocks
      * Green Block in ludo
      * @param $input String
      * Dice input in form of string 
      */
    function gamewinner($blue, $green, $input) {
      $input_array = str_split($input);
      $i = 0;
      $winner = "";
      foreach ($input_array as $dice_input) {
        if ($i%2 == 0) {
          $i += 1;
          if( $blue->token[0] >= $dice_input){
            $blue->token[0] -= $dice_input;
              
          }
          else if ($blue->token[1] >= $dice_input) {
            $blue->token[1] -= $dice_input;
          }
          else if ($blue->token[2] >= $dice_input) {
            $blue->token[2] -= $dice_input;
          }
          else if ($blue->token[3] >= $dice_input) {
            $blue->token[3] -= $dice_input;
          }
        }else {
          $i += 1;
          if( $green->token[0] >= $dice_input){
            $green->token[0] -= $dice_input;
          }
          else if ($green->token[1] >= $dice_input) {
            $green->token[1] -= $dice_input;
          }
          else if ($green->token[2] >= $dice_input) {
            $green->token[2] -= $dice_input;
          }
          else if ($green->token[3] >= $dice_input) {
            $green->token[3] -= $dice_input;
          // echo "green";
          }
        }
        $blue_sum = array_sum($blue->token);
        $green_sum = array_sum($green->token);
        if ($blue_sum == 0) {
          return ["yogita" => $i];
        break;
        }else if ($green_sum == 0) { 
          return ["Zubin"=> $i];
        break;
        }
      }
    }
    
    /**
     * Print the result of the game 
     * 
     * @Winner Associative Array
     * conatain player name with the no. of steps he/she need to win th game 
     */
    function result($winner) {
      $total_games = count($winner);
      $probability = 0;
      $winner_count[0] = 0;
      $winner_count[1] = 0;
      $average_steps = 0;
      $yogita_step = 0;
      $Zubin_step = 0;
      foreach ($winner as $key => $value){
        foreach ($value as $k => $v) {
          echo "$k Won The Game#".($key+1)." In $v Turns <br>";
          if ($k == "yogita") {
            $yogita_step += $v;
            $winner_count[0] += 1;
          }else if ($k == "Zubin") {
            $Zubin_step += $v;
            $winner_count[1] += 1;
          }
        }
      }
      if ($winner_count[0] > $winner_count[1]) {
        $average_steps = $yogita_step/$winner_count[0];
        $probability = ($winner_count[0]/$total_games) * 100;
        echo "The Probability Of Yogita's Wining The Game is $probability%</br>";
        echo "The Average Number Of Turns is ".round($average_steps);
      }else {
        $probability = ($winner_count[1]/$total_games) * 100;
        $average_steps = $Zubin_step/$winner_count[1];
        echo "The Probability Of Zubin's Wining The Game is $probability%</br>";
        echo "The Average Number Of Turns is ".round($average_steps);
      }
    }

  }