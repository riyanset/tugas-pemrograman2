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

<h1>Tampilan Foto Pertemuan 12</h1>

<div class="galeri">

<?php

$foto = [
    [
        "gambar" => "1.png",
        "judul" => "dbBerita",
        "ket" => "Buat basis data kemudian berikan nama dbBerita."
    ],
    [
        "gambar" => "2.png",
        "judul" => "tabel Kategori",
        "ket" => "Buat Tabel Kategori."
    ],
    [
        "gambar" => "3.png",
        "judul" => "Tbl Berita",
        "ket" => "Buat Tabel Berita."
    ],
    [
        "gambar" => "4.png",
        "judul" => "Foreigen key constraints",
        "ket" => "dbberita,tblkategori."
    ],
    [
        "gambar" => "5.png",
        "judul" => "record",
        "ket" => "buat record ."
    ],
    [
        "gambar" => "6.png",
        "judul" => "hasil Record",
        "ket" => "Hasil buat Record."
    ],
    [
        "gambar" => "7.png",
        "judul" => "edit record",
        "ket" => "edit record sesuai yang mau di edit."
    ],
    [
        "gambar" => "8.png",
        "judul" => "tampilan edit record",
        "ket" => "edit record."
    ],
    [
        "gambar" => "9.png",
        "judul" => "hasil",
        "ket" => "tampilan hasil edit record ."
    ],
    [
        "gambar" => "10.png",
        "judul" => "hasil",
        "ket" => "tampilan hasil edit record ."
    ],
];


foreach ($foto as $data) {

    echo "
    <div class='foto'>
        <img src='p13foto/".$data['gambar']."'>
        
        <h3>".$data['judul']."</h3>
        
        <p>".$data['ket']."</p>
    </div>
    ";

}

?>

</div>

</body>
</html>