<?php
include('connection.php');
  class BLog{
    public $title;
    public $body;
    public $conn;
    function __construct($title, $body)
    {
      $this->title = $title;
      $this->body = $body;
      $this->conn = (new DatabaseConnection())->connection();
    }

    function putdata($user_id,$blog){
      $time = time();
      $sql = "insert into blog(user_id,blog_title,blog_body,time) 
      values('$user_id','$blog->title','$blog->body','$time')";
      if ($this->conn->query($sql)) {
        // echo "Blog Added successfully";
      } else {
        echo $this->conn->error;
      }
      $this->conn->close();
    }

    function getuserblog($user_id){
      $conn = (new DatabaseConnection())->connection(); 
      $sql = "select * from blog where user_id = '$user_id'";
      if ($result = $conn->query($sql)) {
          return $result;
      } else {
        return false;
      }
    }

    function getall(){
      $conn = (new DatabaseConnection())->connection();
      $sql = "select * from blog";
      if ($result = $conn->query($sql)) {
          return $result;
      } else {
        return false;
      }
    }

    function getusername($user_id) {
      $conn = (new DatabaseConnection())->connection();
      $sql = "select first_name, last_name from user where user_id = '$user_id'";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      $user_name = $row['first_name']." ".$row['last_name'];
      return $user_name;
    }

    function getblogdetails ($blog_id) {
      $conn = (new DatabaseConnection())->connection();
      $sql = "select blog_title,blog_body from blog where blog_id = '$blog_id'";
      if ($result = $conn->query($sql)) {
        return $result;
      } else {
        echo $conn->error;
      }
    }

    function updateblog ($blog_id, $title,$body) {
      $conn = (new DatabaseConnection())->connection();
      $sql = "update blog set blog_title = '$title', blog_body = '$body' where blog_id = $blog_id";
      $result = $conn->query($sql);
      $conn->close();
    }

    function deleteblog($blog_id){
      $conn = (new DatabaseConnection())->connection();
      $sql = "delete from blog where blog_id = '$blog_id'";
      if ($conn->query($sql))
        echo "BLog deleted";
      $conn->close();
    }
  }