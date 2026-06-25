<?php

require_once __DIR__ . '/koneksi.php';



// ===============================
// PROSES TRANSAKSI JUAL
// ===============================

if(isset($_POST['jual'])){


    $nama=$_POST['nama'];

    $id_produk=$_POST['produk'];

    $jumlah=$_POST['jumlah'];



    // ambil data produk

    $ambil=mysqli_query($conn,

    "SELECT * FROM produk 
    WHERE id_produk='$id_produk'"

    );


    $produk_data=mysqli_fetch_assoc($ambil);



    if($produk_data){


        $harga=$produk_data['harga'];

        $stok=$produk_data['stok'];

        $nama_produk=$produk_data['nama_produk'];



        // cek stok

        if($jumlah <= $stok){


            $total=$harga*$jumlah;



            // simpan transaksi

            mysqli_query($conn,


            "INSERT INTO transaksi

            (
            nama_pembeli,
            id_produk,
            jumlah,
            harga,
            total
            )

            VALUES

            (
            '$nama',
            '$id_produk',
            '$jumlah',
            '$harga',
            '$total'
            )

            ");



            // update stok

            mysqli_query($conn,


            "UPDATE produk SET

            stok = stok - $jumlah

            WHERE id_produk='$id_produk'

            ");



            echo "

            <script>

            alert('Transaksi berhasil disimpan');

            window.location='pertemuan19.php';

            </script>

            ";



        }else{


            echo "

            <script>

            alert('Stok tidak mencukupi');

            </script>

            ";


        }



    }


}






// ===============================
// AMBIL DATA PRODUK
// ===============================


$data_produk=mysqli_query($conn,

"SELECT * FROM produk"

);

if (!$data_produk) {
    die('<h2>Database belum siap</h2><p>Tabel <code>produk</code> tidak ditemukan. Import file <code>database/import_infinityfree.sql</code> (InfinityFree) atau <code>database/toko_online.sql</code> (XAMPP) lewat phpMyAdmin.</p>');
}






// ===============================
// REPORT
// ===============================


$total_transaksi=mysqli_query($conn,


"SELECT COUNT(*) AS jumlah 
FROM transaksi"

);


$jumlah=mysqli_fetch_assoc($total_transaksi) ?: ['jumlah' => 0];





$total_penjualan=mysqli_query($conn,


"SELECT SUM(total) AS total 
FROM transaksi"

);


$omset=mysqli_fetch_assoc($total_penjualan);






// ===============================
// RIWAYAT TRANSAKSI
// ===============================


$riwayat=mysqli_query($conn,


"SELECT transaksi.*,
produk.nama_produk

FROM transaksi

JOIN produk

ON transaksi.id_produk = produk.id_produk

ORDER BY id_transaksi DESC"

);



?>



<!DOCTYPE html>
<html>

<head>

<title>
Sistem Toko Pakaian Online
</title>


<style>


body{

margin:0;

font-family:Arial;

background:#f1f5f9;

}



.header{

background:#2563eb;

color:white;

padding:20px;

}



.container{

width:98%;

margin:20px auto;

}



.layout{


display:grid;

grid-template-columns:33% 33% 33%;

gap:15px;


}



.box{

background:white;

padding:20px;

border-radius:15px;

box-shadow:0 5px 15px #ddd;


}



.item-thumb{
width:90px;
height:90px;
border-radius:8px;
background:#e2e8f0;
display:flex;
align-items:center;
justify-content:center;
font-size:32px;
flex-shrink:0;
}

.item-thumb img{
width:90px;
height:90px;
object-fit:cover;
border-radius:8px;
}

.item{
display:flex;
gap:12px;
align-items:flex-start;
border:1px solid #ddd;
padding:10px;
margin-bottom:10px;
border-radius:10px;
}

.item-info{
flex:1;
}

.harga{

color:green;

font-weight:bold;

}



input,select{


width:100%;

padding:10px;

margin:8px 0;


}



button{


background:#2563eb;

color:white;

border:0;

padding:12px;

width:100%;

border-radius:8px;

cursor:pointer;


}



.report{

background:#eff6ff;

padding:15px;

margin-bottom:15px;

border-radius:10px;


}



table{


width:100%;

border-collapse:collapse;

font-size:13px;


}



th{

background:#2563eb;

color:white;

}


td,th{

padding:8px;

border:1px solid #ddd;

}



</style>


</head>



<body>



<div class="header">

<h1>
🛒 Sistem Informasi Toko Pakaian
</h1>

</div>





<div class="container">


<div class="layout">





<!-- ===================
     PRODUK
=================== -->


<div class="box">


<h2>
📦 Produk
</h2>


<?php while($p=mysqli_fetch_assoc($data_produk)){ ?>


<div class="item">

<?php
$gambar = $p['gambar'] ?? '';
if ($gambar !== '' && file_exists(__DIR__ . '/p19foto/' . $gambar)) {
?>
<div class="item-thumb">
<img src="p19foto/<?php echo htmlspecialchars($gambar); ?>" alt="<?php echo htmlspecialchars($p['nama_produk']); ?>">
</div>
<?php } else { ?>
<div class="item-thumb">👕</div>
<?php } ?>

<div class="item-info">

<h3>

<?php echo $p['nama_produk']; ?>

</h3>


<p>

<?php echo $p['kategori']; ?>

</p>


<p class="harga">

Rp <?php echo number_format($p['harga']); ?>

</p>


<p>

Stok :

<?php echo $p['stok']; ?>

</p>

</div>

</div>



<?php } ?>


</div>






<!-- ===================
     TRANSAKSI
=================== -->


<div class="box">


<h2>
🛒 Transaksi Jual
</h2>



<form method="POST">


<label>
Nama Pembeli
</label>


<input type="text"

name="nama"

required>



<label>
Pilih Produk
</label>



<select name="produk">


<?php


$list=mysqli_query($conn,

"SELECT * FROM produk");


while($p=mysqli_fetch_assoc($list)){


?>


<option value="<?php echo $p['id_produk']; ?>">


<?php echo $p['nama_produk']; ?>

-

Rp <?php echo number_format($p['harga']); ?>

(Stok <?php echo $p['stok']; ?>)


</option>


<?php } ?>


</select>



<label>
Jumlah Beli
</label>



<input type="number"

name="jumlah"

min="1"

required>



<button name="jual">

💾 Simpan Penjualan

</button>



</form>



</div>








<!-- ===================
     REPORT
=================== -->


<div class="box">


<h2>
📊 Report
</h2>



<div class="report">


<h3>
Jumlah Transaksi
</h3>


<h1>

<?php echo $jumlah['jumlah']; ?>

</h1>


</div>





<div class="report">


<h3>
Total Penjualan
</h3>


<h2 style="color:green">


Rp 

<?php 

echo number_format($omset['total'] ?? 0);

?>


</h2>


</div>





<h3>
📜 Riwayat Transaksi
</h3>



<table>


<tr>

<th>
Pembeli
</th>

<th>
Produk
</th>

<th>
Jumlah
</th>

<th>
Total
</th>


</tr>



<?php while($r=mysqli_fetch_assoc($riwayat)){ ?>


<tr>


<td>

<?php echo $r['nama_pembeli']; ?>

</td>


<td>

<?php echo $r['nama_produk']; ?>

</td>


<td>

<?php echo $r['jumlah']; ?>

</td>


<td>

Rp <?php echo number_format($r['total']); ?>

</td>


</tr>


<?php } ?>



</table>


</div>





</div>

</div>



</body>

</html>