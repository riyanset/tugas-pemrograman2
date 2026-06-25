<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
        }
        .judul {
            color: red;
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .biodata {
            color: blue;
            font-size: 22px;
            width: 600px;
            margin: auto;
            text-align: left;
        }
        .baris {
            margin: 10px 0;
        }
        .label {
            display: inline-block;
            width: 120px;
        }
        .titik {
            display: inline-block;
            width: 20px;
        }
        .isi {
            display: inline-block;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="judul">BIODATA</div>

<?php
$nama = "Budi Santoso";
$email = "budi.santoso@email.com";
$jurusan = "Teknik Informatika";
$hobi = "futsal";
?>

<div class="biodata">
    <div class="baris">
        <span class="label">Nama</span>
        <span class="titik">:</span>
        <span class="isi"><?php echo $nama; ?></span>
    </div>
    <div class="baris">
        <span class="label">Email</span>
        <span class="titik">:</span>
        <span class="isi"><?php echo $email; ?></span>
    </div>
    <div class="baris">
        <span class="label">Jurusan</span>
        <span class="titik">:</span>
        <span class="isi"><?php echo $jurusan; ?></span>
    </div>
    <div class="baris">
        <span class="label">Hoby</span>
        <span class="titik">:</span>
        <span class="isi"><?php echo $hobi; ?></span>
    </div>
</div>

</body>
</html>