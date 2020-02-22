<?php
    class question2{
        public $array1;
        public $array2;
         function __construct(){
        $this->array1 = array(
            array(1,2,3),
            array(4,5,6),
            array(6,7,8),
            array(8,9,1)
        );
        $this->array2 = array(
            array(2,3,4),
            array(4,6,1),
            array(8,9,7),
            array(6,7,4)
        );

    }
        public function array_sub(){
         $row1 = count($this->array1);
         $col1 = count($this->array1[0]);
         $row2 = count($this->array2);
         $col2 = count($this->array2[0]);
         if($row1 == $row2 && $col1 == $col2){
             for($i=0;$i<$row1;$i++){
                 for($j=0;$j<$col1;$j++){
                     print_r($this->array1[$i][$j]-$this->array2[$i][$j]."  ");
                }
                echo "</br>";
             }
         }else{
             print_r("subtraction not possible");
         }
        }
    }
    $obj = new question2();
    $obj->array_sub();
?>