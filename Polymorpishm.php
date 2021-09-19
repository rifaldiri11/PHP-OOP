<?php

require_once "data/Programmer.php";

/*Dalam OOP, polymorpishm adalah kemampuan 
  sebuah object berubah bentuk menjadi Bentuk lain
  Polymorpishm erat hubungannya dengan Inheritance 
  
  tipe programmer itu harus programmer
  tidak bisa mengambil class lain
  */
$company = new Company();
var_dump($company);
$company->programmer = new Programmer("Programmer Rifaldi");
var_dump($company);

$company->programmer = new BackendProgrammer("Backend Programmer Rifaldi");
var_dump($company);

$company->programmer = new FrontendProgrammer("Frontend Programmer Rifaldi");
var_dump($company);

/* Function Polymorpishm */
sayHelloProgrammer(new Programmer("Rifaldi 1"));
sayHelloProgrammer(new BackendProgrammer("Rifaldi 2"));
sayHelloProgrammer(new FrontendProgrammer("Rifaldi 3"));
