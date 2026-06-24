<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $kendaraan = $_POST['kendaraan'];

    setcookie("nama_driver", $nama, time()+3600);
    setcookie("kendaraan", $kendaraan, time()+3600);

    header("Location: driver_gojek.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Driver Gojek</title>
</head>
<body>

<h2>Data Driver Gojek</h2>

<form method="post">
    Nama Driver :
    <input type="text" name="nama" required><br><br>

    Nomor Kendaraan :
    <input type="text" name="kendaraan" required><br><br>

    <input type="submit" name="simpan" value="Simpan Data">
</form>

<hr>

<?php
if(isset($_COOKIE['nama_driver']) && isset($_COOKIE['kendaraan'])){
    echo "<h3>Data Driver Tersimpan</h3>";
    echo "Nama Driver : ".$_COOKIE['nama_driver']."<br>";
    echo "Nomor Kendaraan : ".$_COOKIE['kendaraan'];
}else{
    echo "Belum ada data driver yang tersimpan.";
}
?>

</body>
</html>