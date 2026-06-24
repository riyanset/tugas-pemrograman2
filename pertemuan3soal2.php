<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }

        h3 {
            color: red;
            display: inline-block;
            margin: 0 70px;
        }

        .form-container {
            margin-top: 20px;
        }

        input, select, button {
            height: 25px;
            font-size: 14px;
        }

        input {
            width: 130px;
        }

        select {
            width: 40px;
        }

        button {
            margin-left: 5px;
            cursor: pointer;
        }

        .hasil {
            margin-top: 30px;
            font-size: 20px;
            font-weight: bold;
            color: blue;
        }
    </style>
</head>

<body>

<h3>Nilai I</h3>
<h3>Nilai II</h3>

<div class="form-container">

<form method="post">

    <input type="number" name="nilai1" required>

    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <input type="number" name="nilai2" required>

    <button type="submit" name="hitung">submit</button>

</form>

</div>


<?php

if(isset($_POST['hitung'])){

    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $operator = $_POST['operator'];

    switch($operator){

        case "+":
            $hasil = $nilai1 + $nilai2;
            break;

        case "-":
            $hasil = $nilai1 - $nilai2;
            break;

        case "*":
            $hasil = $nilai1 * $nilai2;
            break;

        case "/":
            if($nilai2 != 0){
                $hasil = $nilai1 / $nilai2;
            }else{
                $hasil = "Tidak bisa dibagi 0";
            }
            break;

    }

    echo "<div class='hasil'>";
    echo "Hasil Perhitungan = ".$hasil;
    echo "</div>";

}

?>

</body>
</html>