<?php

require_once "data/Galaxy.php";

use Datagalaxy\{Galaxy, Saturnus, Jupiter};

$saturnus = new Saturnus();

$saturnus->run();

$jupiter = new Jupiter();
$jupiter->name = "Planet Jupiter";
$jupiter->run();
