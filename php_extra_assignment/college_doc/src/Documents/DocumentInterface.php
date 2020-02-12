<?php
  namespace Documents;

  /**
   * Define the function of Docmuent class.
   * 
   */
  interface DocumentInterface{
    /**
     * Send Documents to collge.
     * 
     * @param College $college
     * Array contains data of colleges
     * 
     * @param Document $doc
     * Array contains all the documents
     * 
     * @return College 
     * College Data with all the documents send and adds a status that a document is send 
     * successfully or not. 
     */

    public function putdoc($college , $doc);
    
  }