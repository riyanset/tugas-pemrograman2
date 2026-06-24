<?php

$conn=mysqli_connect(
"localhost",
"root",
"",
"toko_online"
);


if(!$conn){

die("Database tidak terhubung");

}


echo "Database berhasil";

?>