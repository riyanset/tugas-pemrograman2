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

<h1>Tampilan Foto Pertemuan 18</h1>

<div class="galeri">

<?php

$foto = [
    [
        "gambar" => "1.png",
        "judul" => "aUndefined Variable",
        "ket" => "script code."
    ],
    [
        "gambar" => "11.png",
        "judul" => "Eror",
        "ket" => "eror script"
    ],
    [
        "gambar" => "111.png",
        "judul" => "solusi eror",
        "ket" => "Solusi tambahkan nma _driver ."
    ],
    [
        "gambar" => "2.png",
        "judul" => ".Division By Zero",
        "ket" => "script code."
    ],
    [
        "gambar" => "22.png",
        "judul" => "eror",
        "ket" => "eror code ."
    ],
    [
        "gambar" => "222.png",
        "judul" => "hasil Record",
        "ket" => "Hasil buat Record."
    ],
    [
        "gambar" => "2222.png",
        "judul" => "solusi",
        "ket" => "perbaiki code."
    ],
    [
        "gambar" => "3.png",
        "judul" => "Undefined Array Key",
        "ket" => "script code."
    ],
    [
        "gambar" => "33.png",
        "judul" => "hasil eror",
        "ket" => "script code ."
    ],
    [
        "gambar" => "333.png",
        "judul" => "hasil perbaiki",
        "ket" => "script code ."
    ],
    [
        "gambar" => "3333.png",
        "judul" => "tampilan hasil ",
        "ket" => "script code ."
    ],
    [
        "gambar" => "b.png",
        "judul" => "conection db",
        "ket" => "script code ."
    ],
    [
        "gambar" => "bb.png",
        "judul" => "hasil eror",
        "ket" => "script code ."
    ],
    [
        "gambar" => "bbb.png",
        "judul" => "solusi",
        "ket" => ":Database belum dibuat sehingga koneksi gagal. Solusinya membuat database terlebih dahulu.."
    ],
    [
        "gambar" => "c.png",
        "judul" => "Access Denied for User",
        "ket" => "script code ."
    ],
    [
        "gambar" => "cc.png",
        "judul" => "hasil eror",
        "ket" => "script code ."
    ],
    [
        "gambar" => "ccc.png",
        "judul" => "tampilan hasil berhasil",
        "ket" => " Username atau password database salah. Solusinya menggunakan akun database yang benar. ."
    ],
    [
        "gambar" => "d.png",
        "judul" => "Table Already Exists",
        "ket" => "script code ."
    ],
    [
        "gambar" => "dd.png",
        "judul" => "hasil eror",
        "ket" => "script code ."
    ],
    [
        "gambar" => "ddd.png",
        "judul" => "solusi",
        "ket" => "Tabel sudah ada sebelumnya. Solusinya menggunakan IF NOT EXISTS agar tidak terjadi duplikasi tabel. ."
    ],
     [
        "gambar" => "e.png",
        "judul" => " Duplicate Entry ",
        "ket" => "script code ."
    ],
     [
        "gambar" => "ee.png",
        "judul" => "hasil eror",
        "ket" => "script code ."
    ],
     [
        "gambar" => "eee.png",
        "judul" => "solusi",
        "ket" => "solusinya Gunakan nilai unik ."
    ],
     [
        "gambar" => "eeee.png",
        "judul" => "Cannot Be Null",
        "ket" => "script code ."
    ],
     [
        "gambar" => "eeeee.png",
        "judul" => "hasil eror",
        "ket" => "script code ."
    ],
     [
        "gambar" => "eeeeee.png",
        "judul" => "hasil eror",
        "ket" => "Solusinya Isi data pada kolom tersebut."
    ],
     [
        "gambar" => "eeeeeee.png",
        "judul" => "Data Too Long",
        "ket" => "script code ."
    ],
     [
        "gambar" => "eeeeeeee.png",
        "judul" => "hasil eror",
        "ket" => "script code ."
    ],
     [
        "gambar" => "eeeeeeeee.png",
        "judul" => "hasil perbaiki",
        "ket" => "Solusinya Perbesar ukuran kolom atau pendekkan data ."
    ],
];


foreach ($foto as $data) {

    echo "
    <div class='foto'>
        <img src='p18foto/".$data['gambar']."'>
        
        <h3>".$data['judul']."</h3>
        
        <p>".$data['ket']."</p>
    </div>
    ";

}

?>

</div>

</body>
</html>