<?php 
require 'admin/function.php';

$data = query("SELECT * FROM daftarpaket");
$image = query("SELECT * FROM galery ORDER BY id DESC");


 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Primary Meta Tags -->
    <title>Sinar Murni Pond</title>
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

    <meta name="google-site-verification" content="z0svldOgUridP6za5zo8_1eTLr3ZZHcgcfRM7-TOYiI" />


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- css -->
    <link rel="stylesheet" href="assets/css/design.css">


    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- venobox -->
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/vendor/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendor/owlcarousel/dist/assets/owl.theme.default.min.css">

</head>
  <body>

<nav data-aos="fade-down" data-aos-duration="800" class="navbar navbar-expand-lg shadow navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/logo 1.png" class="d-inline-block align-text-top" alt="" width="50px" />
      <p class="navbar-text align-middle text-center d-inline fs-4">Sinar Murni Pond</p>
    </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#portfolio">Produk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#galery">Galeri</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Kontak</a>
      </li>
    </ul>
  </div>
</nav>

<div class="jumbotron text-light text-center jumbotron-fluid position-relative mt-5">
  <div  class="container content logo position-absolute top-50 start-50 translate-middle">
    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900" class="content">
      <img src="img/logo.png" alt="" width="100px">
      <h1 class="align-middle display-5">Sinar Murni Pond</h1>
     <!--  <img src="img/aice.jpeg" alt="" width="200px" class="d-block"> -->
      <!-- <p class="lead fs-4">Menerima Pembuatan 
        <a href="" class="typewrite link-light text-decoration-none" data-period="2000" data-type='[ "Brosur.", "Undangan.", "Map Folder.", "Amplop.", "Hang Tag.", "Paper Bag.", "Stiker.", "Kotak Kemasan.", "Label Produk." ]'>
          <span class="wrap"></span>
        </a>
      </p> -->
      <div class="owl-carousel owl-theme">
        <?php foreach($image as $img) : ?>
        <div class="item example-popover">
         <div class="galery-img">
          <a class="venobox" data-gall="gallery01" href="img/<?= $img['image'] ?>">
            <img src="img/<?= $img['image'] ?>" alt="" class="img-fluid img-thumbnail">
          </a>
        </div>
        </div>
        <?php endforeach; ?>
      </div>
      <a href="https://wa.me/<?= $noWa; ?>" class="ml-auto btn tombol ">Hubungi Kami!</a>
    </div>
  </div>
</div>

<section class="home" id="home">
  <div class="container mt-5 mb-5">
    <div class="row">
      <div data-aos="fade-down" data-aos-duration="500" class="col text-center">
        <div class="section-title">
          <h1>Sinar Murni</h1>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div data-aos="fade-right" data-aos-duration="500" data-aos-delay="300" class="col-md-6 align-self-center ">
        <p class="fs-5">Sinar Murni Pond menyediakan berbagai jasa yakni Pembuatan Brosur, Undangan, Map Folder, Amplop, Hang Tag, Paper Bag, Stiker, Kotak Kemasan, Label Produk, Cetak Offset & Digital, Plong & Pisau Pond, Laminasi & Spot UV, Hot Print & Emboss, Finising Percetakan Dll. </p>
        <a href="https://wa.me/6285972538098" class="btn tombol ">Buat Sekarang!</a>
      </div>
      <div data-aos="zoom-in-up" data-aos-duration="500" data-aos-delay="300" class="col-md-6 img-content">
        <img src="img/home.jpeg" alt="" class="img-fluid img-thumbnail shadow mb-3" style="width: 500px;">
      </div>
    </div>
  </div>
</section>

<section class="portfolio pt-5 pb-5" id="portfolio">
  <div class="container">
    <div class="section-title text-center" data-aos="fade-up">
      <h1>Produk</h1>
      <p>Berikut merupakan beberapa produk kami</p>
    </div>
    <div class="row mt-3" data-aos="fade-up" data-aos-delay="200">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-finishing">Finishing</li>
          <li data-filter=".filter-packaging">Packaging</li>
          <li data-filter=".filter-offset">Offset</li>
          <li data-filter=".filter-pond">Pisau Pond</li>
          <li data-filter=".filter-plong">Plong</li>
        </ul>
      </div>
    </div>

  <div class="row portfolio-container justify-content-center" data-aos="fade-up" data-aos-delay="400">
    <?php foreach($data as $paket) : ?>
    <div class="col-lg-4 col-md-6 portfolio-item <?= $paket['kategori']; ?>" >
      <div class="portfolio-wrap shadow">
        <div class="image">
          <img src="img/<?= $paket['image'] ?>" class="img-fluid" alt="<?= $paket['nama']; ?>">
        </div>
        <div class="portfolio-info">
          <h4><?= $paket['nama'] ?></h4>
          <a href="produk.php?id=<?= $paket['id']; ?>" class="btn btn-outline-light">Lihat Produk</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
