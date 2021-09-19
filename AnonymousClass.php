<?php

interface HelloWorld
{
    function sayHello(): void;
}
/*anonymous class cocok untuk interface dan abstract class yang sederhana
  supaya tidak ribet ketika mengimplementasikan class turunannya */
$helloworld = new class("Rifaldi") implements HelloWorld
{
    public string $name;

    /*construct di dalam anonymous class
      dengan menambahkan value dari new classnya */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloworld->sayHello();
