<?php

//Ternary Operator//
$gender = "Perempuan";
echo $g = $gender == "Perempuan" ? "Hai Nona" : "Hai Bro";

$nilai = 70;
echo $ket = $nilai > 75 ? "Anda Lulus" : "Anda Tidak Lulus";

//Bukan Ternary Operator//
$gender = "Pria";
$hi = null;

if($gender == "Pria"){
    $hi = "Hai Bro";
}else {
    $hi = "Hai Nona";
}

echo $hi . PHP_EOL;