<?php
$angka = 12;
$mulai = 15;
$akhir = 45;
$langkah = 2;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Penggunaan For</title>
</head>
<body>
  <h2>Tabel Perkalian</h2>
  <hr>
  <?php
  for ($i = $mulai; $i <= $akhir; $i += $langkah) {
      echo "$angka * $i = " . ($angka * $i) . "<br>";
  }
  ?>
</body>
</html>