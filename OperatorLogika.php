<?php

//OPRATOR LOGIKA//
//$a && $b (and) true jika $a dan &b keduanya true//
//$a and $b (and) true jika$a dan $b keduanya true//
//$a || $b (or) true jika $a dan $b salah satu atau keduanya true//
//$a or $b (or) true jika $a dan $b salah satu atau keduanya true//
//!$a (not) true jika $a bernilai false//
//$a (xor) true jika $a dan $b salah satu true tapi tidak keduanya//

//&& true jika keduanya true//
$and = true;
$and2 = true;
var_dump($and && $and2);

//|| True jika salah satu atau keduanya bernilai true//
$or = true;
$or2 = false;
var_dump($or || $or2);

//! True jika bernilai false//
$not = false;
var_dump(!$not);

//xor True jika hanya salah satu dari $a atau $b yang bernilai true, tapi tidak keduanya.//
$xor = true;
$xor2 = false;
var_dump($xor xor $xor2);