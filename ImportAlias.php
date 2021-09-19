<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

/* kata kunci as dapat membuat nama lain (alias) dari class, function, constant yang ada 
berguna ketika membuat dua class dengan nama yang sama agar tidak terjadi error */

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

$conflict1 = new Conflict1;
$conflict2 = new Conflict2;

help();

echo  APP . PHP_EOL;
