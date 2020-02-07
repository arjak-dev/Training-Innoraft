<?php

    class people {
        public $name;
        public $gender;
    }
    class seat {
        public $person_name;

        function seat_arrange($seat){
            

            //--------------------getting any fault seating arrangement----------//
            $i=1;
            $temp =[];
            while($i<(count($seat)-1)){
                
                if($seat[$i]->person_name->gender == 'F'){
                    if($seat[$i-1]->person_name->gender == 'F' || $seat[$i+1] == 'F'){
                            $temp=$seat[$i];
                            $seat[$i] = 0;
                            $i = $i+1;
                }
               
            }
            $i++; 
            }

            //-------------------checking if any correction is required or not-------------//
            if($temp){
                //---------getting position where the female can be put and put her there and picking up the male--------------------//
                        $temp2=[];
                        $j=1;
                        while($j<(count($seat)-1)){
                            if($seat[$j] && $seat[$j]->person_name->gender == 'M' ){
                                
                                if($seat[$j-1]->person_name->gender == 'M' || $seat[$j+1] == 'M'){
                                        $temp2 = $seat[$j];
                                        $seat[$j]=$temp;
                                        $i=$i+1;
                                        break;
                                }
                        
                            }
                        $j++; 
                    }
                    //------------putting the male in the previous position of the female------------// 
                    $j=0;
                    while($j<(count($seat)-1)){
                        if(!$seat[$j]){
                            $seat[$j]=$temp2;
                            
                        }
                        $j++;
                    }
                    return $seat;
            }
            else return $seat;
    }
}

?>