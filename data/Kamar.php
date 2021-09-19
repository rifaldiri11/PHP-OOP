<?php

class Kamar
{

    var string $nama;
    var string $tipe;

    function namaKamar(?string $nama)
    {

        if (is_null($nama)) {

            echo "Ini kamar tipe $this->tipe" . PHP_EOL;
        } else {
            echo "Ini kamar $nama dengan tipe $this->tipe " . PHP_EOL;
        }
    }
}
