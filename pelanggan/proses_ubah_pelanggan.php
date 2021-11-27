<?php
    $id_siswa = $_POST['id_siswa'];
    $nama_siswa = $_POST["nama_siswa"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_kelas = $_POST['id_kelas'];
    
    include "koneksi.php";
    $input = mysqli_query($koneksi, "UPDATE pelanggan SET nama='".$nama."', 
    alamat='".$alamat."', telp='".$telp."', username='".$username."', 
    password='".md5($password)."' where id_pelanggan = '".$id_pelanggan."'");

    if ($input) {
        echo "<script>alert('Berhasil');location.href='tampil_pelanggan.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');location.href='tampil_pelanggann.php';</script>";
    }
?>