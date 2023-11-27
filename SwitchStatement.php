<?php

$nilai = "A";

switch($nilai){
    case "A":
        echo "Anda lulus dengan sangat baik" . "\n";
        break;
    case "B";
    case "C":
        echo "Anda lulus" . "\n";
        break;
    case "D":
        echo "Anda tiadk lulus" . "\n";
        break;
    default:
    echo "Mungkin anda salah jurusan" . "\n";
}

//Syntax alternative//
$nilai = "B";

switch($nilai):
    case "A";
        echo "Masterr";
        break;
    case "B";
    case "C":
        echo "Beginner";
        break;
    case "D":
        echo "Normal";
        break;
    default:
        echo "Looser";
    endswitch;