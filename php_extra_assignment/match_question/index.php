<?php
    include("data.php");
    //print_r($data);
    getHightestScore($data);
   getTournamentWinnerTeam($data);
   getMatchMaximunScore($data);
    function getHightestScore($data){
        $max=0;
        $max_key = "";
    foreach($data as $key_top=>$value_top)
        foreach($value_top as $key=>$value){
           foreach($value as $key1=>$value2){
                if($value2>$max){
                    $max = $value2;
                    $max_key = $key1;
                }
           }
        }
        echo "<b>Highest scorer Player In the tournament: </b> ";
        echo "$max_key $max"; 
        echo "</br>";
    }

    function getTournamentWinnerTeam($data){
        $max = 0;
        $team = "";
        $match = "";
        $match_won_array = array();
            foreach($data as $key=>$value){
                foreach($value as $key1=>$val){
                        $sum =array_sum($val);
                        if($max<$sum){
                            $max = $sum;
                            $team = $key1;
                        }
                    
                }
                $match_won_array += array($team=>$max);
                
            }
            $max=0;
            $team= array_keys($match_won_array,max($match_won_array));
        echo "<b>Tournament winner :</b> $team[0]";
        echo "</br>";
    }
   
    function getMatchMaximunScore($data){
       
    $match_scores =array();
    foreach($data as $key=>$val){
        $sum = 0;
        foreach($val as $key1=>$value){
            $sum += array_sum($value);
            
        }
        $match_scores +=array($key=>$sum); 
    }
    // print_r($match_scores);
    $key = array_keys($match_scores,max($match_scores));
       
    echo "<b> Maximum score in a match  :</b>";
    print_r($key[0]." ");
    print_r(max($match_scores));
    }





?>