<?php

/* visibility jika tidak di set seluruhnya adalah public
   public     = seluruh scope jangkauan dapat mengakses
   prtotected = tidak dapat di akses di luar namun dapat di akses pada class turunan/inheritance
   private    = hanya dapat di panggil dalam class tidak bisa di akses dari luar/pun class turunan*/
class Product
{
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    // cara membuat properties name & price yang di private dengan menggunakan function dan return
    // agar dapat di panggil di luar akses class
    public function getName(): string
    {
        return $this->name;
    }
    public function getPrice(): int
    {
        return $this->price;
    }
}
class ProductDummy extends Product
{
    public function info()
    {
        echo "Name : $this->name" . PHP_EOL;
        echo "Price : $this->price" . PHP_EOL;
    }
}
