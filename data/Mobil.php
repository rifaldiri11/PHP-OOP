<?php

namespace Data;

/* interface by default sudah bersifat abstract
   cocok untuk menjadi kontrak class
   mendukung banyak/multiple inheritance 
   interface hanya dapat membuat abstract function!!! */

interface HasBrand
{
    function getBrand(): string;
}
interface isMaintenance
{
    function isMaintenance(): bool;
}
/* interface inheritance
   interface sendiri dapat extend ke interface lain dengan menggunakan
   kata kunci 'extends' diikuti nama interface nya */
interface Mobil extends HasBrand, isMaintenance
{
    function supir(): void;

    function ban(): int;
}

/* cara implementasi interface 
   dengan menggunakan kata kunci 'implements'   
   dan class  dapat implementasi beberapa interface
   dan harus di implementasi blok function yang ada di interface*/

class Brio implements Mobil
{
    public function supir(): void
    {
        echo "Mengendarai Brio" . PHP_EOL;
    }
    public function ban(): int
    {
        return 1 . PHP_EOL;
    }
    public function getBrand(): string
    {
        return "Honda" . PHP_EOL;
    }
    public function isMaintenance(): bool
    {
        return true . PHP_EOL;
    }
}
