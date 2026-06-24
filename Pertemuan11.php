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

<h1>Tampilan Foto Pertemuan 11</h1>

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
        "judul" => "tabel",
        "ket" => "Buat Tabel mhs."
    ],
    [
        "gambar" => "3.png",
        "judul" => "Tampilan Data Pengguna",
        "ket" => "buat 5 record."
    ],
    [
        "gambar" => "4.png",
        "judul" => "Tampilan Form Input Data",
        "ket" => "Berfungsi untuk memasukkan data baru ke dalam sistem."
    ],
    [
        "gambar" => "5.png",
        "judul" => "edit data",
        "ket" => "hasil yang sudah dibuat 5 record + edit record pilih yang gambarnya pensil ."
    ],
    [
        "gambar" => "6.png",
        "judul" => "edit",
        "ket" => "disini saya edit tgl lahir."
    ],
    [
        "gambar" => "7.png",
        "judul" => "hasil",
        "ket" => "hasil yang diedit."
    ],
    [
        "gambar" => "77.png",
        "judul" => "edit file",
        "ket" => "edit fiel pilih file yang mau di edit dan pilih change."
    ],
    [
        "gambar" => "8.png",
        "judul" => "hasil edit file",
        "ket" => "hasil edit file."
    ]
];


foreach ($foto as $data) {

    echo "
    <div class='foto'>
        <img src='p11 foto/".$data['gambar']."'>
        
        <h3>".$data['judul']."</h3>
        
        <p>".$data['ket']."</p>
    </div>
    ";

}

?>

</div>

</body>
</html>