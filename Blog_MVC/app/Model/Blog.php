<?php
namespace Model;

/**
 * Describes the structure of the Blog data.
 * @var title String 
 * The title of the blog 
 * @var body String
 * The body of the blog
 * @var  img String
 * The path of the image with the image name of the Blog 
 * @var database DatabaseConnection 
 * The object of the Dtabaseconnection class use to 
 * run the query string
 */
class Blog {
    public $title;
    public $body;
    public $img;
    public $conn;
    public $database;

    /**
     * Constructor of Blog class.
     * 
     * @param $title String
     * Title of the blog.
     * 
     * @param $body String 
     * Body of the blog.
     * 
     * @param $img String 
     * Contains the source path of the blog image.
     * 
     */
    function __construct ($title, $body, $img)
    {
      $this->title = $title;
      $this->body = $body;
      $this->img = $img;
      $this->database = new DatabaseConnection();
    }

    /**
     * Put the Blog data in the database.
     * 
     * @param $user_id int
     * User id of the user who writes the blog.
     * 
     * @param $blog Blog
     * Contains the data of the blog.
     */
    function putdata ($user_id, $blog) {
      $sql = "select * from blog where blog_title = '$blog->title'";
      $result = $this->database->runquery($sql);
      if ($result->num_rows > 0) {
        return "The title is already present";
      }
      $time = time();
      $sql = "insert into blog(user_id, blog_title, blog_body, time, image) 
      values('$user_id', '$blog->title', '$blog->body', '$time', '$blog->img')";
      $this->database->runquery($sql);
    }

    /**
     * Get the BLogs of a particular user from the database.
     * 
     * @param $user_id int 
     * The user id of the blog whoes blog is to be fetch.
     * 
     * @return 
     * if results are present return a mysqli object contains all the data of
     *  blogs 
     * of a user
     * else return false.
     */ 
    function getuserblog ($user_id) {
      $sql = "select * from blog where user_id = '$user_id'";
      $result = $this->database->runquery($sql);
      return $result;
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
    function getall($page_no) {
      $sql = "select * from blog LIMIT 2 OFFSET $page_no";
      return $this->database->runquery($sql);
    }

    /**
     * Get the user name for a particular User id.
     * 
     * @param $user_id int 
     * The user id whose name is to be fetched.
     * 
     * @return $user_name String 
     * user name.
     */
    function getusername($user_id) {
      $sql = 
      "select first_name,last_name,image from user where user_id = '$user_id'";
      $result = $this->database->runquery($sql);
      $row = $result->fetch_assoc();
      return $row;
    }

    /**
     * Get the blog details for a particular blog id.
     * 
     * @param $blog_id int 
     * Blog id for a blog.
     * 
     * @return 
     * if result is present the it return a mysqli object
     * else 
     * return databae error. 
     */
    function getblogdetails ($blog_id) {
      $sql = "select blog_title,blog_body,image from blog where blog_id = '$blog_id'";
      return $this->database->runquery($sql);
    }

    /**
     * Update the Blog title and the body.
     * 
     * @param $blog_id int 
     * Blog id of the blog which is to be update.
     * 
     * @param $title String 
     * The title of the blog to be update.
     * 
     * @param $body string 
     * The title of the body that is to be updated.
     * 
     * @return mysqli object
     */
    function updateblog ($blog_id, $title,$body) {
      $time = time();
      $sql = "update blog set blog_title = '$title', blog_body = '$body', time = '$time' where blog_id = '$blog_id'";
      return $this->database->runquery($sql); 
    }

    /**
     * Delete a particular blog from the database.
     * 
     * @param $blog_id int 
     * The id of the blog that is to be deleted.
     * 
     */
    function deleteblog($blog_id) {
      $sql = "delete from blog where blog_id = '$blog_id'";
      $this->database->runquery($sql);
    }

    /**
     * Count total the no. of blog present in the database.
     * @return int No. of blogs present int he Database. 
     * 
     */
    function countblog() {
      $sql = "select count(*) as a from blog";
      $result = $this->database->runquery($sql);  
      $count = $result->fetch_assoc();
      return $count['a'];
    }

  }