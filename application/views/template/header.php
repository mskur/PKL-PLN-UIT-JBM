<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$title?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="view/img/favicon.png" rel="icon">
  <link href="view/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url()?>assets/view/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/view/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/view/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/view/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/view/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/view/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url()?>assets/view/css/style.css" rel="stylesheet">

</head>

<body>
<div id="popup1" class="overlay">
  <div class="popup" style="margin-top: 150px; width: 50%; height: 50%">
    <a class="close" href="#">&times;</a>
    <div class="content">
      <img src="<?= base_url('uploads/lightbox/' . $lightbox->gambarLightBox); ?>" class="menu-img img-fluid" alt="">
    </div>
  </div>
</div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="<?= base_url('/JBM'); ?>"><img style="width: 100%;" src="https://upload.wikimedia.org/wikipedia/commons/2/20/Logo_PLN.svg"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="<?= base_url('/JBM'); ?>">Home</a></li>
          <li><a href="<?= base_url('/JBM/aplikasiJBM'); ?>">Aplikasi</a></li>
          <li><a href="<?= base_url('/JBM/mediaJBM'); ?>">Media</a></li>
          <li><a href="<?= base_url('/JBM/kontakJBM'); ?>">Contac</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>

  </header><!-- End Header -->
