<?php
  include('connection.php');
  /**
   * Defines te Structure of the User class 
   * 
   * @var user_name String
   * The user name of the user that is used to authenticate
   * 
   * @var first_name String
   * The first nam eof the user 
   * 
   * @var last_name String 
   * The last name of the user
   * 
   * @var email_id String 
   * The email id of the user 
   * 
   * @var phone_no Longint
   * The phone no. of the user 
   * 
   * @var password String 
   * The password of the user
   */
  class User{
    public $user_name;
    public $first_name;
    public $last_name;
    public $email_id;
    public $phone_no;
    public $password;
    public $database;

    /**
     * Constructor of user class 
     * 
     * @param user_name String
     * The user name which is authenticate 
     * 
     * @param first_name String 
     * First name of the user 
     * 
     * @param last_name String 
     * Last Name of the user 
     * 
     * @param email_id String 
     * Email id of the user
     * 
     * @param phone_no long int 
     * Phone no. of the user
     * 
     * @param password string 
     * the password of the user that is used to athenticate 
     */
    function __construct ($user_name, $first_name, $last_name, $email_id, $phone_no, $password)
    {
      $this->user_name = $user_name;
      $this->first_name = $first_name;
      $this->last_name = $last_name;
      $this->email_id = $email_id;
      $this->phone_no = $phone_no;
      $this->password = $password;
      $this->database = new DatabaseConnection();
    }

    /**
     * Put the data of the userin the database
     * 
     * @param user User
     * User class object contains the data of the user
     * 
     * @return true 
     * if the data is successfully entered in the database then it returns true 
     */
    function putdata ($user) {
      $sql = "select * from user where user_name = '$user->user_name'";
      $result = $this->database->runquery($sql);
      if ($result->num_rows > 0) {
        return "The User Name is already present";
      }
      $sql = "insert into user(user_name, first_name, last_name, email_id, phone_no, password)
      values('$this->user_name','$this->first_name', '$this->last_name', '$this->email_id', '$this->phone_no', '$this->password')";
      if ($this->database->runquery($sql)) {
        return true;
      } else {
        return "error";
      }
    }
    
    /**
     * Authenticate the user from the data stroed in the database.
     * 
     * @param user_name String  
     * User name of the User
     * 
     * @param password String 
     * Password of the user 
     * 
     * @return 
     * true if the user nam ena d the password matches with the data in the database
     * else return false 
     * and if any database problem occurs then it displays that 
     * 
     */
    function checkuser ($user_name, $password) {
      $sql = "select * from user where binary user_name = '$user_name' and binary password = '$password'";
      $result = $this->database->runquery($sql);    
      if (mysqli_num_rows($result)) {
        $row = $result->fetch_assoc();
        return $row['user_id'];;
      }
    }

    /**
     * @param  user_id int 
     * @return mysqli object 
     */
    function getuserdetails($user_id) {
      $sql = "Select * from user where user_id = '$user_id'";
      return $this->database->runquery($sql);
    }

   /**
    * update the user data 
    * @param  [int] $user_id    ID no. of a user
    * @param  [String] $first_name First name of the user 
    * @param  [String] $last_name  Last name of the user
    * @param  [String] $email_id   Email id of the user
    * @param  [Long] $phone_no   Phone number of the user
    * @param  [String] $img      Path of the user profile picture that is stored in the server  
    */
    function updateuser($user_id, $first_name, $last_name, $email_id, $phone_no, $img) {
      if ($img != null) {
        $sql = "update user set image = '$img' where user_id = '$user_id'";
        $this->database->runquery($sql);
      }
      $sql = "update user set first_name = '$first_name', last_name = '$last_name', email_id = '$email_id', 
            phone_no = '$phone_no' where user_id = '$user_id'";
      $this->database->runquery($sql);
    }

  }
