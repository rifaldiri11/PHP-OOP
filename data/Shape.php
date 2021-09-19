<?php

namespace Data;

class Shape
{
    public function getCorner()
    {
        return -1;
    }
}
class Rectangle extends Shape
{
    public function getCorner()
    {
        return 4;
    }
    // cara memanggil function dari parentnya dengan parent::namafunctionya
    public function getParentCorner()
    {

        return parent::getCorner();
    }
}
