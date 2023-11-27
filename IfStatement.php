<?php

$nilai = 70;
$absen = 90;

if($nilai >= 75 && $absen >= 75){
    echo "Anda Lulus" . "\n";
}else{
    echo "Anda Tidak Lulus" . "\n";
}

//Else If//
$score = 80;
$absensi = 75;

if($score >= 80 && $absensi >= 80){
    echo "Nilai anda A" . "\n";
}elseif($score >= 75 && $absensi >= 75){
    echo "Nilai anda B" . "\n";
}elseif($score >= 60 && $absensi >= 60){
    echo "Nilai anda C" . "\n";
}elseif($score >= 50 && $absensi >= 50){
    echo "Nilai anda D" . "\n";
}else{
    echo "Nilai anda E" . "\n";
}

//Dengan Colon//
$nilai2 = 85;
$absen2 = 75;

if($nilai2 >= 75 && $absen2 >= 75):
    echo "nilai anda A++" . "\n";
    elseif($nilai2 >= 60 && $absen2 >= 60):
    echo "nilai anda B++" . "\n";
    elseif($nilai2 >= 50 && $absen2 >= 50):
        echo "nilai anda C++" . "\n";
    else:
        echo "nilai anda E" . "\n";
    endif;