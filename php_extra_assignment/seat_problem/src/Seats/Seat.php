<?php
  namespace Seats;
  
  /**
   * It specifies the structure to store each seat data with the person who sits on it.
   * 
   * @var $people_name Person
   * -Defines a person
   */
  class Seat implements SeatInterface {
    public $person_name;

    /**
      * Initializing the Seat class data members
      * 
      * @param $people_name Person
      * A people class onject hwo sits in that seat 
      * 
      */
    function __construct($person_name) {
      $this->person_name = $person_name;
    }

    /**
     * {@inheritdoc}
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
     * @inheritDoc
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

