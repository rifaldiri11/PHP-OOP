<?php
require_once "data/Conflict.php";
require_once "data/Helper.php";

/* import group yaitu memanggil beberapa class, function, constant dengan satu kali panggil 
nama namespacenya lalu diikuti nama classnya di dalam {} */

use Data\One\{Conflict as Conflict1, Dummy, Sample};
use function Helper\{helpme as help1, helpMe2 as help2};
use const Helper\APPLICATION as APP;

$conflict1 = new Conflict1();
$dummy = new Dummy();
$sample = new Sample();

help1();
help2();

echo APP;
