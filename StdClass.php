<?php

require_once "data/Person.php";

/*Std Class adalah sebuah fungsi yang kosong
  dapat merubah konversi sebuah array menjadi sebuah object 
  dan sebaliknya*/

$array = [
    "firstName" => "Muhamad ",
    "lastName" => "Rifaldi"
];

// mengkonversi array menjadi sebuah object dengan kata kunci 'object'
$object = (object)$array;
echo $object->firstName . PHP_EOL;
echo $object->lastName . PHP_EOL;

// konversi menjadi array lagi
$arrayLagi = (array)$object;
var_dump($arrayLagi);

// konversi menjadi array dari propertie yang ada di dalam object person
$person = new Person("Rifaldi", "Palembang");
$arrayPerson = (array)$person;
var_dump($arrayPerson);
