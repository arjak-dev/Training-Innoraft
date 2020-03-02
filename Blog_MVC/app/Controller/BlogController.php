<?php
namespace Controller;
include('vendor/autoload.php');
use Model\Blog;
/**
 * The blog controller is user to control the different task related to a blog 
 * like deleting blogs editing blogs etc.
 */
class BlogController {
  public $blog;

  /**
   * BlogController constructor initialize the BLog class.
   *
   * @return void
   */
  function __contruct() {
    $this->blog = new Blog(" ", " ", " ");
  }

  /**
   * The fucntion used to delete the blog on the user request
   * the owner of the blog can only delete the Blog.
   *
   * @return void
   */
  public function delete($q) {
    (new Blog(" ", " ", " "))->deleteblog($q);
  }

  /**
   * The function is used to edit the blog as pe the user request
   * the owner of the blog can only edit the blog.
   *
   * @param [String] $title The title of the blog.
   * @param [String] $body The body of the blog.
   * @param [int] $blog_id The blog id of the blog whose data is to be updated.
   * @return void
   */
  public function updateblogrequest($title, $body, $blog_id) {
    (new Blog(" ", " ", " "))->updateblog($blog_id, $title, $body);
  }

  /**
   * Get the data for the edit page.
   *
   * @param [int] $blog_id The blog id of the blog whose data is requires.
   * @var $blogdata Fetching the blog data.
   * @return $blogdata Associative array.
   * The requested blog data.
   */
  public function geteditpagedata($blog_id){
    $result = (new Blog(" ", " ", " "))->getblogdetails($blog_id);
    $blogdata = $result->fetch_assoc();
    return $blogdata;
  }

  /**
   * Upload the image of the blog.
   *
   * @param [String] $fileName The name of the file which the user uploads.
   * @param [String] $fileTempName The temporary file name which is stored 
   * in the buffer.
   * @param [String] $fileType The type of the file.
   * @param [int] $fileError Holding the error when the file is uploaded.
   * @return [String] $img 
   * The path of the that is to be stored in the database.
   */
  public function blogimageupload($fileName, $fileTempName, 
  $fileType, $fileError){
    $fileExtension = explode('.', $fileName);
    $allowed = array("jpg", "jpeg", "png");
    $fileActualExtension = strtolower(end($fileExtension));
    if (in_array($fileActualExtension, $allowed)) {
      if ($fileError === 0) {
        $fileNewName = uniqid(rand(), true) . "." . $fileActualExtension;
        $fileDestination = "upload/" . $fileNewName;
        move_uploaded_file($fileTempName, $fileDestination);
        $img = $fileDestination;
      }
    } else {
      $img = "";
    }
  }
  
}