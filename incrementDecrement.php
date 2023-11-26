<?php

//OPERATOR INCREMENT DAN DECREMENT//
//$a++ (Post increment) kembalikan $a lalu naikan satu angka//
//++$a (Pre increment) naikan $a satu angka, lalu kembalikan $a//
//$a-- (Post decrement) kembalikan $a lalu turunkan satu angka//
//--$a (Pre decrement) turunkan $a satu angka, lalu kembalikan $a//

//Post increment nilai $a (5) dikembalikan ke $result. Setelah itu, nilai $a dinaikkan menjadi 6.//
$a = 5;
$result = $a++;
var_dump($result, $a);

//Pre increment nilai $b dinaikkan menjadi 6, dan kemudian nilai yang sudah dinaikkan (6) dikembalikan ke $result.//
$b = 5;
$result2 = ++$b;
var_dump($result2, $b);

//Post decrement nilai $c (5) dikembalikan ke $result. Setelah itu, nilai $c diturunkan menjadi 4.//
$c = 5;
$result3 = $c--;
var_dump($result3, $c);

//Pre decrement nilai $d diturunkan menjadi 4, dan kemudian nilai yang sudah diturunkan (4) dikembalikan ke $result.//
$d = 5;
$result4 = --$d;
var_dump($result4, $d);