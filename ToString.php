<?php
/*Magic function merupakan function-function yang sudah ditentukan kegunaanya di PHP
  tidak bisa membuat function tsb, kecuali memang sudah ditentukan kegunaanya
  sebelumnya beberapa magic function seperti
  __construct() sebagai constructor
  __destruct() sebagai destructor
  __clone() sebagai object cloning

  __trueString() function merupakan salah satu magic function yang digunakan
  sebagai representasi string sebuah object
  jika misal ingin membuat string dari object, bisa membuat function __toString()

   */
require_once "data/Student.php";
$student1 = new Student;
$student1->id = "16";
$student1->name = "Muhamad Rifaldi";
$student1->value = 100;

$string = (string) $student1;
echo $string . PHP_EOL;
