<?php
include 'koneksi.php';

$batas = 3;

$halaman = isset($_GET['halaman']) ? $_GET['halaman'] : 1;

$hal_awal = ($halaman - 1) * $batas;

$cari = isset($_GET['cari']) ? $_GET['cari'] : '';

$query = mysqli_query($conn,
"SELECT * FROM produk
WHERE nama_produk LIKE '%$cari%'
LIMIT $hal_awal, $batas");

$data = mysqli_query($conn,
"SELECT * FROM produk
WHERE nama_produk LIKE '%$cari%'");

$jumlah_data = mysqli_num_rows($data);

$total_halaman = ceil($jumlah_data / $batas);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Searching Produk</title>
</head>
<body>

<h2>Pencarian Data Produk</h2>

<form method="GET">
    <input type="text" name="cari" placeholder="Cari produk...">
    <button type="submit">Cari</button>
</form>

<br>

<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>Nama Produk</th>
    <th>Kategori</th>
    <th>Harga</th>
    <th>Stok</th>
</tr>

<?php
$no = $hal_awal + 1;

while($d = mysqli_fetch_array($query)){
?>

<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['nama_produk']; ?></td>
    <td><?php echo $d['kategori']; ?></td>
    <td><?php echo $d['harga']; ?></td>
    <td><?php echo $d['stok']; ?></td>
</tr>

<?php } ?>

</table>

<br>

<?php for($x=1; $x<=$total_halaman; $x++){ ?>

<a href="?halaman=<?php echo $x; ?>&cari=<?php echo $cari; ?>">
    <?php echo $x; ?>
</a>

<?php } ?>

</body>
</html>