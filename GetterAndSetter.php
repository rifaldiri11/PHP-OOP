<?php

require_once "data/Category.php";

$category = new Category();
/* cara merubah data propertie 
   agar dapat terlindungi dari data yang tidak valid  */
$category->setName("Sepatu");
$category->setExpensive(true);

/* tidak dapat dilakukan karena telah dibuat validasi
   agar data tidak dibuat untuk yang tidak valid seperti string kosong */
$category->setName("");

/* cara memanggil data yang telah dibuat function-nya */
echo "Name :  {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;
