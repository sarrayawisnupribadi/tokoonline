<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        
            include "koneksi.php";
            $query_login=mysqli_query($koneksi,"SELECT * FROM petugas where 
            username = '".$username."' and password = '".md5($password)."'");

            if(mysqli_num_rows($query_login)>0){
                $data_login = mysqli_fetch_array($query_login);
                session_start();
                $_SESSION['id_petugas']=$data_login['id_petugas'];
                $_SESSION['nama_petugas']=$data_login['nama_petugas'];
                $_SESSION['status_login']=true;
                echo "<script>alert('login berhasil'); location.href='tampil_pelanggan.php';</script>";
            } else {
                echo "<script>alert('Login Gagal');location.href='index.php';</script>";
            }
        }
?>