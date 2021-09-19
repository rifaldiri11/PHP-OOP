<?php

/*Iterator adalah inerface yang digunakan untuk melakukan iterasi, namun
  membuat iterator secara manual itu ribet, oleh karena itu akan digunakan
  ArrayIterator, yaitu iterator yang menggunakan array sebagai data iterasinya
  dan agara class kita bisa di iterasi secara manual, kita bisa menggunakan interface
  IteratorAggregate, disana kita hanya butuh meng-override function getIterator()
  yang mengembalikan data Iterator*/

// implements IteratorAggregate adalah interface bawaan php 
class Data implements IteratorAggregate
{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $forth = "Forth";

    public function getIterator()
    {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "forth" => $this->forth,
        ];
        return new ArrayIterator($array);
    }
}

$data = new Data();
foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}
