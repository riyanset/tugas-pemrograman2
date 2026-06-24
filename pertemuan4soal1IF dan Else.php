<!DOCTYPE html>
<html>
<head>
    <title>Hitung Nilai Mahasiswa</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
        }
        .container {
            width: 420px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
        }
        td {
            padding: 8px;
        }
        input {
            width: 100%;
            padding: 5px;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background: #3498db;
            color: white;
            border: none;
            cursor: pointer;
        }
        .hasil {
            margin-top: 20px;
            background: #ecf0f1;
            padding: 10px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Input Data Nilai</h2>

    <form method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" required></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td><input type="number" name="tugas" required></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td><input type="number" name="uts" required></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td><input type="number" name="uas" required></td>
            </tr>
        </table>

        <br>
        <button type="submit" name="hitung" class="btn">Hitung</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {

        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $tugas = $_POST['tugas'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];

        // Hitung rata-rata
        $rata = ($tugas + $uts + $uas) / 3;

        // SWITCH CASE untuk grade
        $nilai = floor($rata / 10);

        switch ($nilai) {
            case 10:
            case 9:
            case 8:
                $grade = "A";
                break;
            case 7:
                $grade = "B";
                break;
            case 6:
                $grade = "C";
                break;
            case 5:
                $grade = "D";
                break;
            default:
                $grade = "E";
                break;
        }
    ?>

    <div class="hasil">
        <h3>Hasil</h3>
        <table>
            <tr>
                <td>Nama</td>
                <td>: <?php echo $nama; ?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>: <?php echo $jurusan; ?></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>: <?php echo $tugas; ?></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>: <?php echo $uts; ?></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>: <?php echo $uas; ?></td>
            </tr>
            <tr>
                <td><b>Rata-rata</b></td>
                <td>: <b><?php echo number_format($rata, 2); ?></b></td>
            </tr>
            <tr>
                <td><b>Grade</b></td>
                <td>: <b><?php echo $grade; ?></b></td>
            </tr>
        </table>
    </div>

    <?php } ?>

</div>

</body>
</html>