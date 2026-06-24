<?php
// Array 2 dimensi
$siswa = [
    ["jaka", 80],
    ["cinta", 75],
    ["raisya", 90]
];

// Menampilkan data
for ($i = 0; $i < count($siswa); $i++) {
    echo "Nama: " . $siswa[$i][0];
    echo " - Nilai: " . $siswa[$i][1];
    echo "<br>";
}
?>