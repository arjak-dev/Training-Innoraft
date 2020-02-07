
<?php


    class question3{
        public function chess(){
            echo "<table border='1px solid black' cellspacing = '0px'>";
            for($row=0;$row<9;$row++){
                echo "<tr>";
                for($col=0;$col<9;$col++){
                    $color_setting = $row + $col;
                     if($color_setting%2==0)
                        echo "<td width=40px height=40px style='background-color:white'></td>";
                    else    
                        echo "<td width='40px' height='40px' style='background-color:black'></td>";
                }
                echo "</tr>";
            }
            echo "</table>";

        }
    }
    $obj = new question3();
    $obj->chess();

?>