<?php

/* Object Iteration
   saat kita membuat object dari sebuah class, kita dapat melakukan iterasi
   kesemua properties yang ada di object tsb menggunakan foreach
   memudahkan ketika mengakses semua properties yang ada di object
   secara default hanya propertis yang public bisa di akses foreach */

class Data
{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $forth = "Forth";
}

$data = new Data();
foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}
