<?php

namespace Data;
/* Abstrack class tidak dapat dibuat object
   Hanya bisa dibuat melalui childnya saja
   erat kaitanya dengan inheritance atau pewarisan
   jadi class location ini disebut kontrak class untuk class childnya

   dalam class abstract dapat dibuat propertie 
   dan function konkrit dan abstract function
*/

abstract class Location
{
    // ini adalah propertie
    public string $name;
    public string $location;

    // ini adalah function konkrit
    public function welcome()
    {
        if ($this->location == "city") {
            echo "selamat datang ini adalah kota $this->name" . PHP_EOL .  PHP_EOL;
        } elseif ($this->location == "country") {
            echo "selamat datang ini adalah negara $this->name" . PHP_EOL;
        } elseif ($this->location == "province") {
            echo "selamat datang ini adalah provinsi $this->name" . PHP_EOL;
        }
    }
    // ini adalah function abstract yang harus di implementasi
    // pada tiap
    abstract public function goodbye();
}
class City extends Location
{
    public function goodbye()
    {
        echo "sampai jumpa di kota $this->name" . PHP_EOL;
    }
}
class Provinces extends Location
{
    public function goodbye()
    {
        echo "sampai jumpa di provinsi $this->name" . PHP_EOL;
    }
}
class Country extends Location
{
    public function goodbye()
    {
        echo "sampai jumpa di negara $this->name" . PHP_EOL;
    }
}
