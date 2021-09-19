<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;
/*static keyword untuk propertie & function bisa digunakan langsung
  tanpa menginstansiasi class terlebih dahulu
  static function tidak bisa mengakses function biasa, karena
  function biasa menempel pada class instance sedangkan
  static function tidak */

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Muhamad Rifaldi" . PHP_EOL;
echo MathHelper::$name;

echo MathHelper::sum(1, 2, 3, 4, 5,);
