<?php

require_once "data/Mobil.php";

use Data\Brio;

$mobilbrio = new Brio();
echo $mobilbrio->supir();
echo $mobilbrio->getBrand();
echo $mobilbrio->isMaintenance();
