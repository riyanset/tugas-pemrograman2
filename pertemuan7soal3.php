<?php
$hasil = [];
$error = '';

if (isset($_POST['hitung'])) {
    $A = $_POST['A']; // 2x3
    $B = $_POST['B']; // 3x3

    // Perkalian Matriks A(2x3) x B(3x3) = C(2x3)
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $hasil[$i][$j] = 0;
            for ($k = 0; $k < 3; $k++) {
                $hasil[$i][$j] += $A[$i][$k] * $B[$k][$j];
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perkalian Matriks</title>
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            margin: 30px;
        }
        .container {
            max-width: 700px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.12);
        }
        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 25px;
        }
        .matriks-wrapper {
            display: flex;
            gap: 30px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
        .matriks-box {
            text-align: center;
        }
        .matriks-box h4 {
            margin-bottom: 8px;
            color: #34495e;
            font-size: 15px;
        }
        .bracket {
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .bracket-left, .bracket-right {
            font-size: 60px;
            font-weight: 100;
            color: #2c3e50;
            line-height: 1;
        }
        .grid {
            display: grid;
            gap: 6px;
        }
        .grid-2x3 { grid-template-columns: repeat(3, 60px); }
        .grid-3x3 { grid-template-columns: repeat(3, 60px); }
        .grid input {
            width: 60px;
            height: 38px;
            text-align: center;
            font-size: 14px;
            border: 1px solid #aab;
            border-radius: 5px;
            padding: 4px;
            background: #f9fbff;
        }
        .grid input:focus {
            outline: none;
            border-color: #4a90d9;
            background: #eef5ff;
        }
        .ordo {
            font-size: 12px;
            color: #888;
            margin-top: 6px;
        }
        .btn-row {
            text-align: center;
            margin: 18px 0;
        }
        .btn-hitung {
            padding: 9px 30px;
            background: #4a90d9;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 15px;
            cursor: pointer;
        }
        .btn-hitung:hover { background: #357abd; }
        .btn-reset {
            padding: 9px 20px;
            background: #e05c5c;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 15px;
            cursor: pointer;
            margin-left: 10px;
        }
        .btn-reset:hover { background: #c0392b; }

        hr { border: none; border-top: 1px solid #ddd; margin: 25px 0; }

        /* OUTPUT */
        .output-section h3 {
            text-align: center;
            color: #2c3e50;
            font-size: 16px;
            margin-bottom: 15px;
        }
        .output-matriks {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }
        .mat-display {
            text-align: center;
        }
        .mat-display .label {
            font-weight: bold;
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
        }
        .mat-display .ordo {
            margin-top: 4px;
        }
        .operator {
            font-size: 28px;
            font-weight: bold;
            color: #4a90d9;
        }
        .result-bracket-left, .result-bracket-right {
            font-size: 60px;
            font-weight: 100;
            color: #27ae60;
            line-height: 1;
        }
        .result-grid {
            display: grid;
            gap: 6px;
        }
        .result-grid-2x3 { grid-template-columns: repeat(3, 60px); }
        .result-cell {
            width: 60px;
            height: 38px;
            background: #eafaf1;
            border: 1px solid #a9dfbf;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            font-weight: bold;
            color: #1e8449;
        }

        /* TABEL LANGKAH */
        .steps {
            margin-top: 20px;
        }
        .steps h4 {
            color: #555;
            font-size: 14px;
            margin-bottom: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background: #4a90d9;
            color: white;
            padding: 8px;
            text-align: center;
            font-size: 13px;
        }
        td {
            padding: 8px;
            text-align: center;
            border: 1px solid #ccc;
            font-size: 13px;
            color: #444;
        }
        tr:nth-child(even) td { background: #f0f6ff; }
    </style>
</head>
<body>
<div class="container">
    <h2>Perkalian Matriks</h2>

    <form method="POST" action="">
        <div class="matriks-wrapper">

            <!-- MATRIKS A (2x3) -->
            <div class="matriks-box">
                <h4>Matriks A</h4>
                <div class="bracket">
                    <span class="bracket-left">[</span>
                    <div class="grid grid-2x3">
                        <?php for ($i = 0; $i < 2; $i++): ?>
                            <?php for ($j = 0; $j < 3; $j++): ?>
                                <input type="number" name="A[<?= $i ?>][<?= $j ?>]"
                                       value="<?= isset($_POST['A'][$i][$j]) ? htmlspecialchars($_POST['A'][$i][$j]) : '' ?>"
                                       placeholder="0" required>
                            <?php endfor; ?>
                        <?php endfor; ?>
                    </div>
                    <span class="bracket-right">]</span>
                </div>
                <p class="ordo">Ordo 2 × 3</p>
            </div>

            <!-- OPERATOR -->
            <div style="display:flex; align-items:center; font-size:30px; font-weight:bold; color:#4a90d9; padding-top:20px;">×</div>

            <!-- MATRIKS B (3x3) -->
            <div class="matriks-box">
                <h4>Matriks B</h4>
                <div class="bracket">
                    <span class="bracket-left">[</span>
                    <div class="grid grid-3x3">
                        <?php for ($i = 0; $i < 3; $i++): ?>
                            <?php for ($j = 0; $j < 3; $j++): ?>
                                <input type="number" name="B[<?= $i ?>][<?= $j ?>]"
                                       value="<?= isset($_POST['B'][$i][$j]) ? htmlspecialchars($_POST['B'][$i][$j]) : '' ?>"
                                       placeholder="0" required>
                            <?php endfor; ?>
                        <?php endfor; ?>
                    </div>
                    <span class="bracket-right">]</span>
                </div>
                <p class="ordo">Ordo 3 × 3</p>
            </div>

        </div>

        <div class="btn-row">
            <button type="submit" name="hitung" class="btn-hitung">Hitung</button>
            <button type="reset" class="btn-reset">Reset</button>
        </div>
    </form>

    <!-- OUTPUT -->
    <?php if (!empty($hasil)): ?>
    <hr>
    <div class="output-section">
        <h3>HASIL PERKALIAN MATRIKS</h3>

        <div class="output-matriks">
            <!-- Tampilkan A -->
            <div class="mat-display">
                <div class="label">A</div>
                <div class="bracket">
                    <span class="bracket-left">[</span>
                    <div class="grid grid-2x3">
                        <?php for ($i = 0; $i < 2; $i++): ?>
                            <?php for ($j = 0; $j < 3; $j++): ?>
                                <div class="result-cell" style="background:#eef5ff; border-color:#b0c4de; color:#2c3e50;">
                                    <?= $_POST['A'][$i][$j] ?>
                                </div>
                            <?php endfor; ?>
                        <?php endfor; ?>
                    </div>
                    <span class="bracket-right">]</span>
                </div>
                <p class="ordo">2 × 3</p>
            </div>

            <div class="operator">×</div>

            <!-- Tampilkan B -->
            <div class="mat-display">
                <div class="label">B</div>
                <div class="bracket">
                    <span class="bracket-left">[</span>
                    <div class="grid grid-3x3">
                        <?php for ($i = 0; $i < 3; $i++): ?>
                            <?php for ($j = 0; $j < 3; $j++): ?>
                                <div class="result-cell" style="background:#eef5ff; border-color:#b0c4de; color:#2c3e50;">
                                    <?= $_POST['B'][$i][$j] ?>
                                </div>
                            <?php endfor; ?>
                        <?php endfor; ?>
                    </div>
                    <span class="bracket-right">]</span>
                </div>
                <p class="ordo">3 × 3</p>
            </div>

            <div class="operator">=</div>

            <!-- Tampilkan Hasil C (2x3) -->
            <div class="mat-display">
                <div class="label">C</div>
                <div class="bracket">
                    <span class="result-bracket-left">[</span>
                    <div class="result-grid result-grid-2x3">
                        <?php for ($i = 0; $i < 2; $i++): ?>
                            <?php for ($j = 0; $j < 3; $j++): ?>
                                <div class="result-cell"><?= $hasil[$i][$j] ?></div>
                            <?php endfor; ?>
                        <?php endfor; ?>
                    </div>
                    <span class="result-bracket-right">]</span>
                </div>
                <p class="ordo" style="color:#27ae60;">2 × 3</p>
            </div>
        </div>

        <!-- TABEL LANGKAH PERHITUNGAN -->
        <div class="steps">
            <h4>Detail Perhitungan :</h4>
            <table>
                <tr>
                    <th>Elemen C</th>
                    <th>Rumus</th>
                    <th>Nilai</th>
                </tr>
                <?php
                $A = $_POST['A'];
                $B = $_POST['B'];
                for ($i = 0; $i < 2; $i++):
                    for ($j = 0; $j < 3; $j++):
                        $parts = [];
                        for ($k = 0; $k < 3; $k++) {
                            $parts[] = "({$A[$i][$k]} × {$B[$k][$j]})";
                        }
                        $rumus = implode(' + ', $parts);
                ?>
                <tr>
                    <td>C[<?= $i+1 ?>][<?= $j+1 ?>]</td>
                    <td><?= $rumus ?></td>
                    <td><strong><?= $hasil[$i][$j] ?></strong></td>
                </tr>
                <?php endfor; endfor; ?>
            </table>
        </div>
    </div>
    <?php endif; ?>

</div>
</body>
</html>