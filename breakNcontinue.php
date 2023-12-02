<?php

//Break//
$counter = 1;

while(true){
    echo "Hello World : " . $counter . PHP_EOL;
    $counter++;

    if($counter > 10){
        break;
    }
}

//Continue//
for($counter2 = 0; $counter2 <=100; $counter2++){
    if($counter2 % 2 == 0){
        continue;
    }
    echo "Continue : " . $counter2 . PHP_EOL;
}