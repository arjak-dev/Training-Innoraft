
<?php
  class ChessDesign {
    
    /**
     * Print the chess Design.
     */

    public function printchess() {
      /**
       * @var $row 
       * Indicates the row of the chess board.
       * @var $col
       * Indicates the column of the chess board.
       * @var $color_setting
       * Detect the color of the block as per the value of the $color_settings
       *
       */
      echo "<table border='1px solid black' cellspacing = '0px'>";
      for ($row=0; $row<9; $row++) {
        echo "<tr>";
        for ($col=0; $col<9; $col++) {
            $color_setting = $row + $col;
              if($color_setting%2 == 0)
                echo "<td width=40px height=40px style='background-color:white'></td>";
            else    
                echo "<td width='40px' height='40px' style='background-color:black'></td>";
        }
        echo "</tr>";
      }
      echo "</table>";
    }

  }
  
  $obj = new ChessDesign();
  $obj->printchess();
