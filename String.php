<?php

//Single Quote//
echo 'Nama : ';
echo 'Ikram Marbasy';
echo "\n";

//Double Quote//
//\t = Tab, \n = Enter//
echo "Jurusan : ";
echo "Web\t Development\n";

//HEREDOC adalah membuat string yang panjang//
echo <<<IKR
Ini adalah contoh 
string yang sangat
 panjang, dan juga gak perlu ngetik ENTER secara manual, "Bisa quote" juga
IKR;

//NOWDOC Tidak memiliki kemampuan parsing seperti di heredoc atau double quote//
echo <<<'IKR'
JDJDKSJKDKSJDKJSD
SDSDSDSD
SADSDSDKDKDKD
DSMMSMSM
IKR;