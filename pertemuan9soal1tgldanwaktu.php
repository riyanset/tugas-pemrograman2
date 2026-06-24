<?php
$hariIndo = [
    "Sunday" => "Minggu",
    "Monday" => "Senin",
    "Tuesday" => "Selasa",
    "Wednesday" => "Rabu",
    "Thursday" => "Kamis",
    "Friday" => "Jumat",
    "Saturday" => "Sabtu"
];

// Ambil data tanggal
$hari = date("l"); // BENAR
$tanggal = date("d-m-Y");
$waktu = date("H:i:s");

// Tampilkan hasil
echo "Hari : " . $hariIndo[$hari] . "<br>";
echo "Tanggal : " . $tanggal . "<br>";
echo "Waktu : " . $waktu;
?>