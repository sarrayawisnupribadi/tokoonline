<?php
    include "koneksi.php";

    $id_produk = $_GET['id_produk'];
    $folder = "foto/";

    $sql = "select * from produk where id_produk='$id_produk'";
    $query = mysqli_query($koneksi, $sql);
    $produk = mysqli_fetch_array($query);
    $path = $folder.$produk["foto"];
    if (file_exists($path)) {
        unlink($path);
    }

    $sql = "DELETE FROM produk where id_produk = '$id_produk'";
    $result = mysqli_query($koneksi,$sql);

    if ($result) {
        echo "<script>alert('Berhasil');location.href='tampil_produk.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');</script>";
        echo mysqli_error($koneksi);
    }
?>