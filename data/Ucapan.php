<?php

namespace data\traits;

/* trait mirip dengan abstract dapat membuat konkrit function & abstract function & properties
   yang membedakan trait bisa ditambahkan kedalam class lebih dari satu
   trait mirip dengan ekstension bisa menambahkan konkrit function ke class
   sederhana trait digunakan untuk menyimpan function-function yang bisa digunakan ulang
   dibeberapa class
   untuk menggunakan trait di class, bisa menggunakan kata kunci use */

trait sayWelcome
{
    public function welcome(?string $name): void
    {
        if (is_null($name)) {
            echo "Selamat Datang" . PHP_EOL;
        } else {
            echo "Selamat Datang $name" . PHP_EOL;
        }
    }
}

trait sayMorning
{
    public function morning(?string $name): void
    {
        if (is_null($name)) {
            echo "Selamat Pagi Dunia" . PHP_EOL;
        } else {
            echo "Selamat Pagi $name" . PHP_EOL;
        }
    }
}
trait sayAfternoon
{
    public function afternoon(?string $name): void
    {
        if (is_null($name)) {
            echo "Selamat Siang Menjelang Sore" . PHP_EOL;
        } else {
            echo "Selamat Siang Menjelang Sore $name" . PHP_EOL;
        }
    }
}
// contoh trait propertie
trait HasName
{
    public string $name;
}

// contoh abstract function di dalam interface
trait sayNight
{
    public abstract function goodNight(): void;
}

class parentPerson // teroveride karena function tsb digunakan di dalam trait
{
    public function morning(?string $name): void
    {
        echo "Selamat Pagi" . PHP_EOL;
    }

    public function afternoon(?string $name): void
    {
        echo "Selamat Sore" . PHP_EOL;
    }
}

// ini adalah trait inheritance pewarisan trait ke trait lain
// sama dengan pewarisan ke class menggunakan kata kunci 'use'
trait All
{
    use sayWelcome, sayMorning, sayAfternoon, sayNight, HasName {

        // cara mengubah modifier visibility pada function traid
        // welcome as protected;
        // morning as private;
    }
}

class Person extends parentPerson
{
    // kode menggunakan trait dengan keyword 'use' diikuti nama trait nya
    // dapat menambahkan beberapa trait
    use All;

    // function yang di implentasi dari function abstract trait
    public function goodNight(): void
    {
        echo "Selamat Malam $this->name" . PHP_EOL;
    }

    /*override function yang ada di trait maka 
      function trait akan teroverride oleh function childnya 
      kecuali function tersebut berada di parent class
      maka function parentclass-nya yang akan teroverride oleh function trait*/

    public function morning(?string $name): void
    {
        echo "Selamat Pagi" . PHP_EOL;
    }

    public function afternoon(?string $name): void
    {
        echo "Selamat Sore" . PHP_EOL;
    }
}
