<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Muhamad Rifaldi";
$manager->sayHello("Debby Ayu Zanatia");

$vp = new VicePresident();
$vp->name = "Debby Ayu Zanatia";
// function overiding
$vp->sayHello("Muhamad Rifaldi");
