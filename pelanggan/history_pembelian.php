
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <br><br><br><br><br>
        <div class="container">
        <div class="card">
            <div class="card-header" style="background-color: #fcadcf;">
                <h1>History Pembelian</h1>
            </div>
            <div class="card-body" style="float: left;">
            
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id Transaksi</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jumlah barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Harga Total</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                     <?php 
                    include "koneksi.php";
                    $query_pembelian = mysqli_query($koneksi, "SELECT * FROM transaksi 
                    where id_pelanggan = '".$_SESSION['id_pelanggan']."' ORDER BY id_transaksi DESC");
                    $no=0;
                    while($data_pembelian=mysqli_fetch_array($query_pembelian)){
                        $no++;
                    ?>
                    <tr>
                        <td><?=$data_pembelian['id_transaksi']?></td>
                        <td><?=$data_pembelian['tgl_transaksi']?></td>
                        <td>
                            <ol>
                            <?php
                            include "koneksi.php";
                            $query_detail = mysqli_query($koneksi, "SELECT * FROM detail_transaksi d
                                            JOIN produk p ON p.id_produk = d.id_produk WHERE
                                            id_transaksi = '".$data_pembelian['id_transaksi']."'");
                            while($data_detail = mysqli_fetch_array($query_detail)){
                                echo "<li>".$data_detail['nama_produk']."</li>";
                            }
                            ?>
                            </ol>
                        </td>
                        <td>
                            <ul style="list-style: none;">
                            <?php
                            include "koneksi.php";
                            $query_detail = mysqli_query($koneksi, "SELECT * FROM detail_transaksi d
                                            JOIN produk p ON p.id_produk = d.id_produk WHERE
                                            id_transaksi = '".$data_pembelian['id_transaksi']."'");
                            while($data_detail = mysqli_fetch_array($query_detail)){
                                echo "<li>".$data_detail['qty']."<li>";
                            }
                            ?>
                            </ul>
                        </td>
                        <td>
                            <ul style="list-style: none;">
                            <?php
                            include "koneksi.php";
                            $query_detail = mysqli_query($koneksi, "SELECT * FROM detail_transaksi d
                                            JOIN produk p ON p.id_produk = d.id_produk WHERE
                                            id_transaksi = '".$data_pembelian['id_transaksi']."'");
                            while($data_detail = mysqli_fetch_array($query_detail)){
                                echo "<li>".($data_detail['subtotal']/$data_detail['qty'])."<li>";
                            }
                            ?>
                            </ul>
                        </td>
                        <td>
                            <ul style="list-style: none;">
                            <?php
                            include "koneksi.php";
                            $query_detail = mysqli_query($koneksi, "SELECT * FROM detail_transaksi d
                                            JOIN produk p ON p.id_produk = d.id_produk WHERE
                                            id_transaksi = '".$data_pembelian['id_transaksi']."'");
                            while($data_detail = mysqli_fetch_array($query_detail)){
                                echo "<li>".$data_detail['subtotal']."</li>";
                            }
                            ?>
                            </ul>
                        </td>
                        <td>
                        <?php
                            include "koneksi.php";
                            $query_bayar = mysqli_query($koneksi, "SELECT SUM(subtotal) AS total FROM detail_transaksi
                            WHERE id_transaksi = '".$data_pembelian['id_transaksi']."'");
                            $data_bayar = mysqli_fetch_array($query_bayar);
                            echo "<label class='alert alert-secondary'>Rp. ".$data_bayar['total']."</label>";
                            ?>
                        </td>
                        <?php
                            include "koneksi.php";
                            echo "<td><label class='alert alert-success'>Checkout Selesai<br></label></td>";
                            ?>
                            
                        </td>
                                                
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    
</body>
</html>