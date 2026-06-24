<?php
if(isset($_POST["simpan"])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $komentar = $_POST["komentar"];

    $file = "bukutamu.dat";
    
    $data = "Nama: $nama\nEmail: $email\nKomentar: $komentar\n------------------\n";
    file_put_contents($file, $data, FILE_APPEND);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f6f8;
        }
        .container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: inline-block;
            width: 80px;
            vertical-align: top;
        }
        input, textarea {
            width: 250px;
            padding: 5px;
            margin-bottom: 10px;
        }
        textarea {
            height: 100px;
        }
        button {
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Buku Tamu</h3>
        <form method="POST">
            <label>Nama</label>
            <input type="text" name="nama" required><br>
            <label>Email</label>
            <input type="email" name="email" required><br>
            <label>Komentar</label>
            <textarea name="komentar" required></textarea><br>

            <button type="submit" name="simpan">Simpan</button>
        </form>

        <hr>
        <h4>Data Tamu</h4>
        <pre>
            <?php
            $file = "bukutamu.dat";
            if (file_exists($file)) {
                echo file_get_contents($file);
            }
            ?>
        </pre>
    </div>
</body>
</html>