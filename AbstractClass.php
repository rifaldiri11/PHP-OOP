<?php

require_once "data/Location.php";

use Data\{Location, City, Country, Provinces};

/* error tidak dapat dibuat objek 
   karena class bersifat abstrak */

// $location = new Location();     ERROR
// var_dump($location);            ERROR

$city = new City();
$city->name = "Palembang";
$city->location = "city";
$city->welcome();

$country = new Country();
$country->name = "Indonesia";
$country->location = "country";
$country->welcome();
$country->goodbye();



$province = new Provinces();
$province->name = "Sumatera Selatan";
$province->location = "province";
$province->welcome();
$province->goodbye();
