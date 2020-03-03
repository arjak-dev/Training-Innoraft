<?php
  namespace Model;

  /**
   * Class handles the database connections.
   * 
   * @var [String] $server_name In which server the connection is required.
   * @var [String] $user_name The user name of the Database User.
   * @var [String] $password The passwprd of the database.
   * @var [String] $db_name The database which is required to use.
   */
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
     * Creats the database connection help of all the parameters of the 
     * database.
     * 
     * @return mysqliObject The Connection object.
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
     * 
     * @return Object/Boolean
     * The reusult if present 
     * else return false.
     */
    function runquery($sql) {
      $conn = $this->connection();
      if ($result = $conn->query($sql)) { 
        return $result;
      } else {
        return $conn->error;
      }
    }
  }