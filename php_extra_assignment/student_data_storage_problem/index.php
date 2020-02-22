<?php

  include("./vendor/autoload.php");

  //getting the file content 
  $file = file_get_contents ("data.json");
  $data = json_decode ($file, true);
  
  $i=0 ;
  // initializing Student Marks Data Input 
  foreach ($data['marks'] as $key => $value) {
    $marks[$i] = new Student\Marks($value);
    $i +=1;
  }

  $i=0;
  //Initializing student data
  foreach ($data['student'] as $key => $value){
    $student[$i]= new Student\StudentData ($value['id'], $value['name'], $value['DOB'], $value['grade'], $marks[$i]);
     $i += 1;
  }

  $i = 0;
  //Initializing Subject data input 
  foreach ($data['subject'] as $key => $value){
    $subject[$i] = new Subject\Subject ($value['name'], $value['code'], $value['minmum_marks_to_pass'], $value['grade']);
    $i += 1;
  } 
  //print_R($student);
  ?>
  <!Doctype Html>
  <html lang="en">
    <head>
      <title>
        Marksheet
      </title>
      <link rel = "stylesheet" href = "/Training-Innoraft/php_extra_assignment/bootstrap.css">
      <link rel = "stylesheet" href = "/Training-Innoraft/php_extra_assignment/style.css">
    </head>
    <body>
      <div class="container-fluid">
        <nav class="navbar navbar-light bg-dark ">
          <h1 class="text-white">Student Marksheet:</h1>
        </nav>
        </br>
        </br> 
        <form action="index.php" method="POST">
          <div class="form-group">
            <label>Enter Student Id:</label>
            <input type="text" class ="form-control" name="id" required>
            <input type="submit" class="btn btn-primary" name="submit">
            <a href="Admin" class="btn btn-primary">Admin</a>
          </div>
        </form>
        </br>
        </br>
        <div class="col-lg">
          
          <?php
            if(isset($_POST['submit'])){
              $id = $_POST["id"];
              //Print the mark sheet of a student with id 'st2'
              if($id){
                echo "<lable>Result</lable>";
                $student[0]->getstudentstatus($id, $student,$subject);
              }
            }  
          ?>
        </div>
      </div>
    </body>
  </html>
  
  
    