<?php
    
  class TablePrinting {
    /**
     * Print the multiplicaton table.
     */
    public function multiplicationtable() {
      /**
       * @var $op1 
       * Operator 1 in th multiplication
       * @var $op2
       * Operator 2 in th multiplication
       */
      echo "<table border='1px solid black' style='border-collapse: collapse'>"; 
        for ($op1=1; $op1<=5; $op1++) {
          echo "<tr>";
          for($op2=1; $op2<=5; $op2++) {
            echo "<td>$op1 * $op2 =".($op1*$op2)."</td>";
          }
          echo "</tr>";
        }
      echo "</table>";
    }

  }

  $obj = new TablePrinting();
  $obj->multiplicationtable();
