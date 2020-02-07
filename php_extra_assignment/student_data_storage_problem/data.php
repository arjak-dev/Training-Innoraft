<?php
   include("Class_define.php");
   
//      $student = array();
   //-----------------------getting student data--------------------//
   $student[0] = new student();
   $student[0]->id = 'st1';
   $student[0]->name= 'John';
   $student[0]->dob =  mktime(0, 0, 0, 12, 20, 1998);
   $student[0]->grade=12;
   
   $student[1]= new student();
   $student[1]->id = 'st2';
   $student[1]->name= 'Arjak';
   $student[1]->dob = mktime(0, 0, 0, 5, 10, 1998);
   $student[1]->grade=12;

   $student[2]= new student();
   $student[2]->id = 'st3';
   $student[2]->name= 'Kunal';
   $student[2]->dob =  mktime(0, 0, 0, 12, 20, 1998);
   $student[2]->grade=11;
   
   $student[3]= new student();
   $student[3]->id = 'st3';
   $student[3]->name= 'Maity';
   $student[3]->dob =  mktime(0, 0, 0, 12, 20, 1998);
   $student[3]->grade= 10;
   

//    echo json_encode($student);
   //---------------------subject data input-------------------------//
   
   $subject = [];

    $subject[0] = new subject();
    $subject[0]->name = "physics";
    $subject[0]->code= "PH";
    $subject[0]->passing_marks = 30;
    $subject[0]->grade = 12;

   $subject[1] = new subject();
   $subject[1]->name = "Maths";
   $subject[1]->code= "MT";
   $subject[1]->passing_marks = 40;
   $subject[1]->grade =10;

   $subject[2] = new subject();
   $subject[2]->name = "English";
   $subject[2]->code= "EN";
   $subject[2]->passing_marks = 20;
   $subject[2]->grade = 11;

   $subject[3] = new subject();
   $subject[3]->name = "Computer";
   $subject[3]->code= "CM";
   $subject[3]->passing_marks = 40;
    $subject[0]->grade = 10;

   $subject[4] = new subject();
   $subject[4]->name = "English";
   $subject[4]->code= "EN";
   $subject[4]->passing_marks = 30;
   $subject[4]->grade = 12;
//    print_r($subject);

    echo "</br>";
    $getSubjectdetails = (new subject())->getSubjectDetails($subject,$student[1]->grade);
    // echo (json_encode($getSubjectdetails)."<br>");
//-------------------Marks Data Input-----------------------//
    $marks =[];
    $marks[0]=new marks();
    $marks[0]->subject_marks = ['PH'=>40,'EN'=>40];
    $student[0]->marks = $marks[0];
    
    $marks[1]=new marks();
    $marks[1]->subject_marks = ['PH'=>20,'EN'=>70];
    $student[1]->marks = $marks[1];

    $marks[2]=new marks();
    $marks[2]->subject_marks = ['EN'=>30];
    $student[2]->marks = $marks[2];

    $marks[3]=new marks();
    $marks[3]->subject_marks = ['MT'=>50,'CM'=>30];
    $student[3]->marks = $marks[3];


    //print_r($student[0]->marks->subject_marks);
    // print_r($marks);
     $getMarks =new student();
    //  print_r($getMarks->getSubjectCodeAndMarks($student,"st2"));
        $getMarks->getStudentstatus($student,$subject);
?>