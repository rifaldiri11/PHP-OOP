<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

/* kata kunci 'use' berguna memudahkan saat memanggil function, costant, dan class 
yang berada di dalam namespace cukup dengan sekali panggil */

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict;
$conflict2 = new \Data\Two\Conflict; // memanggil conflict yang sama yang berada di namespace Data\Two

Helpme();

echo  APPLICATION . PHP_EOL;
