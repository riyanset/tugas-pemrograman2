<?php
session_start();

if(isset($_POST['tambah'])){
    if(!empty($_POST['barang'])){
        $_SESSION['keranjang'][] = $_POST['barang'];
    }
}

if(isset($_POST['hapus'])){
    unset($_SESSION['keranjang']);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f5f7fa;
        }
        .hero{
            background: linear-gradient(135deg,#0d6efd,#4f46e5);
            color:white;
            padding:40px;
            border-radius:15px;
            margin-bottom:30px;
        }
        .product-card{
            border:none;
            border-radius:15px;
            box-shadow:0 4px 15px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            🛒 MyShop
        </a>
    </div>
</nav>

<div class="container mt-4">

    <!-- Banner -->
    <div class="hero text-center">
        <h1>Keranjang Belanja</h1>
        <p>Tambahkan produk favorit Anda ke dalam keranjang</p>
    </div>

    <div class="row">
        <!-- Form Tambah Barang -->
        <div class="col-md-5">
            <div class="card product-card p-4">
                <h4>Tambah Produk</h4>

                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Nama Barang</label>
                        <input type="text" name="barang" class="form-control"
                               placeholder="Masukkan nama barang">
                    </div>

                    <button type="submit" name="tambah"
                            class="btn btn-success">
                        Tambah ke Keranjang
                    </button>

                    <button type="submit" name="hapus"
                            class="btn btn-danger">
                        Kosongkan Keranjang
                    </button>
                </form>
            </div>
        </div>

        <!-- Daftar Keranjang -->
        <div class="col-md-7">
            <div class="card product-card p-4">
                <h4>🛍 Isi Keranjang</h4>

                <?php
                if(isset($_SESSION['keranjang']) && count($_SESSION['keranjang']) > 0){
                    echo "<ul class='list-group mt-3'>";
                    foreach($_SESSION['keranjang'] as $item){
                        echo "<li class='list-group-item d-flex justify-content-between'>";
                        echo $item;
                        echo "<span class='badge bg-primary'>Produk</span>";
                        echo "</li>";
                    }
                    echo "</ul>";
                }else{
                    echo "<div class='alert alert-warning mt-3'>
                            Keranjang masih kosong.
                          </div>";
                }
                ?>
            </div>
        </div>
    </div>

</div>

</body>
</html>