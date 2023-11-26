<?php

//OPERATOR PENUGASAN ARITMATIKA//
//$a += $b sama saja seperti $a = $a + $b//
//$a -= $b sama saja seperti $a = $a - $b//
//$a *= $b sama saja seperti $a = $a * $b//
//$a /= $b sama saja seperti $a = $a / $b//
//$a %= $b sama saja seperti $a = $a % $b//

//Contoh//
$total = 0;

$fruits = 10000;
$chicken = 35000;
$OrangeJuice = 1000;

$total += $fruits;
$total += $chicken;
$total += $OrangeJuice;

var_dump($total);