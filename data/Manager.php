<?php

class Manager
{
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name): void // 'void' tidak mengembalikan value
    {
        echo "hi $name, saya adalah $this->title $this->name" . PHP_EOL;
    }
}
// class inheritance yaitu class turunan dari parent 'Manager' ke class 'VicePresident' menggunakan kata kunci extends
class VicePresident extends Manager
{
    // constructor overiding menggunakan kata kunci 'parent::' dapat berfungsi mengubah argument/paramater dari function tsb
    public function __construct(string $name = "")
    {
        // memanggil constructor parent tidak wajid tapi direkomendasikan
        parent::__construct($name = "", $title = "VP");
    }

    // function overiding function yang di timpa ke function yang sekarang namun tidak bisa mengubah argument/parameternya
    function sayHello(string $name): void // 'void' tidak mengembalikan value
    {
        echo "hi $name, saya adalah $this->title $this->name" . PHP_EOL;
    }
}
