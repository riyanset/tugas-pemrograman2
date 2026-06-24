<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret Bilangan</title>
    <style>
body {
    font-family: arial, sans-serif;
    background: #f4f6f8;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.container {
    width: 400px;
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
        h2 {
            text-align: center;
        }
        input[type=number] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type=submit] {
            width: 100%;
            padding: 10px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background: #45a049;
        }
        .hasil {
            margin-top: 20px;
            padding: 10px;
            background: #eef;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Deret Bilangan</h2>
        <form method="post">
            <label>Nilai Awal</label>
            <input type="number" name="awal" required>
            <label>Nilai Akhir</label>
            <input type="number" name="akhir" required>
            <input type="submit" name="hitung" value="Hitung">
        </form>
        <?php
        if (isset($_POST["hitung"])) {
            $awal = $_POST["awal"];
            $akhir = $_POST["akhir"];

            $jumlah = 0;
            $total = 0;
            $deret = [];
            for ($i = $awal; $i <= $akhir; $i++) {
                if ($i % 2 != 0 && $i % 3 == 0) {
                    $deret[] = $i;
                    $jumlah++;
                    $total += $i;
                }
            }
            echo "<div class='hasil'>";
            if ($jumlah > 0) {
                echo "<b>Deret:</b>" . implode(", ", $deret) . "<br>";
                echo "<b>Jumlah bilangan:</b> $jumlah<br>";
                echo "<b>Total:</b> $total";
            } else {
                echo "Tidak ada bilangan yang memenuhi";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>