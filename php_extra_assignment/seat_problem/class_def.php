<?php

  class People {
    public $name;
    public $gender;

    /**
     * Initializing the People class data members
     * 
     * @param $name 
     * Name of a people
     * 
     * @param $gender
     * Gender of the people
     */

    function __construct($name,$gender) {
      $this->name = $name;
      $this->gender = $gender;
    }

  }

  class Seat {
    public $person_name;

    /**
     * Initializing the Seat class data members
     * 
     * @param $people_name
     * A people class onject hwo sits in that seat 
     * 
     */
    function __construct($person_name) {
      $this->person_name = $person_name;
    }

    /**
     * Check there is any faulty sitting arrangement or not 
     * 
     * @param $seat 
     * Array which contains the sitting arrangement 
     * 
     * @return
     * If there is no falty seats the retirn the seat array
     * Otherwise transfers the control to the arrange_seat() 
     * which returns the correct sitting arrangement and then
     * send the correct sitting arrangement 
     * 
     */

    function check_seat_arrangement($seat) {
      $i =1 ;
      $temp = [];
      while ($i < (count($seat)-1)) {
        if ($seat[$i]->person_name->gender == 'F') {
          if ($seat[$i-1]->person_name->gender == 'F' || $seat[$i+1] == 'F') {
            $temp = $seat[$i];
            $seat[$i] = 0;
            $i = $i+1;
          }  
        }
        $i++; 
      }
      if ($temp) {
        return $this->arrange_seat($seat, $temp);
      } else {
        return $seat;
      }
    }

    /**
     * Arrange the falty sitiing arrangement
     * 
     * @param $seat
     * Array which contains the sitting arrangement with falt
     * 
     * @param $temp
     * The person needs to be replaced
     * 
     * @return
     * Return the correct sitting arrangement     
     */

    function arrange_seat($seat, $temp) {
        $temp2 = [];
        $j = 1;
        while ($j < (count($seat)-1)) {
          if ($seat[$j] && $seat[$j]->person_name->gender == 'M' ) {  
            if ($seat[$j-1]->person_name->gender == 'M' || $seat[$j+1] == 'M') {
              $temp2 = $seat[$j];
              $seat[$j] = $temp;
              $i = $i+1;
              break;
            }
          }
          $j++; 
        }  
        $j = 0;
        while ($j < (count($seat)-1)) {
          if(!$seat[$j]) {
            $seat[$j] = $temp2;   
          }
          $j++;
        }
        return $seat;
    }

  }

?>