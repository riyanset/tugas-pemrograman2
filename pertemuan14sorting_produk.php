<?php
include 'koneksi.php';

$batas = 3;

$halaman = isset($_GET['halaman']) ? $_GET['halaman'] : 1;

$hal_awal = ($halaman - 1) * $batas;

$urut = isset($_GET['urut']) ? $_GET['urut'] : 'ASC';

$query = mysqli_query($conn,
"SELECT * FROM produk
ORDER BY harga $urut
LIMIT $hal_awal, $batas");

$data = mysqli_query($conn,"SELECT * FROM produk");

$jumlah_data = mysqli_num_rows($data);

$total_halaman = ceil($jumlah_data / $batas);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sorting Produk</title>
</head>
<body>

<h2>Sorting Harga Produk</h2>

<a href="?urut=ASC">Harga Termurah</a> |
<a href="?urut=DESC">Harga Termahal</a>

<br><br>

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

<a href="?halaman=<?php echo $x; ?>&urut=<?php echo $urut; ?>">
    <?php echo $x; ?>
</a>

<?php } ?>

</body>
</html>