<?php
    class college {
        public $college_id;
        public $college_name;
        public $docs = [];
    }
    class document { 
        public $doc_name;
        public $doc_type;
        public $doc_college;
        public $doc_sent;
        public $doc_sent_status;


        function putDoc($student , $doc){
            // print_r($student);
            
            foreach($doc as $key=>$value){
                if($value->doc_sent == 1){
                    $value->doc_sent_status = "Success";
                }else{
                    $value->doc_sent_status = "failed";
                }
                $i=0;
                if($value->doc_college == ""){
                       foreach($student as $k=>$v){
                           $v->docs[]=$value;
                       }
                    
                }else{
                    foreach($student as $k=>$v){
                        if($v->college_id == $value->doc_college){
                            $v->docs[]=$value;
                        }

                    }
                }
                
            }
            return $student; 
        }
    }
    
?>