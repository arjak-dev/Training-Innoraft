<?php
  namespace Seats;

  interface SeatInterface {
    
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
      
    public function check_seat_arrangement($seat);

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

      public function arrange_seat($seat, $temp);
  
  }