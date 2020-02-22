<?php
  namespace Seats;

  /**
   * Defines the function of the Seat class
   */
  interface SeatInterface {
    
    /**
    * Check there is any faulty sitting arrangement or not 
    * 
    * @param $seat Seat
    * -Array which contains the sitting arrangement 
    * 
    * @return $Seat Seat 
    * -If there is no falty seats the retirn the seat array
    * Otherwise transfers the control to the arrange_seat() 
    * which returns the correct sitting arrangement and then
    * send the correct sitting arrangement 
    * 
    */  
    public function check_seat_arrangement($seat);

    /**
    * Arrange the falty sitiing arrangement
    * 
    * @param $seat Seat object
    * Array which contains the sitting arrangement with falt
    * 
    * @param $temp Seat Object
    * The person needs to be replaced
    * 
    * @return Seat object
    * Return the correct sitting arrangement     
    */
    public function arrange_seat($seat, $temp);
  
  }