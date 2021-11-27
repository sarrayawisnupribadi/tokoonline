<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
<div class="b-example-divider"></div>

<div class="container">
  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <img src="aaa.png" class="bi me-2" width="100" height="80" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="home.php" class="nav-link px-2 link-dark">Home</a></li>
      <li><a href="cart.php" class="nav-link px-2 link-dark">Keranjang</a></li>
      <li><a href="history_pembelian.php" class="nav-link px-2 link-dark">History</a></li>
    </ul>

    <div class="col-md-3 text-end">
      <a href="proses_logout.php" type="button" class="btn btn-dark">Log Out</a>
      </div>
  </header>
</div>

