<?php
  class DatabaseConnection{
    public $server_name; 
    public $user_name;
    public $password;
    public $db_name;

    function __construct(){
      $this->server_name = 'localhost';
      $this->user_name = 'root';
      $this->password = 'Word@579';
      $this->db_name = 'blog_db';
    }
    
    function connection(){
      $conn = new mysqli($this->server_name, $this->user_name, $this->password, $this->db_name);
      return $conn;
    }
  }