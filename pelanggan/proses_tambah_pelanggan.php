<?php
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $telp = $_POST["telp"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    include "koneksi.php";
    $input = mysqli_query($koneksi, "INSERT INTO pelanggan 
    (nama, alamat, telp, username, password) VALUES 
    ('".$nama."', '".$alamat."', '".$telp."', '".$username."','".md5($password)."')");

    if ($input) {
        echo "<script>alert('V');location.href='index.php';</script>";
    }
    else {
        echo "<script>alert('X');location.href='tambah_pelanggan.php';</script>";
    }
?>