</section>

<!-- <section class="galery" id="galery">
  <div class="container mt-5 mb-5">
    <div class="row mb-3">
      <div class="col">
        <div class="section-title text-center" data-aos="fade-up">
          <h1>Galery</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <?php foreach($image as $img) : ?>
      <div class="col-lg-4 mb-3" data-aos="fade-up" data-aos-delay="200">
        <div class="galery-img shadow">
          <a class="venobox" data-gall="gallery01" href="img/<?= $img['image'] ?>">
            <img src="img/<?= $img['image'] ?>" alt="" class="img-fluid img-thumbnail">
          </a>
        </div>
      </div>
      <?php endforeach; ?>
      <div class="owl-carousel owl-theme">
        <div class="item example-popover">
          <img src="img/aice.jpeg" alt="">
        </div>
      </div>
    </div>
  </div>      
</section> -->

<section class="ask">
  <div class="container">
    <div class="row pt-5 pb-5 text-center text-white">
      <div class="col">
        <div class="section-title-white" data-aos="fade-up">
          <h1 class="fs-3">Ada Pertanyaan?</h1>
        </div>
        <p data-aos="fade-up" data-aos-delay="200">Hubungi Kami segera, kami akan sangat senang dapat membantu anda</p>
        <a href="https://wa.me/<?= $noWa; ?>" class="btn btn-outline-light btn-lg" data-aos="fade-up" data-aos-delay="400">Hubungi Kami</a>
      </div>
    </div>
  </div>
</section>

<section class="contact pt-5 pb-5 align-self-center" id="contact">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <div class="section-title" data-aos="fade-up">
          <h1>Kontak</h1>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-6 align-self-center">
        <ul class="list-unstyled" data-aos="fade-up" data-aos-delay="200">
          <li class="h4"><i class="bi bi-geo-alt-fill"></i> Lokasi</li>
          <li style="margin-left: 30px;">Jl. Plawa No. 100A,Sumerta Kauh, Kec. Denpasar Tim.</li>
        </ul>
        <ul class="list-unstyled" data-aos="fade-up" data-aos-delay="400">
          <li class="h4"><i class="bi bi-clock-fill"></i> Jam Buka</li>
          <li style="margin-left: 30px;">Senin - Sabtu</li>
          <li style="margin-left: 30px;">10.00 - 17.00 Wita</li>
        </ul>
        <ul class="list-unstyled" data-aos="fade-up" data-aos-delay="600">
          <li class="h4"><i class="bi bi-envelope-fill"></i> Email</li>
          <li style="margin-left: 30px;">sinarmurnipond@gmail.com</li>
        </ul>
        <ul class="list-unstyled" data-aos="fade-up" data-aos-delay="800">
          <li class="h4"><i class="bi bi-telephone-fill"></i> Telephone / Whatsapp</li>
          <li style="margin-left: 30px;"><a href="https://wa.me/<?= $noWa; ?>">085972530898</a></li>
          <li style="margin-left: 30px;"><a href="https://wa.me/6287864311781">087864311781</a></li>
        </ul>
      </div>
      <div class="col-md-6 maps-cover border-start border-5" data-aos="fade-up" data-aos-delay="200">
        <div class="maps shadow">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.3683047814534!2d115.22570521416476!3d-8.656477890462597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2408453c20ec1%3A0x80af79aed4d195a8!2sSinar%20Murni%20Pond%20Jasa%20Pisau%20Plong%20%2B%20Plong!5e0!3m2!1sid!2sid!4v1633872591115!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>        
  </div>
</section>

<section class="footer">
  <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 my-4">
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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/owlcarousel/dist/owl.carousel.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/produk.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    
  </body>
</html>
