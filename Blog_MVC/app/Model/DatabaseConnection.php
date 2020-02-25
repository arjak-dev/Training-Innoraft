<?php
  namespace Model;
  class DatabaseConnection {
    public $server_name; 
    public $user_name;
    public $password;
    public $db_name;

    /**
     * DatabaseConnection class constructor
     * sets teh database connection variable
     */
    function __construct(){
      $this->server_name = 'localhost';
      $this->user_name = 'root';
      $this->password = 'Word@579';
      $this->db_name = 'blog_db';
    }
    
    /**
     * @return [type]
     */
    function connection(){
      $conn = new \mysqli($this->server_name, $this->user_name, $this->password, $this->db_name);
      return $conn;
    }

    /**
     * Run the query
     * 
     * @param sql String 
     * The query string that to be used to fetch the data 
     */
    function runquery($sql) {
      $conn = $this->connection();
      if ($result = $conn->query($sql)) { 
        return $result;
      } else {
        return false;
      }
    }
  }