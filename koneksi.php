<?php

$host = "localhost";
$username = "root";
$password = "";
$nama_database = "alvits_db";

$koneksi = mysqli_connect($host, $username, $password, $nama_database);

if(!$koneksi){
    echo "Gagal Terkoneksi";
}


?>