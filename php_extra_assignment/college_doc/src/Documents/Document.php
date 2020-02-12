<?php
  namespace Documents;

  class Document implements DocumentInterface { 
    public $doc_name;
    public $doc_type;
    public $doc_college;
    public $doc_sent;
    public $doc_sent_status;

    /**
     * Initializing the Document data mambers
     * 
     * @param $doc_name 
     * Document Name
     * 
     * @param $doc_type
     * Document Type
     * 
     * @param $doc_collge
     * In which college the document has to be delivered
     * 
     * @param $doc_sent 
     * Indicating the Document has sent successfully or not 
     */
  
    function __construct($doc_name, $doc_type, $doc_college, $doc_sent){
      $this->doc_name = $doc_name;
      $this->doc_type = $doc_type;
      $this->doc_college = $doc_college;
      $this->doc_sent = $doc_sent;
    }

    /**
     * @inheritDoc
     */
    
    function putdoc($college , $doc){
      foreach ($doc as $key => $value) {
        if ($value->doc_sent == 1) {
            $value->doc_sent_status = "Success";
        } else {
            $value->doc_sent_status = "failed";
        }
        $i=0;
        if ($value->doc_college == "") {
                foreach ($college as $k => $v) {
                    $v->docs[] = $value;
                }
        } else {
            foreach ($college as $k => $v) {
                if ($v->college_id == $value->doc_college) {
                    $v->docs[] = $value;
                }
            }
        }    
      }
      return $college; 
    }

  }

 