<?php

require_once "data/Kamar.php";

$single = new Kamar();
$single->nama = "single";
$single->tipe = "standart";
$single->namaKamar("Single Bed");


$twin = new Kamar();
$twin->nama = "twin";
$twin->tipe = "interior";
$twin->namaKamar("Twin Bed");
