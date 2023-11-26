<?php

//Dot operator untuk menggabungkan dua string//
$nama = "Ikram Marbasy";

echo "nama : " . $nama . "\n";
echo "nilai : " . 100 . "\n";

//Konversi ke number dan sebaliknya//
$nilaiString = (string)100;
var_dump($nilaiString);

$nilaiInt = (int)"100";
var_dump($nilaiInt);

$nilaiFloat = (float)"100.11";
var_dump($nilaiFloat);

//Mengakses Karakter//
$ikr = "Ikram";
echo $ikr[0] . "\n";
echo $ikr[1] . "\n";

//Variable Parsing//
$nama ="Ikram";
echo "Hallo $nama, Selamat Belajar PHP" . "\n";

//Curly Brace//
$var = "Var";
echo "This is {$var}'s" . "\n";