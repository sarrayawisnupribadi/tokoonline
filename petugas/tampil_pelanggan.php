<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
    <?php
        include "navbar.php";
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Data Pelanggan</h1>
            </div>
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id Pelanggan</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No. Telp</th>
                    <th scope="col">Username</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include "koneksi.php";
                    if (isset($_POST['cari'])) {
                        $cari = $_POST['cari'];
                        $query_pelanggan = mysqli_query($koneksi, 
                        "select * from pelanggan where pelanggan.id_pelanggan like '%$cari%' or nama like '%$cari%'");
                          } else {
                            $query_pelanggan = mysqli_query($koneksi, "select * from pelanggan");
                          }
                    while($data_pelanggan = mysqli_fetch_array($query_pelanggan)) {
                ?>
                    <tr>
                        <td><?=$data_pelanggan['id_pelanggan']?></td>
                        <td><?=$data_pelanggan['nama']?></td>
                        <td><?=$data_pelanggan['alamat']?></td>
                        <td><?=$data_pelanggan['telp']?></td>
                        <td><?=$data_pelanggan['username']?></td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
            
         
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


</body>
</html>