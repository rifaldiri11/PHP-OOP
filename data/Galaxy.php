<?php

namespace Datagalaxy;

abstract class Galaxy
{
    public string $name = "sun";

    abstract public function run(): void;
}

class Saturnus extends Galaxy
{
    public function run(): void
    {
        echo "Galaxy Name $this->name is running" . PHP_EOL;
    }
}

class Jupiter extends Galaxy
{
    public function run(): void
    {
        echo "Galaxy Name $this->name is running" . PHP_EOL;
    }
}
