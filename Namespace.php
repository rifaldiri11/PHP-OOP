<?php

// global namespace
namespace {
    // include folder dan file
    require_once "data/Conflict.php";
    require_once "data/Helper.php";

    // cara memanggil namespace pada nama class yang sama diawali dengan nama namespacenya
    $conflict1 = new \Data\One\Conflict();

    $conflict2 = new \Data\Two\Conflict();

    /* memanggil function dan constant di dalam namespace dengan 
       menambahkan nama namespacenya lalu diikuti nama function dan constantnya */
    // ini constant
    echo Helper\APPLICATION;
    // ini function
    Helper\helpMe();
    Helper\helpme2();
}
