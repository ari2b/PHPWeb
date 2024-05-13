<?php

global $umur;

$namaBuah = ["Semangka", "Anggur", "Leci", "Jeruk", "Jambu", "Melon"];
echo "saya suka ". $namaBuah[0]. " ". $namaBuah[1]. " dan ". $namaBuah[2]. ".<br>";

// tampikan Mangga
echo "saya suka ". $namaBuah[1]. "<br>";

// tampikan Jeruk
echo "saya suka ". $namaBuah[2]. "<br>";

// tampikan Apel
echo "saya suka ". $namaBuah[3]. "<br>";

// tampikan Melon
echo "saya suka ". $namaBuah[4]. "<br>";

// array dengan spesifik index
$umur = ["Rocky"=>"35 Tahun", "Kyle"=>"37 Tahun", "Chase"=>"40 Tahun"];
$umur['Marshall']="50 Tahun";
echo "Umur Marshall adalah ". $umur['Marshall']. "<br>";

// tampikan semua umur
foreach ($umur as $nama => $tahun) {
    echo "Umur $nama adalah $tahun<br>";
}

?>