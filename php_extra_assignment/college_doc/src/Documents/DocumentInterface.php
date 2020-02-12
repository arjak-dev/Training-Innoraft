<?php
  namespace Documents;

  interface DocumentInterface{
    /**
     * Send Documents to collge.
     * 
     * @param $college
     * Array contains data of colleges
     * 
     * @param $doc
     * Array contains all the documents
     * 
     * @return 
     * College Data with all the documents send and adds a status that a document is send 
     * successfully or not. 
     */

    public function putdoc($college , $doc);
  }