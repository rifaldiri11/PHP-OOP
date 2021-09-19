<?php

/*Generator
  yang bisa digunakan untuk membuat Iterator secara otomatis
  hanya dengan menggunakan kata kunci yield */

//ini contoh menggunakan Iterator dan array
function getGenap(int $max): Iterator
{
    $array = [];
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }
    return new ArrayIterator($array);
}
foreach (getGenap(50) as $value) {
    echo "Nilai Genap : $value" . PHP_EOL;
}

// ini contoh menggunakan kata kunci yield
function getGanjil(int $max): Iterator
{
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}
foreach (getGanjil(50) as $value) {
    echo "Nilai Ganjl : $value" . PHP_EOL;
}
