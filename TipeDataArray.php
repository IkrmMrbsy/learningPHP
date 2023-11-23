<?php

//Operasi Array//
//$array[index] untuk mengakses data di array pada nomor index//

//$array[index]= value mengubah data di array pada nomor index dengan value baru//

//$array[] = value mengubah data di array pada posisi paling belakang//

//unset($array[index]) menghapus data di array, index otomatis hilang dari array//

//count($array) mengambil total data di array//

//Bisa seperti ini//
$values = array(1, 2, 3, 4, 5);
var_dump($values);

//Bisa juga seperti ini//
$names = ["Eko", "Kurniawan", "Khannedy"];
var_dump($names);

//Untuk mengambil data array//
$daftar = ["Ikram", "Hasan", "Riki"];
var_dump($daftar[1]);

//Untuk mengubah data di array dengan value baru//
$nomor = [10, 34, 55, 20, 22, 31, 79];
$nomor[1] = 35;
var_dump($nomor[1]);

//Untuk menghapus data//
$hapus = ["Ikram","Ahmad", "Marbasy"];
unset($hapus[1]);
var_dump($hapus);


//Untuk menambahkan data//
$tambah = ["Fikri", "Adnan", "Zafir"];
$tambah []= "Joko";
var_dump($tambah);

//Untuk menghitung jumlah data nya di dalam array//
$hitung = ["Angga", "Zahra", "Maya", "Liam"];
var_dump(count($hitung));

//Membuat Map//
$ikr = array(
    "id" => "ikr",
    "Nama" => "Ikram Marbasy",
    "Age" => 20
);
var_dump($ikr);
//Jika ingin mengambil data//
var_dump($ikr["Age"]);

//Bisa juga seperti ini//
$eko = [
    "id" => "eko",
    "nama" => "Eko Kurniawan",
    "Age" => 35
];
var_dump($eko);
//Jika ingin mengambil data//
var_dump($eko["nama"]);

//Array di dalam Array//
$test = array(
    "id" => "test",
    "nama" => "zahra",
    "age" => 25,
    "address" => array(
        "city" => "Jakarta",
        "country" => "Indonesia"
    )
);
var_dump($test);
//untuk mengambil data nya seperti ini//
var_dump($test["address"]["city"]);
