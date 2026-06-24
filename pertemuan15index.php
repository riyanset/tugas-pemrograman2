<?php

$conn = mysqli_connect("localhost","root","","toko_online");

if(!$conn){
    die("Koneksi gagal");
}

if(isset($_POST['pinjam'])){

    $nama = mysqli_real_escape_string($conn,$_POST['nama']);
    $id_buku = (int)$_POST['id_buku'];
    $jumlah = (int)$_POST['jumlah'];

    // cek data buku
    $cek = mysqli_query(
        $conn,
        "SELECT * FROM buku WHERE id='$id_buku'"
    );

    $buku = mysqli_fetch_assoc($cek);

    if(!$buku){

        $response = [
            'status' => 'error',
            'message' => 'ID buku tidak ditemukan'
        ];

    }elseif($jumlah <= 0){

        $response = [
            'status' => 'error',
            'message' => 'Jumlah pinjam tidak valid'
        ];

    }elseif($buku['stok'] < $jumlah){

        $response = [
            'status' => 'error',
            'message' => 'Stok buku tidak mencukupi'
        ];

    }else{

        // jalankan procedure
        $result = mysqli_query(
            $conn,
            "CALL pinjam_buku('$nama',$id_buku,$jumlah)"
        );

        // clear result procedure
        while(mysqli_more_results($conn)){
            mysqli_next_result($conn);
        }

        if($result){

            $response = [
                'status' => 'success',
                'message' => 'Peminjaman berhasil'
            ];

        }else{

            $response = [
                'status' => 'error',
                'message' => mysqli_error($conn)
            ];
        }
    }

    // response ajax
    if(isset($_POST['ajax'])){

        header('Content-Type: application/json');

        echo json_encode($response);

        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Aplikasi Perpustakaan</title>

<link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Poppins',sans-serif;
    background:#f4f2ee;
    padding:40px 20px;
    color:#222;
}

.container{
    max-width:1200px;
    margin:auto;
}

.header{
    margin-bottom:30px;
}

.header h1{
    font-size:38px;
    margin-bottom:5px;
}

.header p{
    color:#777;
    font-size:14px;
}

.layout{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:25px;
}

@media(max-width:768px){

    .layout{
        grid-template-columns:1fr;
    }
}

.card{
    background:white;
    padding:25px;
    border-radius:18px;
    box-shadow:0 4px 12px rgba(0,0,0,0.05);
}

.card-title{
    font-size:22px;
    font-weight:600;
    margin-bottom:20px;
}

table{
    width:100%;
    border-collapse:collapse;
}

table th{
    background:#111;
    color:white;
    padding:14px;
    text-align:left;
    font-size:14px;
}

table td{
    padding:14px;
    border-bottom:1px solid #eee;
    font-size:14px;
}

.badge{
    padding:6px 12px;
    border-radius:20px;
    font-size:12px;
    font-weight:600;
}

.ok{
    background:#dff5df;
    color:#2f7d32;
}

.low{
    background:#fff2cc;
    color:#9c6b00;
}

.out{
    background:#ffdede;
    color:#c0392b;
}

.form-group{
    margin-bottom:18px;
}

label{
    display:block;
    margin-bottom:8px;
    font-weight:500;
}

input{
    width:100%;
    padding:14px;
    border:1px solid #ddd;
    border-radius:12px;
    font-size:14px;
    outline:none;
}

input:focus{
    border-color:#111;
}

button{
    width:100%;
    padding:15px;
    border:none;
    border-radius:12px;
    background:#111;
    color:white;
    font-size:15px;
    font-weight:600;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    opacity:0.85;
}

.result{
    margin-top:18px;
    padding:14px;
    border-radius:12px;
    display:none;
    font-size:14px;
    font-weight:500;
}

.success{
    background:#dff5df;
    color:#2f7d32;
}

.error{
    background:#ffdede;
    color:#c0392b;
}

</style>

</head>

<body>

<div class="container">

    <div class="header">
        <h1>Aplikasi Peminjaman Buku</h1>
        <p>Database Transaction menggunakan PHP dan MySQL</p>
    </div>

    <div class="layout">

        <!-- tabel buku -->
        <div class="card">

            <div class="card-title">
                Data Buku
            </div>

            <table>

                <tr>
                    <th>ID</th>
                    <th>Nama Buku</th>
                    <th>Stok</th>
                </tr>

                <?php

                $data = mysqli_query($conn,"SELECT * FROM buku");

                while($d = mysqli_fetch_assoc($data)){

                    $stok = $d['stok'];

                    if($stok == 0){

                        $class = "out";

                    }elseif($stok <= 2){

                        $class = "low";

                    }else{

                        $class = "ok";
                    }

                ?>

                <tr>

                    <td>
                        <?php echo $d['id']; ?>
                    </td>

                    <td>
                        <?php echo $d['nama_buku']; ?>
                    </td>

                    <td>

                        <span class="badge <?php echo $class; ?>">
                            <?php echo $stok; ?>
                        </span>

                    </td>

                </tr>

                <?php } ?>

            </table>

        </div>

        <!-- form -->
        <div class="card">

            <div class="card-title">
                Form Peminjaman Buku
            </div>

            <form id="formPinjam">

                <div class="form-group">

                    <label>Nama Peminjam</label>

                    <input
                    type="text"
                    name="nama"
                    required>

                </div>

                <div class="form-group">

                    <label>ID Buku</label>

                    <input
                    type="number"
                    name="id_buku"
                    required>

                </div>

                <div class="form-group">

                    <label>Jumlah Pinjam</label>

                    <input
                    type="number"
                    name="jumlah"
                    required>

                </div>

                <button type="submit">
                    Pinjam Buku
                </button>

            </form>

            <div id="hasil" class="result"></div>

        </div>

    </div>

</div>

<script>

document.getElementById('formPinjam')
.addEventListener('submit',function(e){

    e.preventDefault();

    let formData = new FormData(this);

    // WAJIB
    formData.append('pinjam','1');
    formData.append('ajax','1');

    fetch('',{

        method:'POST',
        body:formData

    })

    .then(response => response.json())

    .then(data => {

        let hasil = document.getElementById('hasil');

        hasil.style.display = 'block';

        if(data.status == 'success'){

            hasil.className = 'result success';

        }else{

            hasil.className = 'result error';
        }

        hasil.innerHTML = data.message;

        // reload jika berhasil
        if(data.status == 'success'){

            document.getElementById('formPinjam').reset();

            setTimeout(() => {

                location.reload();

            },1500);
        }

    })

    .catch(error => {

        let hasil = document.getElementById('hasil');

        hasil.style.display = 'block';

        hasil.className = 'result error';

        hasil.innerHTML = 'Terjadi kesalahan';

        console.log(error);

    });

});

</script>

</body>
</html>
