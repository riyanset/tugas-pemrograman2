<?php
// Array 2 dimensi
$siswa = [
    ["Andi Pratama", 80],
    ["Siti Rahma", 75],
    ["Dedi Wijaya", 90]
];

// Menampilkan data
for ($i = 0; $i < count($siswa); $i++) {
    echo "Nama: " . $siswa[$i][0];
    echo " - Nilai: " . $siswa[$i][1];
    echo "<br>";
}
?>