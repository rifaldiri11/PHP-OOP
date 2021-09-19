<?php

class Category
{
    // encapculation data yang dibuat seperti kapsul agar isinya terjaga 


    private string $name;
    private bool $expensive;

    /* setiap propertie private yang berada diatas di buatkan 
       function getter dan setter nya
       agar data propertie tersebut dapat di panggil dan diubah
       dan berguna untuk mem protectie / melindungi propertie tsb
       supaya tidak diubah sembarangan dengan data yang tidak valid
       contoh string kosong = ("   ")
        */

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        /* validasi jika name tidak sama dengan string kosong */
        if (trim($name) != "") {
            $this->name = $name;
        }
    }
    public function isExpensive(): bool
    {
        return $this->expensive;
    }
    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }
}
