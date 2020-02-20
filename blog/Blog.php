<?php
include('connection.php');
  class Blog{
    public $title;
    public $body;
    public $img;
    public $conn;

    /**
     * Constructor of Blog 
     * 
     * @param $title String
     * Title of the blog
     * 
     * @param $body String 
     * Body of the blog
     * 
     * @param $img String 
     * Contains the sourche path of the blog image 
     * 
     */
    function __construct ($title, $body, $img)
    {
      $this->title = $title;
      $this->body = $body;
      $this->img = $img;
      $this->conn = (new DatabaseConnection())->connection();
    }

    /**
     * Put the Blog data in the database
     * 
     * @param $user_id int
     * User id of the user who writes the blog
     * 
     * @param $blog Blog
     * Contains the data of the blog 
     */
    function putdata ($user_id, $blog) {
      $sql = "select * from blog where blog_title = '$blog->title'";
      
      if ($result = $this->conn->query($sql)) { 
        if ($result->num_rows > 0) {
            return "The title is already present";
          }
      } else {
        echo $this->conn->error;
      }
      $time = time();
      $sql = "insert into blog(user_id, blog_title, blog_body, time, image) 
      values('$user_id', '$blog->title', '$blog->body', '$time', '$blog->img')";
      if ($this->conn->query($sql)) {
        // echo "Blog Added successfully";
      } else {
        echo $this->conn->error;
      }
      $this->conn->close();
    }

    /**
     * Get the BLogs of a particular user from the database.
     * 
     * @param $user_id int 
     * the user id of the blog whoes blog is to be fetch
     * 
     * @return 
     * if results are present return a mysqli object contains all the data of blogs 
     * of a user
     * else return false
     */ 
    function getuserblog ($user_id) {
      $conn = (new DatabaseConnection())->connection(); 
      $sql = "select * from blog where user_id = '$user_id'";
      if ($result = $conn->query($sql)) {
          return $result;
      } else {
        return false;
      }
    }

    /**
     * Get over all blogs from the Database.
     * 
     * @return
     * if out is there then return a mysqli object 
     * containing all the data 
     * 
     * else return false
     */
    function getall() {
      $conn = (new DatabaseConnection())->connection();
      $sql = "select * from blog";
      if ($result = $conn->query($sql)) {
        return $result;
      } else {
        return false;
      }
    }

    /**
     * Get the user name for a particular User id
     * 
     * @param $user_id int 
     * the user id whose name is to be fetched
     * 
     * @return $user_name String 
     * user name 
     */
    function getusername($user_id) {
      $conn = (new DatabaseConnection())->connection();
      $sql = "select first_name,last_name,image from user where user_id = '$user_id'";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      // $user_name = $row['first_name']." ".$row['last_name'];
      return $row;
    }

    /**
     * Get the blog details for a particular blog id.
     * 
     * @param $blog_id int 
     * blog id for a blog
     * 
     * @return 
     * if result is present the it return a mysqli object
     * else 
     * return databae error 
     */
    function getblogdetails ($blog_id) {
      $conn = (new DatabaseConnection())->connection();
      $sql = "select blog_title,blog_body,image from blog where blog_id = '$blog_id'";
      if ($result = $conn->query($sql)) {
        return $result;
      } else {
        echo $conn->error;
      }
    }

    /**
     * Update the Blog title and the body
     * 
     * @param $blog_id int 
     * Blog id of the blog which is to be update 
     * 
     * @param $title String 
     * The title of the blog to be update
     * 
     * @param $body string 
     * The title of the body that is to be updated
     * 
     * @return 
     * result a mysqli object
     */
    function updateblog ($blog_id, $title,$body) {
      $conn = (new DatabaseConnection())->connection();
      $time = time();
      $sql = "update blog set blog_title = '$title', blog_body = '$body', time = '$time' where blog_id = '$blog_id'";
      $result = $conn->query($sql);
      return $result;
      $conn->close();
    }

    /**
     * Delete a particular blog from the database
     * 
     * @param $blog_id int 
     * the id of the blog that is to deleted
     * 
     */
    function deleteblog($blog_id) {
      $conn = (new DatabaseConnection())->connection();
      $sql = "delete from blog where blog_id = '$blog_id'";
      $conn->query($sql); 
      $conn->close();
    }
  }