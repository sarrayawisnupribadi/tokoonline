<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">    
<main class="form-signin">
  <form action="proses_login.php" method="POST">
    <div card>
      
    </div>
    <h3>Sign In</h3>  
    <img class="mb-4" src="aa.png" alt="" width="250" height="250">
    <br>

    <div class="form-floating">
      <input type="username" name= "username" class="form-control"  placeholder="Insert Username" required>
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" name= "pasword" class="form-control"  placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>
    
    <button class="w-100 btn btn-lg btn-dark" type="submit">Sign in</button>
    <br></br>
    Tidak punya akun?<a href="tambah_pelanggan.php" class=" link-dark">Daftar</a>
  </form>
</main>
    
  </body>
</html>