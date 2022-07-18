<?php 
session_start();
require 'function.php';

if ( isset($_POST['login']) ) {
  
  $email = $_POST['email'];
  $password = $_POST['password'];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

  // cek username 
  if ( mysqli_num_rows($result) === 1 ) {
    
    // cek password 
    $row = mysqli_fetch_assoc($result);
    if ( $password === $row['password']) {
      // set session
      $_SESSION['login'] = true;
      $_SESSION['username'] = $row['username'];

      header("Location: index.php");
      exit;
    }

  }
   $error = true;

}


 ?>

 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="style.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Login</title>
  </head>
  <body>

<div class="container">
  <div class="row mt-5">
    <div class="col text-center">
      <h1>Login</h1>
    </div>
  </div>
  <div class="row justify-content-center mt-3">
    <div class="col-md-5">
      <?php if( isset($error) ) : ?>
      <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
        Email atau Password Salah!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php endif; ?>
      <?php if( isset($_SESSION['success']) ) : ?>
      <div class="alert alert-success text-center" role="alert">
        Selamat Anda Telah Terdaftar! Silahkan Login Terlebih Dahulu
      </div>
      <?php endif; ?>
      <form action="" method="post">
         <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="password">
        </div>
        </div>
        <div class="mt-5 text-center">
          <button type="submit" name="login" class="btn btn-outline-primary">Login!</button>
        </div>
      </form>
    </div>
  </div>
</div>                              














    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>	