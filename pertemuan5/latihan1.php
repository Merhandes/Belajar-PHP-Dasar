<?php
// array
// variabel yan gdapat memiliki banyak nilai

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
var_dump($hari);
echo "<br />";
print_r($bulan);
echo "<br />";

// Menampilkan 1 elemen pada array
echo $arr1[0];
echo "<br />";
echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br />";
var_dump($hari);
