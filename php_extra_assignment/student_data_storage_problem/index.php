<?php

  include("Student.php");
  include("Subject.php");
  include("Marks.php");
  use Student\StudentData;
  use Subject\SubjectData;
  use Marks\StudentMarks;
  
  //initializing Student Marks Data Input 
  $marks = [
    ['PH'=>20, 'CM'=>40],
    ['PH'=>30, 'MT'=>70],
    ['EN'=>50],
    ['MT'=>50, 'CM'=>30]
  ];
  foreach ($marks as $key => $value){
    $marks[$key] = new StudentMarks($marks[$key]);
  }
  
  
  //Initializing student data
  $student_id = [
    'st1',
    'st2',
    'st3',
    'st4',
  ];
  $student_name = [
    'John',
    'Arjak',
    'Kunal',
    'Maity'
  ];
  $student_dob = [
    mktime(0, 0, 0, 12, 20, 1998),
    mktime(0, 0, 0, 5, 10, 1998),
    mktime(0, 0, 0, 12, 20, 1998),
    mktime(0, 0, 0, 10, 20, 1998)
  ];
  $student_grade = [
    12,
    12,
    11,
    9
  ];
  foreach ($student_id as $key => $value){
    $student[$key] = new StudentData(
      $student_id[$key], 
      $student_name[$key], 
      $student_dob[$key], 
      $student_grade[$key], 
      $marks[$key]);
  }

  //Initializing Subject data input  
  $subject_name = [
    "physics",
    "Maths",
    "English",
    "Computer",
    "Maths",
    "Computer"
  ];
  $subject_code = [
    "PH",
    "MT",
    "EN",
    "CM",
    "MT",
    "CM"
  ];

$subject_min_marks = [
  30,
  40,
  30,
  30
];

$subject_grade = [
  12,
  12,
  12,
  10,
  11,
  10
];
foreach ($subject_name as $key => $value){
  $subject[$key] = new SubjectData(
    $value ,
    $subject_code[$key], 
    $subject_min_marks[$key], 
    $subject_grade[$key]
  );
}

  //Print the mark sheet of a student with id 'st2'
  $student[0]->getstudentstatus('st2',$student,$subject);
   
?>