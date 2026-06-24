<?php
session_start();

if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = [];
}

if (isset($_POST['proses'])) {
    $alas   = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $luas   = 0.5 * $alas * $tinggi;

    $_SESSION['data'][] = [
        'alas'   => $alas,
        'tinggi' => $tinggi,
        'luas'   => $luas
    ];
}

if (isset($_POST['reset'])) {
    $_SESSION['data'] = [];
}

$jumlahData = count($_SESSION['data']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Menghitung Luas Segitiga</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 14px;
        }
        .form-group label {
            width: 75px;
            font-size: 15px;
        }
        .form-group span {
            margin-right: 8px;
        }
        .form-group input[type="number"] {
            padding: 6px 10px;
            font-size: 14px;
            border: 1px solid #aaa;
            border-radius: 4px;
            width: 190px;
        }
        .info {
            font-size: 13px;
            color: #666;
            margin-bottom: 12px;
        }
        .btn-row {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-left: 83px;
        }
        .btn-proses {
            padding: 7px 22px;
            background-color: #4a90d9;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
        }
        .btn-proses:hover { background-color: #357abd; }
        .btn-reset {
            padding: 7px 18px;
            background-color: #e05c5c;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
        }
        .btn-reset:hover { background-color: #c0392b; }
        .selesai {
            text-align: center;
            color: green;
            font-weight: bold;
            margin: 10px 0;
        }
        hr { margin: 24px 0; border: none; border-top: 1px solid #ddd; }
        h3 {
            text-align: center;
            font-size: 15px;
            color: #333;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background-color: #4a90d9;
            color: white;
            padding: 9px;
            text-align: center;
            font-size: 14px;
        }
        td {
            padding: 8px;
            text-align: center;
            border: 1px solid #ccc;
            font-size: 14px;
            color: #555;
        }
        tr:nth-child(even) td { background-color: #f0f6ff; }
        .empty-td { color: #ccc; }
    </style>
</head>
<body>
<div class="container">

    <h2>Menghitung Luas Segitiga</h2>

    <!-- FORM INPUT -->
    <?php if ($jumlahData < 5): ?>
    <form method="POST" action="">
        <div class="form-group">
            <label>Alas</label>
            <span>:</span>
            <input type="number" name="alas" step="any" required placeholder="Masukkan alas">
        </div>
        <div class="form-group">
            <label>Tinggi</label>
            <span>:</span>
            <input type="number" name="tinggi" step="any" required placeholder="Masukkan tinggi">
        </div>
        <p class="info">(masukkan <?= 5 - $jumlahData ?> x lagi)</p>
        <div class="btn-row">
            <button type="submit" name="proses" class="btn-proses">Proses</button>
            <?php if ($jumlahData > 0): ?>
            </form>
            <form method="POST" action="" style="margin:0">
                <button type="submit" name="reset" class="btn-reset">Reset</button>
            </form>
            <?php else: ?>
            </div>
            </form>
            <?php endif; ?>
    <?php else: ?>
        <p class="selesai">✔ Data sudah lengkap (5/5)</p>
        <div style="text-align:center">
            <form method="POST" action="">
                <button type="submit" name="reset" class="btn-reset">Reset Data</button>
            </form>
        </div>
    <?php endif; ?>

    <!-- OUTPUT TABEL -->
    <hr>
    <h3>MENGHITUNG LUAS SEGITIGA</h3>
    <table>
        <tr>
            <th>NO</th>
            <th>ALAS</th>
            <th>TINGGI</th>
            <th>LUAS</th>
        </tr>
        <?php for ($i = 0; $i < 5; $i++): ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <?php if (isset($_SESSION['data'][$i])): ?>
                <td><?= $_SESSION['data'][$i]['alas'] ?></td>
                <td><?= $_SESSION['data'][$i]['tinggi'] ?></td>
                <td><?= $_SESSION['data'][$i]['luas'] ?></td>
            <?php else: ?>
                <td class="empty-td">...</td>
                <td class="empty-td">...</td>
                <td class="empty-td">...</td>
            <?php endif; ?>
        </tr>
        <?php endfor; ?>
    </table>

</div>
</body>
</html>