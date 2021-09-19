<?php

class Person
{

    // ini constant, data yang tidak bisa dirubah
    const AUTHOR = "Semangat Belajar Bahasa PHP OOP";

    var string $nama;
    var ?string $alamat; // "?" nullable  Properties, artinya boleh null
    var string $negara = "Indonesia";

    // function constructor function yang akan di panggil saat pertama kali object di buat
    // dan diharuskan untuk membuat sebuah parameter di setiap object
    function __construct(string $name, ?string $addres)
    {
        $this->nama = $name;
        $this->alamat = $addres;
    }


    // ini function
    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, nama saya adalah $this->name" . PHP_EOL;
        } else {
            echo "Hi $name nama saya adalah $this->name" . PHP_EOL;
        }
    }

    // cara memanggil constant pada class yang sama menggunakan kata kunci 'self::NAMA CONSTANT'
    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }

    // function destructor merupakan funtion yang dapat menghapus object dari memory
    // function __destruct()
    // {
    //     echo "Object Person $this->nama is destroyed" . PHP_EOL;
    // }
}
