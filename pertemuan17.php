<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    setcookie('nama_mahasiswa', $nama, time() + 3600);
    setcookie('kelas', $kelas, time() + 3600);

    header('Location: pertemuan17.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px 20px;
        }
        .container {
            max-width: 480px;
            margin: 0 auto;
            background: #fff;
            padding: 28px;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
        }
        h2 {
            margin-top: 0;
            color: #212529;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ced4da;
            border-radius: 8px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 11px;
            background: #0d6efd;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
        }
        button:hover {
            background: #0b5ed7;
        }
        .hasil {
            margin-top: 24px;
            padding: 16px;
            background: #e7f1ff;
            border-radius: 8px;
            border: 1px solid #b6d4fe;
        }
        .kosong {
            margin-top: 24px;
            color: #6c757d;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Kelas Mahasiswa</h2>

    <form method="post">
        <label for="nama">Nama Mahasiswa</label>
        <input type="text" id="nama" name="nama" placeholder="Contoh: Budi Santoso" required>

        <label for="kelas">Kelas</label>
        <input type="text" id="kelas" name="kelas" placeholder="Contoh: 07TPLK002" required>

        <button type="submit" name="simpan">Simpan Data</button>
    </form>

    <?php if (isset($_COOKIE['nama_mahasiswa']) && isset($_COOKIE['kelas'])): ?>
        <div class="hasil">
            <h3>Data Mahasiswa Tersimpan</h3>
            <p><strong>Nama Mahasiswa:</strong> <?php echo htmlspecialchars($_COOKIE['nama_mahasiswa']); ?></p>
            <p><strong>Kelas:</strong> <?php echo htmlspecialchars($_COOKIE['kelas']); ?></p>
        </div>
    <?php else: ?>
        <p class="kosong">Belum ada data mahasiswa yang tersimpan.</p>
    <?php endif; ?>
</div>

</body>
</html>
