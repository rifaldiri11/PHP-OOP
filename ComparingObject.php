<?php

/*comparing object membandingkan 2 buah object
  dengan == equals dan === identity */

require_once "data/Student.php";

$student1 = new Student;
$student1->id = "16";
$student1->name = "Muhamad Rifaldi";
$student1->value = 100;

$student2 = new Student;
$student2->id = "16";
$student2->name = "Muhamad Rifaldi";
$student2->value = 100;

var_dump($student1 == $student2); // (==) equals true karena propertinya sama
var_dump($student1 === $student2);// (===) identity false karena object tidak sama dan tempat penyimpanan juga berbeda
