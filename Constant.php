<?php

require_once "data/Person.php";

define("APPLICATION", "Belajar PHP OOP");
const APP_VERSION = "1.0.0"; // 'const' merupakan kata kunci membuat variable yang tidak bisa dirubah

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

// cara memanggil constant langsung dari class person
echo Person::AUTHOR . PHP_EOL;

// cara memanggil constant dengan kata kunci self keyword melalui function
$const = new person("Muhamad Rifaldi", "Palembang");
$const->info();
