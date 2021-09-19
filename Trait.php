<?php

require_once "data/Ucapan.php";

use Data\traits\{Person, sayWelcome, sayMorning, sayAfternoon, sayNight, HasName};

$person = new Person();
$person->welcome("Debby");
$person->morning("Debby");
$person->afternoon("Rifaldi");

$person->name = "aldi";

$person->goodNight();
