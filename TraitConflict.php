<?php

/*ada function yang sama dalam sebuah trait maka akan terjadi konflik
  jika terjadi seperti ini dapat diatasi dengan menggunakan kata kunci insteadof
  kita dapat memilih function mana yang akan di ambil  */

trait A
{
    function doA(): void
    {
        echo "function A trait A" . PHP_EOL;
    }
    function doB(): void
    {
        echo "function B trait A" . PHP_EOL;
    }
}
trait B
{
    function doA(): void
    {
        echo "function A trait B" . PHP_EOL;
    }
    function doB(): void
    {
        echo "function B trait B" . PHP_EOL;
    }
}

class Sample
{
    // cara menggunakan bila terjadi konflik pada function trait
    use A, B {
        // akan digunakan function dari trait A
        A::doA insteadof B;
        // akan digunakan function dari trait B
        B::doB insteadof A;
    }
}
$sampel = new Sample();
$sampel->doA();
$sampel->doB();
