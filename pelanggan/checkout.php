<?php
    session_start();
    include "koneksi.php";
    $cart = @$_SESSION['cart'];
    if (count($cart) > 0) {
        $id_petugas= 1;
        $tgl_transaksi = date('Y-m-d');
        $query_transaksi = mysqli_query($koneksi, "INSERT INTO transaksi (id_petugas, id_pelanggan, tgl_transaksi)
        VALUES ('".$id_petugas."','".$_SESSION['id_pelanggan']."', '".$tgl_transaksi."')");

        if ($query_transaksi) {
            $id = mysqli_insert_id($koneksi);
            foreach ($cart as $key => $value) {
                $qty = $value['qty'];
                $harga = $value['harga'];
                $subtotal = $qty*$harga;
                mysqli_query($koneksi, "INSERT INTO detail_transaksi (id_transaksi, id_produk, qty, subtotal)
                VALUES ('".$id."', '".$value['id_produk']."', '".$qty."', '".$subtotal."')");
            }
            unset($_SESSION['cart']);
            echo "<script>alert('Pembelian berhasil');location.href='history_pembelian.php'</script>";
        }
        else{
            echo "<script>alert('Pembelian gagal');location.href='checkout.php'</script>";
        }
    }
?>