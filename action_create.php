<?php
    include 'koneksi.php';
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    $queri = "insert into alvits_db (nama, email, pesan) 
    values ('$nama', '$email', '$pesan')
    ";
    $eksekusi = mysqli_query($koneksi, $queri);

    echo "Berhasil menambahkan data!";
?>
<br>
<a href="index.php">Kembali ke Index</a>