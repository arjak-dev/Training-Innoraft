<?php
  //Logut a user end his/her session and redirecting to the home page
  session_start();
  session_unset();
  session_destroy();
  header('location: home');
