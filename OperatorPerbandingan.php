<?php

//OPERATOR PERBANDINGAN//
//$a == $b (sama dengan) true jika $a sama dengan $b setelah dilakukan konversi tipe data//
//$a === $b (identik) true jika $a sama dengan $b dan memiliki tipe data yang sama//
//$a != $b (tidak sama dengan) true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data//
//$a <> $b (tidak sama dengan) true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data// 
//$a !== $b (tidak identik) true jika $a tidak sama dengan $b atau tidak sama tipe data//
//$a < $b (kurang dari) true jika $a kurang dari $b//
//$a <= $b (kurang dari atau sama dengan) true jika $a kurang dari atau sama dengan $b//
//$a > $b (lebih dari) true jika $a lebih dari $b//
//$a >= $b (lebih dari sama dengan) true jika $a lebih dari atau sama dengan $b//

//sama dengan//
$samaDengan = 5;
$samaDengan2 = "5";

var_dump($samaDengan == $samaDengan2); //true

//identik//
$identik = 5;
$identik2 = "5";

var_dump($identik === $identik2);

//tidak sama dengan//
$tidakSamaDengan = 10;
$tidakSamaDengan2 = 20;

var_dump($tidakSamaDengan != $tidakSamaDengan2);

//tidak identik//
$tidakIdentik = 10;
$tidakIdentik2 = "10";

var_dump($tidakIdentik !== $tidakIdentik2);

//kurang dari//
$kurangDari = 15;
$kurangDari2 = 20;

var_dump($kurangDari < $kurangDari2);

//kurang dari atau sama dengan//
$kurangDariAtauSamaDengan = 15;
$kurangDariAtauSamaDengan2 = 15;

var_dump($kurangDariAtauSamaDengan <= $kurangDariAtauSamaDengan2);

//lebih dari//
$lebihDari = 25;
$lebihDari2 = 20;

var_dump($lebihDari > $lebihDari2);

//lebih dari atau sama dengan//
$lebihDariAtauSamaDengan = 25;
$lebihDariAtauSamaDengan2 = 25;

var_dump($lebihDariAtauSamaDengan >= $lebihDariAtauSamaDengan2);


