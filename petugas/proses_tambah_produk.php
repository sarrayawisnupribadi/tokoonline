<?php
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    $temp = $_FILES['foto']['tmp_name'];
    $type = $_FILES['foto']['type'];
    $size = $_FILES['foto']['size'];
    $name = rand(0,9999).$_FILES['foto']['name'];
    $folder = "foto/";

    include "koneksi.php";

    if($size < 2048000 and ($type == "image/jpeg" or $type == "image/png"))
    {
        move_uploaded_file($temp, $folder . $name);

        $input = mysqli_query($koneksi, "INSERT INTO produk (nama_produk,
        deskripsi, harga, foto) VALUES ('".$nama_produk."',
        '".$deskripsi."',  '".$harga."', '".$name."')");

        if($input){
            echo "<script>alert('v');
            location.href='tampil_produk.php';</script>";
        } else {
            echo "<script>alert('x');
            location.href='tampil_produk.php';</script>";
        }
    }
    else {
        echo "<script>alert('File tidak sesuai');
        location.href='tambah_produk.php';</script>";
    }

?>