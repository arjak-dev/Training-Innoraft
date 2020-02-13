<?php
  namespace Documents;
  
  /**
   * Document Class defines the structure to store document details
   * 
   * @var $doc_name String
   * -Document Name
   * 
   * @var $doc_type String
   * -Type of Document 
   * 
   * @var $doc_college String 
   * -Store the college name in which the document will be send 
   * 
   * @var $doc_sent int
   * -It Specifies that a docuemnt is send or not 
   * 
   * @var $doc_sent_status String 
   * -It get set with respect to the doc_sent
   **/
  class Document implements DocumentInterface { 
    public $doc_name;
    public $doc_type;
    public $doc_college;
    public $doc_sent;
    public $doc_sent_status;

    /**
     * Initializing the Document data mambers
     * 
     * @param $doc_name String
     * Document Name
     * 
     * @param $doc_type String 
     * Document Type
     * 
     * @param $doc_collge String
     * In which college the document has to be delivered
     * 
     * @param $doc_sent int
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

 