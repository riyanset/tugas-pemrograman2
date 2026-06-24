<!DOCTYPE html>
<html>
<head>
    <title>Materi Pemrograman PHP</title>
    <style>
        body {
            font-family: Arial;
            margin: 40px;
        }
        .box {
            width: 500px;
            padding: 20px;
            border: 1px solid black;
        }
        input[type=text] {
            width: 40px;
        }
        button {
            margin-left: 10px;
        }
    </style>
</head>

<body>

<div class="box">

<h3>Materi Pemrograman PHP</h3>

<form method="post">

[1] Penggunaan IF <br>
[2] Penggunaan SWITCH..CASE <br>
[3] Penggunaan Looping <br>
[4] Penggunaan Array <br><br>

Pilih Materi yang ingin anda pelajari :

<input type="text" name="pilih">

<button type="submit" name="kirim">Kirim</button>

</form>

<hr>

<?php

// FUNCTION IF
function penggunaanIF()
{
    $nilai = 85;

    echo "<h4>Penggunaan IF ELSE</h4>";
    echo "Nilai akhir : ".$nilai."<br>";

    if($nilai >= 80)
    {
        echo "Grade : A";
    }
    else if($nilai >= 70)
    {
        echo "Grade : B";
    }
    else if($nilai >= 60)
    {
        echo "Grade : C";
    }
    else
    {
        echo "Grade : D";
    }
}


// FUNCTION SWITCH CASE
function penggunaanSwitch()
{
    echo "<h4>Penggunaan SWITCH CASE (Kalkulator)</h4>";

    $a = 10;
    $b = 5;
    $operator = "+";

    switch($operator)
    {
        case "+":
            $hasil = $a + $b;
            break;

        case "-":
            $hasil = $a - $b;
            break;

        case "*":
            $hasil = $a * $b;
            break;

        case "/":
            $hasil = $a / $b;
            break;

        default:
            $hasil = "Operator tidak tersedia";
    }

    echo "Bilangan 1 : $a <br>";
    echo "Bilangan 2 : $b <br>";
    echo "Operator : $operator <br>";
    echo "Hasil : $hasil";
}


// FUNCTION LOOPING
function penggunaanLooping()
{
    echo "<h4>Penggunaan Looping</h4>";

    $jumlah = 0;

    echo "Bilangan genap yang habis dibagi 3 : <br>";

    for($i=1;$i<=50;$i++)
    {
        if($i % 2 == 0 && $i % 3 == 0)
        {
            echo $i." ";
            $jumlah++;
        }
    }

    echo "<br><br>";
    echo "Jumlah bilangan tersebut : ".$jumlah;
}


// FUNCTION ARRAY
function penggunaanArray()
{
    echo "<h4>Penggunaan Array</h4>";

    $matriks = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];

    echo "Tampilan Matriks : <br>";

    for($i=0;$i<3;$i++)
    {
        for($j=0;$j<3;$j++)
        {
            echo $matriks[$i][$j]." ";
        }

        echo "<br>";
    }
}



// PROSES INPUT
if(isset($_POST['kirim']))
{
    $pilihan = $_POST['pilih'];

    echo "<hr>";

    switch($pilihan)
    {
        case 1:
            penggunaanIF();
            break;

        case 2:
            penggunaanSwitch();
            break;

        case 3:
            penggunaanLooping();
            break;

        case 4:
            penggunaanArray();
            break;

        default:
            echo "Pilihan tidak tersedia!";
    }
}

?>

</div>

</body>
</html>