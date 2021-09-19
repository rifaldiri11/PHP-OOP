<?php
class Programmer
{
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
class BackendProgrammer extends Programmer
{
}
class FrontendProgrammer extends Programmer
{
}
class company
{
    // tipe harus programmer agar dapat mengubah ubah object (polymorpishm)
    public Programmer $programmer;
}

// function polymorpishm
// dan Type check and casts
/* Melakukan Pengecekkan type data pada object
   Menggunakan kata kunci 'instanceof'*/
function sayHelloProgrammer(Programmer $programmer)
{
    if ($programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}
