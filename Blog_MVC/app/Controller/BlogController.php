<?php
namespace Controller;
include('vendor/autoloader.php');
use Model\Blog;
/**
 * The blog controller is user to control the different task related to a blog 
 * like deleting blogs editing blogs etc.
 */
class BlogController {
  public $BLog;

  /**
   * BlogController constructor initialize the BLog class
   *
   * @return void
   */
  function __contruct() {
    $Blog = new Blog(" ", " ", " ");
  }
  /**
   * The fucntion used to delete the blog on the user request 
   * The owner of the blog can only delete the Blog 
   *
   * @return void
   */
  public function delete($q) {
    $this->Blog->deleteblog($q);
  }
}