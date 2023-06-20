<?php
// array => variabel yang dapat memiliki banyak nilai
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = ["harga", 123, false];

// Menampilkan Array
// var_dump, print_r()
// var_dump($arr1);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampikan 1 elemen pada array
// echo $arr1[1];
// echo "<br>";
// echo $bulan [2];

// Menambahkan elemen baru pada array
var_dump($bulan);
$bulan[] ="April";
echo "<br>";
var_dump($bulan)
?>