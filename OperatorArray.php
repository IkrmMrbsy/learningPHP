<?php

//OPERATOR ARRAY//
//$a + $b (Union) menggabungkan array $a dan $b//
//$a == $b (Equality) true jika $a dan $b memiliki key-value sama//
//$a === $b (Identity) true jika $a dan $b memiliki key value sama dan posisi sama//
//$a != $b (Inequality) true jika $a dan $b tidak sama//
//$a <> $b (Inequality) true jika $a dan $b tidak sama//
//$a !== $b (Nonidentity) true jika $a dan $b tidak identik//

//Union//
$first = [
    "FirstName" => "Ikram"
];
$last = [
    "LastName" => "Marbasy"
];
$full = $first + $last;
var_dump($full);

//Equality//
$a = [
    "firstName" => "Ahmad",
    "lastName" => "Yani"
];
$b = [
    "lastName" => "Yani",
    "firstName" => "Ahmad"
];
var_dump($a == $b);
//Identity//
var_dump($a === $b);
//Inequality//
var_dump($a != $b);
//Nonidentity//
var_dump($a !== $b);
