<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Register</title>
</head>
<body >
    <br></br>

    <div class="container">
        <div class="card">
            <h1 class="card-header">Register</h1>
            <div class="card-body"> 
                <form action= "proses_tambah_pelanggan.php" method= "post">
                Nama :
                <br><input type= "text" name= "nama" value= "" class= "form-control"></br>
                Alamat :
                <br><textarea name= "alamat" class= "form-control" rows= "4"></textarea></br>
                No Telepon :
                <br><input type="text" name= "telp" class= "form-control">
                Username : 
                <br><input type="text" name="username" value="" class="form-cotrol"></br>
                Password : 
                <br><input type= "password" name="password" value="" class="formm-control"></br>
                <br><input type="submit" name="simpan" value="Register" class="btn btn-dark">
                <a href="index.php" type="button" class="btn btn-danger">Batal</a></br>
        </form>
    </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>