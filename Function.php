<?php

require_once "data/Person.php";

$rifaldi = new Person("Rifaldi", "Palembang");
$rifaldi->name = "Muhamad Rifaldi";
$rifaldi->sayHello("Debby Ayu Zanatia");


$gilang = new Person("Gilang", "Palembang");
$gilang->name = "Gilang";
$gilang->sayHello(null);
