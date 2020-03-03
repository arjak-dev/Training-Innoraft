<?php
  //Including the classes using the autoloader.
  include('vendor/autoload.php');
  use Controller\BlogController;

  //creating the instance of the BlogController.
  $blog_controller = new BlogController();

  /**
   * Getting the data from the View using POST request.
   * @var $title String The edited title of the blog.
   * @var $body String The edited body of the blog.
   * @var $blog_id int The blog id which is required to identify a unique row of
   * the blog in the database.
   */
  if (isset($_POST['save'])) {
    $title = addslashes($_POST['title']);
    $title = htmlspecialchars($title);
    $body = addslashes($_POST['blog-body']);
    $body = htmlspecialchars($body);
    $blog_id = $_GET['q'];
    $blog_controller->updateblogrequest($title, $body, $blog_id);
    header('location: my blog');
  }

  /**
   * This code is preparing the data rewured by the View to the edit page.
   * @var [int] $blog_id The id f the blog whose data is reqired.
   */
  if (isset($_GET['q'])) {
    $blog_id = $_GET['q'];
  }

  //getting the blog data to send to the view.
  $blogdata = $blog_controller->geteditpagedata($blog_id);

  //Loading the view and utting the data as per the requirments.
  require_once('app/View/edit blog.php');