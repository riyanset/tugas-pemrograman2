<!DOCTYPE html>
<html>
<head>
    <title>Kesan Belajar PHP</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
        }

        .box {
            width: 500px;
            margin: 80px auto;
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0px 0px 10px gray;
        }

        h1 {
            color: blue;
        }

        p {
            font-size: 18px;
            text-align: justify;
            line-height: 1.5;
        }
    </style>

</head>

<body>

<div class="box">

<?php
    $judul = "Kesan Pertama Belajar PHP";

    $pesan = "Pertama kali belajar PHP memberikan pengalaman yang menarik. 
    Saya mulai memahami bagaimana membuat website dinamis dengan menggabungkan 
    HTML dan PHP. PHP cukup mudah dipahami karena sintaksnya sederhana dan 
    dapat digunakan untuk mengolah data serta membuat aplikasi web.";
?>

<h1><?php echo $judul; ?></h1>

<p>
<?php echo $pesan; ?>
</p>

</div>

</body>
</html>