<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Nilai Mahasiswa</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .container {
        width: 420px;
        margin: 50px auto;
        background: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }

    h2 {
        text-align: center;
        color: #3498db;
    }

    table {
        width: 100%;
    }

    td {
        padding: 8px;
    }

    input[type="text"],
    input[type="number"] {
        width: 95%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .btn {
        width: 100%;
        padding: 10px;
        background: #3498db;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .btn:hover {
        background: #2980b9;
    }

    .hasil {
        margin-top: 20px;
        background: #ecf0f1;
        padding: 15px;
        border-radius: 8px;
    }

    .hasil h3 {
        text-align: center;
        color: #2c3e50;
    }

    .nilai {
        color: green;
        font-weight: bold;
    }

</style>

</head>

<body>

<div class="container">

<h2>Input Data Nilai Mahasiswa</h2>


<form method="POST">

<table>

<tr>
    <td>Nama</td>
    <td>
        <input type="text" name="nama" required>
    </td>
</tr>


<tr>
    <td>Jurusan</td>
    <td>
        <input type="text" name="jurusan" required>
    </td>
</tr>


<tr>
    <td>Nilai Tugas</td>
    <td>
        <input type="number" name="tugas" min="0" max="100" required>
    </td>
</tr>


<tr>
    <td>Nilai UTS</td>
    <td>
        <input type="number" name="uts" min="0" max="100" required>
    </td>
</tr>


<tr>
    <td>Nilai UAS</td>
    <td>
        <input type="number" name="uas" min="0" max="100" required>
    </td>
</tr>


</table>

<br>

<button type="submit" name="hitung" class="btn">
    Hitung Nilai
</button>


</form>


<?php

if(isset($_POST["hitung"])){

    $nama = $_POST["nama"];
    $jurusan = $_POST["jurusan"];

    $tugas = intval($_POST["tugas"]);
    $uts   = intval($_POST["uts"]);
    $uas   = intval($_POST["uas"]);


    // Validasi nilai
    if($tugas > 100 || $uts > 100 || $uas > 100){

        echo "
        <div class='hasil'>
            <h3>Error</h3>
            Nilai tidak boleh lebih dari 100!
        </div>
        ";

    }else{


        // Menghitung rata-rata
        $rata = ($tugas + $uts + $uas) / 3;


        // Menentukan grade
        if($rata >= 85){
            $grade = "A";
        }
        elseif($rata >= 70){
            $grade = "B";
        }
        elseif($rata >= 60){
            $grade = "C";
        }
        elseif($rata >= 50){
            $grade = "D";
        }
        else{
            $grade = "E";
        }


?>

<div class="hasil">

<h3>Hasil Perhitungan</h3>

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
    <td>Rata-rata</td>
    <td class="nilai">
        : <?php echo number_format($rata,2); ?>
    </td>
</tr>


<tr>
    <td>Grade</td>
    <td class="nilai">
        : <?php echo $grade; ?>
    </td>
</tr>


</table>

</div>


<?php

    }

}

?>


</div>

</body>
</html>