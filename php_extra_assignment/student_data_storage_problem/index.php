<?php

  include("Class_define.php");

  //initializing Student Marks Data Input 
  $marks[0] = new StudentMarks(['PH'=>20, 'CM'=>40]); 
  $marks[1] = new StudentMarks(['PH'=>30, 'MT'=>70]);
  $marks[2] = new StudentMarks(['EN'=>50]);
  $marks[3] = new StudentMarks(['MT'=>50, 'CM'=>30]);
 
  //Initializing student data
  $student[0] = new StudentData('st1', 'John', mktime(0, 0, 0, 12, 20, 1998), 12, $marks[0]);  
  $student[1] = new StudentData('st2', 'Arjak', mktime(0, 0, 0, 5, 10, 1998), 12, $marks[1]);
  $student[2] = new StudentData('st3', 'Kunal', mktime(0, 0, 0, 12, 20, 1998), 11, $marks[2]);
  $student[3] = new StudentData('st4', 'Maity', mktime(0, 0, 0, 12, 20, 1998), 10, $marks[3]);
  
  //Initializing Subject data input  
  $subject[0] = new SubjectData("physics", "PH", 30, 12);
  $subject[1] = new SubjectData("Maths", "MT", 40, 10);
  $subject[2] = new SubjectData("English", "EN", 30, 11);
  $subject[3] = new SubjectData("Computer", "CM", 40, 10);
  $subject[4] = new SubjectData("Maths", "MT", 30, 12);
  $subject[5] = new SubjectData("Computer", "CM", 30, 12);

  //Print the mark sheet of a student with id 'st2'
  $student[0]->getstudentstatus('st2',$student,$subject);
   
?>