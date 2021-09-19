<?php

/*magic function invoke merupakan function yang dieksekusi ketika 
object yang dibuat dianggap sebagai function
misal ketika membuat object $student, lalu dilakukan $student() maka secara
otomatis function __invoke() yang akan di eksekusi  */

require_once "data/Student.php";

$student1 = new Student;
$student1->id = "16";
$student1->name = "Muhamad Rifaldi";
$student1->value = 100;

$student1($student1->id, $student1->name, $student1->value, "true sama dengan = ", true);
