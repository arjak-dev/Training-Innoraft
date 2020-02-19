<?php
  class User{
    public $user_name;
    public $first_name;
    public $last_name;
    public $email_id;
    public $phone_no;
    public $password;

    /**
     * 
     */
    function __construct($user_name,$first_name,$last_name,$email_id,$phone_no,$password)
    {
      $this->user_name = $user_name;
      $this->first_name = $first_name;
      $this->last_name = $last_name;
      $this->email_id = $email_id;
      $this->phone_no = $phone_no;
      $this->password = $password;
    }

    /**
     * Put the data of the userin the database
     * 
     * $param $user User
     * User class object contains the data of the user
     * 
     * @return true 
     * if the data is successfully entered in the database then it returns true 
     */
    function putdata($user){
      include('connection.php');
      $conn = (new DatabaseConnection())->connection();
      $sql = "select * from user where user_name = '$user->user_name'";
      if ($result = $conn->query($sql)) { 
        if ($result->num_rows > 0) {
            return "The User Name is already present";
          }
      } else {
        echo $conn->error;
      }
      $sql = "insert into user(user_name, first_name, last_name, email_id, phone_no, password)
      values('$this->user_name','$this->first_name', '$this->last_name', '$this->email_id', '$this->phone_no', '$this->password')";
      if (!$conn) {
        echo "connection failed";
      }
      if ($conn->query($sql) == true) {
        $conn->close();
        return true;
      } else {
        return $conn->error;
      }
    }

    function checkuser($user_name, $password){
      // echo "$user_name";
      // echo "$password";
      include('connection.php');
      $conn = (new DatabaseConnection())->connection();
      $sql = "select * from user where user_name = '$user_name' and password = '$password'";
      if($result = $conn->query($sql)) {
        // echo "Query run successfully";
        $row = $result->fetch_assoc();
        
        if (mysqli_num_rows($result)) {
          $conn->close();  
          return $row['user_id'];;
        } else {
          $conn->close();
          return false;
        }
      } else {
        echo "Database Problem please try after some time";
      }
     
    }

    
   
  }
