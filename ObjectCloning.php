<?php
/*Object cloning untuk menduplikasi sebuah object dengan kata kunci clone */
require_once "data/Student.php";

$student1 = new Student;
$student1->id = "16";
$student1->name = "Muhamad Rifaldi";
$student1->value = 100;
$student1->setEmail("brifaldi16@gmail.com");
var_dump($student1);

$student2 = clone $student1;
var_dump($student2);

/*cara manual clone*/
// $student2 = new student();
// $student2->id = $student1->id;
// $student2->name = $student1->name;
// $student2->value = $student1->value;
