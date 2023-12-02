<?php

//Perulangan Tanpa Henti//
// for ( ; ; ){
//     echo "Hello World" . PHP_EOL;
// }

//Init statement, kondisi, dan post statement tidak wajib di isi , jika kondisi tidak di isi berarti kondisi selalu bernilai true//

//Perulangan Dengan Kondisi//
//Kondisi akan di lakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan, jika false perulangan akan di hentikan//
$counter = 1;

for (; $counter <= 10;){
    echo "Kondisi di cetak : " . $counter . PHP_EOL;
    $counter++;
}

//Perulangan Dengan Init Statement//
//Init Statement akan di eksekusi hanya sekali di awal sebelum perulangan//
for ($counter1 = 1; $counter1 <= 10;){
    echo "Init Statement Di cetak : " . $counter1 . PHP_EOL;
    $counter1++;
}

//Perluangan Dengan Post Statement//
//Post Statement akan di eksekusi setiap kali di akhir perulangan//
for ($counter2 = 1; $counter2 <= 10; $counter2++){
    echo "Post Statement Di cetak : " . $counter2 . PHP_EOL;
}