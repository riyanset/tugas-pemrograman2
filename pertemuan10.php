<!DOCTYPE html>
<html>
<head>
    <title>Tugas Pertemuan 11</title>

    <style>
        body {
            font-family: Arial;
            background-color: #eeeeee;
            text-align: center;
        }

        h1 {
            margin-top: 30px;
            color: #333;
        }

        .galeri {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .foto {
            background-color: white;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0px 3px 8px gray;
        }

        .foto img {
            width: 300px;
            height: 180px;
            object-fit: contain;
            border-radius: 8px;
        }

        .foto p {
            font-weight: bold;
        }
    </style>

</head>

<body>

<h1>Tampilan Foto Pertemuan 10</h1>

<div class="galeri">

<?php

$foto = [
    [
        "gambar" => "1.png",
        "judul" => "database",
        "ket" => "Buat Nama database."
    ],
    [
        "gambar" => "2.png",
        "judul" => "tbl barang",
        "ket" => "Buat Tabel Barang."
    ],
    [
        "gambar" => "3.png",
        "judul" => "tbl penjualan",
        "ket" => "buat Tabel Penjual."
    ],
    [
        "gambar" => "4.png",
        "judul" => "Tampilan foreign key constraints",
        "ket" => "saling terhubung."
    ],
    [
        "gambar" => "5.png",
        "judul" => "5 record tbl bareng",
        "ket" => "input 5 record."
    ],
    [
        "gambar" => "6.png",
        "judul" => "5 record tbl penjualan",
        "ket" => "input 5 record."
    ],
    [
        "gambar" => "7.png",
        "judul" => "hasil browser",
        "ket" => "hasil tbl bareng."
    ],
    [
        "gambar" => "8.png",
        "judul" => "hasil browser",
        "ket" => "hasil tbl penjualan."
    ],
];


foreach ($foto as $data) {

    echo "
    <div class='foto'>
        <img src='p10foto/".$data['gambar']."'>
        
        <h3>".$data['judul']."</h3>
        
        <p>".$data['ket']."</p>
    </div>
    ";

}

?>

</div>

</body>
</html>