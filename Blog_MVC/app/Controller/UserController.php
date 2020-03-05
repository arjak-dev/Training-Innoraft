<?php
  //The namespace under which this class belongs.
  namespace Controller;

  //Including the autoloaded class 
  include('vendor/autoload.php');
  use Model\User;

  /**
   * User Controller class controls all the requests from the view of the user.
   */
  class UserController {

    public $user;
    public function __construct()
    {
      $this->user = new User(" ", " ", " ", " ", " ", " ");
    }
    /**
     * Upload the user profile and return the path of the picture.
     *
     * @param [String] $fileName The name of the image file.
     * @param [String] $fileTempName The temporary file name given to the file 
     * in the buffer.
     * @param [String] $fileType The type of the file.
     * @param [String] $fileError Hold the error in the upload the file.
     * @param [String] $fileExtension  The extension of the file.
     * @return $img Image path of the profile picture that is to stored in the 
     * database.
     */
    public function profilepicupload($fileName, $fileTempName, $fileType, 
    $fileError, $fileExtension) {
      $img = "";
      $allowed = array("jpg", "jpeg", "png");
      $fileActualExtension = strtolower(end($fileExtension));
      if (in_array($fileActualExtension, $allowed)) {
        if ($fileError === 0) {
          $fileNewName = uniqid(rand(), true) . "." . $fileActualExtension;
          $fileDestination = "profile_picture/" . $fileNewName;
          move_uploaded_file($fileTempName, $fileDestination);
          $img = $fileDestination;
        }
      } else {
        $img = "";
      }
      return $img;
    }

    /**
     * Update the user data by sending the updated data to the User class 
     * which will update the data n the database.
     *
     * @param [int] $user_id The user id of the user.
     * @param [String] $first_name The first name of the user 
     * @param [String] $last_name The last name of the user
     * @param [String] $email_id The email id of the user
     * @param [Long] $phone_no The phone no. of the user 
     * @param [String] $img The path of the image that is to stored in the 
     * database 
     * @return void
     */
    public function updatedata ($user_id, $first_name, $last_name, $email_id,
     $phone_no, $img) {
        (new User(" ", " ", " ", " ", " ", " "))->updateuser($user_id, 
        $first_name, $last_name, $email_id, $phone_no, $img);
    }

    /**
     * Provide the user data taht is tobe shown in the view of the edit page.
     *
     * @param [int] $user_id The user id of the user whose data is to be 
     * provided.
     * @return $userdata Associative Array  
     * Containing all the user data.
     */
    public function provideuserdetails ($user_id) {
      $result = (new User(" ", " ", " ", " ", " ", " "))->getuserdetails($user_id);
      $userdetails = $result->fetch_assoc();
      return $userdetails;
    } 

    /**
     * Check the user name and the password of the user, return true if the
     * user and the password exits 
     * else return false.
     *
     * @param [string] $user_name
     * @param [string] $password
     * @return boolean $status
     */
    public function checkuser ($user_name, $password) {
      $status = (new User('a', 'a', 'a', 'a', 'a', 'a'))->checkuser(
        $user_name,
        $password
      );
      return $status;
    }
     /**
      * Undocumented function
      *
      * @param [type] $first_name
      * @param [type] $last_name
      * @param [type] $image
      * @param [type] $email
      * @return void
      */
    public function googlesignup($userData){
      $email = $userData['email'];
      $first_name = $userData["given_name"];
      $last_name = $userData['family_name'];
      $image = $userData['picture'];
      $user = new User($email, $first_name, $last_name, $email, " ", " ");
      // echo $user->first_name;
      $user_id = $user->putgoogledata($image);
      session_start();
      $_SESSION['code'] = $user_id;
    }

    public function googlelogin($userData) {
      $email = $userData['email'];
      $user = new User(" ", " ", " ", " ", " ", " ");
      $user_id = $user->checkgoogleuser($email);
      return $user_id;
    }

    public function changepassword($user_id, $new_password){
      return $this->user->updatepassword($user_id, $new_password);
    }
  }
