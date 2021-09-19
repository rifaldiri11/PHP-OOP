<?php

require_once "data/Product.php";

$product = new Product("Apple", 20000);
// cara memanggil private properties name & price yang telah di jadikan function agar dapat di akses
echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$productDummy = new ProductDummy("Dummy", 30000);
$productDummy->info();
