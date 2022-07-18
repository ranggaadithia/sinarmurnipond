<?php 
require 'admin/function.php';

$id = $_GET['id'];

$paket = query("SELECT * FROM daftarpaket WHERE id = $id")[0];

$list = $paket['list'];

$split = explode(',', $list);


 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Primary Meta Tags -->
    <title><?= $paket['nama'] ?> | Sinar Murni Pond</title>
    <meta name="title" content="Sinar Murni Pond">
    <meta name="description" content="Percetakan Sinar Murni menyediakan berbagai jasa yakni Pembuatan Brosur, Undangan, Map Folder, Amplop, Hang Tag, Paper Bag, Stiker, Kotak Kemasan, Label Produk, Cetak Offset & Digital, Plong & Pisau Pond, Laminasi & Spot UV, Hot Print & Emboss, Finising Percetakan Dll.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://sinar-murni-pond.epizy.com/">
    <meta property="og:title" content="Sinar Murni Pond">
    <meta property="og:description" content="Percetakan Sinar Murni menyediakan berbagai jasa yakni Pembuatan Brosur, Undangan, Map Folder, Amplop, Hang Tag, Paper Bag, Stiker, Kotak Kemasan, Label Produk, Cetak Offset & Digital, Plong & Pisau Pond, Laminasi & Spot UV, Hot Print & Emboss, Finising Percetakan Dll.">
    <meta property="og:image" content="img/home.jpeg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://sinar-murni-pond.epizy.com/">
    <meta property="twitter:title" content="Sinar Murni Pond">
    <meta property="twitter:description" content="Percetakan Sinar Murni menyediakan berbagai jasa yakni Pembuatan Brosur, Undangan, Map Folder, Amplop, Hang Tag, Paper Bag, Stiker, Kotak Kemasan, Label Produk, Cetak Offset & Digital, Plong & Pisau Pond, Laminasi & Spot UV, Hot Print & Emboss, Finising Percetakan Dll.">
    <meta property="twitter:image" content="img/home.jpeg">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/design.css" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">



    
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

    
</head>
  <body>


    <nav class="navbar navbar-expand-lg shadow navbar-light bg-light fixed-top mb-5">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="img/logo 1.png" class="d-inline-block align-text-top" alt="" width="50px" />
          <p class="navbar-text align-middle text-center d-inline fs-4">Sinar Murni Pond</p>
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#portfolio">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#galery">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#contact">Kontak</a>
          </li>
        </ul>
      </div>
    </nav>

<section class="produk" style="padding: 100px 0 50px 0; background-color: #f4f4f4;">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h1 class="fw-light"><?= $paket['nama']; ?></h1>
      </div>
    </div>  
    <div class="row mt-3">
      <div class="col-lg-6">
        <figure class="figure">
          <a class="venobox text-center" data-gall="gallery01" href="img/<?= $paket['image'] ?>">
            <img src="img/<?= $paket['image']; ?>" class="figure-img img-fluid rounded shadow" alt="<?= $paket['nama']; ?>">
          </a>
          <figcaption class="figure-caption text-end">Gambar diatas hanya contoh.</figcaption>
        </figure>
      </div>
      <div class="col-lg-6">
        <p style="text-align: justify;"><?= $paket['deskripsi']; ?></p>
        <strong>Keuntungan Membuat <?= $paket['nama']; ?> di Sinar Murni Pond</strong>  
        <ul class="list-unstyled">
        <?php foreach($split as $list) : ?>
          <li><i class="bi bi-check2 text-success fs-5"></i><?= $list; ?></li>
        <?php endforeach; ?>
        </ul>
        <section class="price text-center">
          <small class="fs-6 text-muted">Harga Mulai Dari</small><br>
          <?php if($paket['diskon'] >= 1) : ?>
            <span class="badge bg-success"><?= $paket['diskon']; ?>% off</span>
            <p class="text-muted fs-5"><del><span> <?= rupiah($paket['harga']); ?></span> </del></p>
              <h3 class="" style="margin-top: -10px;"><span class="text-success"><?= rupiah(diskon($paket['harga'], $paket['diskon'])); ?><small class="text-muted fw-light fs-6">/<?= $paket['satuan']; ?></small></span></h3>
            <?php else : ?>
              <h3 class="card-title pricing-card-title"><?= rupiah($paket['harga']); ?><small class="text-muted fw-light fs-6">/<?= $paket['satuan'] ?></small></h3>
          <?php endif; ?>
        
        <a href="https://wa.me/<?= $noWa; ?>?text=<?= pesan($paket['pesanwa']); ?>" style="width: 100%;" class="btn tombol mt-3"><i class="bi bi-whatsapp"></i> Pesan Sekarang</a>
        </section>
      </div>
    </div>
  </div>
</section>










<section class="footer">
  <footer class="d-flex bg-lightx flex-wrap justify-content-center align-items-center py-3 my-4">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <img src="img/logo.png" alt="" width="30px">
      </a>
      <span class="text-muted">&copy; 2021 Sinar Murni Pond</span>
  </footer>
</section>




<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/jquery.counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/js/produk.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>    
  </body>
</html>
