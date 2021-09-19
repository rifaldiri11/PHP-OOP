<?php

require_once "data/Person.php";

$person = new Person("Muhamad Rifaldi", "Palembang");
$person->nama = "Muhamad Rifaldi";
$person->alamat = "Palembang";

echo "Nama : $person->nama" . PHP_EOL;
echo "Alamat : $person->alamat" . PHP_EOL;
echo "Negara : $person->negara" . PHP_EOL;

var_dump($person);

$person2 = new Person("Debby Ayu Zanatia", "Palembang", "German");
$person2->nama = "Debby Ayu Zanatia";
$person2->alamat = "Palembang";
$person2->negara = "German";

echo "Nama : $person2->nama" . PHP_EOL;
echo "Alamat : $person2->alamat" . PHP_EOL;
echo "Negara : $person2->negara" . PHP_EOL;

// error
// $person2->nama = [];
