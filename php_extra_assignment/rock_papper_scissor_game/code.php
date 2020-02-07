<?php
    class stone_paper_scissor {

            public $computer_entry;
            function __construct(){
                $this->computer_entry= " ";
            }
            public function getRandomValues(){
                
                
                return mt_rand(1,3);
            }

            public function getComputerResult() {


                
                $obj = new stone_paper_scissor();
                
               
                $rand = $obj->getRandomValues(); 
                $this->computer_entry=$rand;
                // print_r($computer_entry);
                
                return $this->computer_entry;
                


            }


            public function getFinalResult($computer_input,$user_input){
            //    echo "$computer_input";
                if($computer_input == $user_input){
                    return "Draw!!";
                }else{ 
                if($computer_input == 1 && $user_input == 2)
                       {
                            return "You won";
                            
                        }
                
                     if($computer_input == 2 && $user_input == 3)
                        {
                            return "You Own";
            
                        }
                        if($computer_input == 3 && $user_input == 1)
                        {
                            return "You Own";
                        }
                        return "You Loose";
                }
            }
            

        
    }

    // if(isset($_POST['stone'])){
    //     $code = 1;
    //     $obj = new stone_paper_scissor();
    //     $obj->getResult($code);
    // }
    // if(isset($_POST['paper'])){
    //     $code = 2;
    //     $obj = new stone_paper_scissor();
    //     $obj->getResult($code);
    // }
    // if(isset($_POST['scissor'])){
    //     $code = 3;
    //     $obj = new stone_paper_scissor();
    //     $obj->getResult($code);
    // }

?>
