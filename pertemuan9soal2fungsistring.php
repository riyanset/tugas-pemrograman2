<?php
// input teks
$teks = "Belajar PHP Serius";

// Proses string
$hurufBesar = strtoupper($teks);
$jumlahKarakter = strlen($teks);
$teksTerbalik = strrev($teks);

// ouput
echo "Teks Asli : " . $teks . "<br>";
echo "Huruf Besar : " . $hurufBesar . "<br>";
echo "Jumlah Karakter : " . $jumlahKarakter . "<br>";
echo "Teks Terbalik : " .   $teksTerbalik;
?>