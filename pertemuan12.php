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
        "gambar" => "11.png",
        "judul" => "tbl nilai",
        "ket" => "Buat tabel nilai ."
    ],
    [
        "gambar" => "12.png",
        "judul" => "Hasil Tbl",
        "ket" => "hasilyang dibuat tabel."
    ],
    [
        "gambar" => "13.png",
        "judul" => "input 5 record",
        "ket" => "buat 5 record."
    ],
    [
        "gambar" => "14.png",
        "judul" => "hasil ",
        "ket" => "tampilan 5 record."
    ],
    [
        "gambar" => "15.png",
        "judul" => "tampilan script",
        "ket" => "buat script ."
    ],
    [
        "gambar" => "16.png",
        "judul" => "hasil",
        "ket" => "tampilan hasil nim,mahasiswa,jumlhadir,tugas,uts,uas dan nilai akhir dan nilai tinggi + grade."
    ],
];


foreach ($foto as $data) {

    echo "
    <div class='foto'>
        <img src='p12foto/".$data['gambar']."'>
        
        <h3>".$data['judul']."</h3>
        
        <p>".$data['ket']."</p>
    </div>
    ";

}

?>

</div>

</body>
</html>