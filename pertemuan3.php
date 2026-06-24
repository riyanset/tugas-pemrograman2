<?php
$file = "bukutamu.dat";

// CEK AKSI
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // SIMPAN DATA
    if (isset($_POST["simpan"])) {
        $nama = $_POST["nama"] ?? "";
        $email = $_POST["email"] ?? "";
        $komentar = $_POST["komentar"] ?? "";

        $data = "Nama: $nama\nEmail: $email\nKomentar: $komentar\n----------------------\n";

        file_put_contents($file, $data, FILE_APPEND);

        // refresh biar tidak dobel submit
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }

    // HAPUS DATA
    if (isset($_POST["hapus"])) {
        file_put_contents($file, "");

        // refresh
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
</head>
<body>

<h2>Buku Tamu</h2>

<form method="post">
    Nama : <br>
    <input type="text" name="nama" required><br><br>

    Email : <br>
    <input type="email" name="email" required><br><br>

    Komentar : <br>
    <textarea name="komentar" rows="5" cols="40" required></textarea><br><br>

    <input type="submit" name="simpan" value="Simpan">
    <input type="submit" name="hapus" value="Hapus Semua"
           onclick="return confirm('Yakin mau hapus semua data?')">
</form>

<hr>

<h3>Data Buku Tamu:</h3>

<?php
if (file_exists($file) && filesize($file) > 0) {
    echo "<pre>" . htmlspecialchars(file_get_contents($file)) . "</pre>";
} else {
    echo "Belum ada data";
}
?>

</body>
</html>