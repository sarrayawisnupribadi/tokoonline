<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
    <?php
        include "header.php";
        include "koneksi.php";
    ?>
    <br></br>
    <div class="container">
        <div class="card">
        <div class="card-header" style="background-color: #a89df4;">
                <h1>Keranjang Anda</h1>
            </div>
            <div class="card-body">
            <?php 
            if (@$_SESSION['cart'] == null) {
                echo "Keranjang kosong";
            }
            else {
            ?>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total=0;
                    foreach (@$_SESSION['cart'] as $key => $value) :  
                                $total = $total + ($value["qty"] * $value["harga"]);
                            
                        ?>
                    <tr>
                        <td><?=($key+1)?></td>
                        <td><?php echo $value["nama_produk"]?></td>
                        <td> <?php echo $value["harga"]; ?></td>
                        <td> <?php echo $value["qty"]; ?></td>
                        <td> <?php echo number_format($value["qty"] * $value["harga"], 2);?></td>
                        <td><a href="delete_cart.php?id=<?=$key?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a></td>
                    </tr>
                    <tr>
						<td colspan="3" allign="right">Total</td>
                        <td></td>
						<td allign="right"><?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <a href="checkout.php" type="button" class="btn btn-dark">checkout</a>
            <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>
