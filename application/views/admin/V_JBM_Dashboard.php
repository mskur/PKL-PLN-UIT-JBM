<?php 
$CI = &get_instance();
$username = $CI->session->userdata('username');

//get level
$CI->db->where('username', $username);
$query = $CI->db->get('admin');
$level = $query->row_array();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url()?>assets/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url()?>assets/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url()?>assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url()?>assets/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">PT PLN JBM</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $username;?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $username;?></h6>
              <span><?php echo $level['level'];?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo site_url('AdminJBM/logoutAdmin')?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?= base_url('/AdminJBM/dashboard'); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <?php if($level['level'] == 'superadmin'): ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('/AdminJBM/viewAdmin'); ?>">
          <i class="bi bi-person"></i><span>Account</span>
        </a>
      </li><!-- End Forms Nav -->
      <?php endif; ?>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('/AdminJBM/viewAplikasi');?>">
          <i class="bi bi-layout-text-window-reverse"></i><span>Application</span>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('/AdminJBM/viewMedia'); ?>">
          <i class="bi bi-file-earmark"></i><span>Media</span>
        </a>
      </li><!-- End Charts Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('/AdminJBM/viewKontak'); ?>">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed"  href="<?= base_url('/AdminJBM/lightBox'); ?>">
          <i class="bi bi-menu-button-wide"></i><span>Components</span>
        </a>
      </li>
    </ul>

  </aside><!-- End Sidebar-->


  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('/AdminJBM/dashboard'); ?>">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Aplikasi <span>| Owner</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-layout-text-window-reverse"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $countAplikasi; ?></h6>
                      <span class="text-success small pt-1 fw-bold">Jumlah</span> <span class="text-muted small pt-2 ps-1">Terpublish</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                
                <div class="card-body">
                  <h5 class="card-title">Media <span>| Informasi</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-file-earmark"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $countMedia; ?></h6>
                      <span class="text-success small pt-1 fw-bold">Jumlah</span> <span class="text-muted small pt-2 ps-1">Terpublish</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">Akun <span>| Tersedia</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $countAdmin?></h6>
                      <span class="text-danger small pt-1 fw-bold">Jumlah</span> <span class="text-muted small pt-2 ps-1">Terdaftar</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
            
            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="card-body">
                  <h5 class="card-title">Media <span>/Now</span></h5>

                  <!-- Line Chart -->
                  <div class="grid-container">
                  <?php $no = 0; 
                  foreach ($media as $med) : ?> 
                   <?php $no++;?>
                    <div class="grid-item">
                            <img src="<?php echo base_url('uploads/media/'. $med->gambarMedia); ?>" class="img-fluid" alt="" style="width: 100px; height: 100px;" >
                            <h4 class="card-title"><?= $med->judulMedia; ?></h4>
                            <p class="card-text" style="margin-top: -20px; font-size: 20px;"><small class="text-muted"><?php echo substr($med->teksMedia,0,3); ?></small></p>
                        <?php if($no == 6){
                            break;
                        }

                        ?>
                    </div>
                <?php endforeach;?>
                  </div>
                </div>

                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

            <!-- Recent Sales -->
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">
          <!-- Website Traffic -->
          <div class="card">

            <div class="card-body pb-0">
              <h5 class="card-title">Lightbox View <span>| Now</span></h5>

                <form action="<?= base_url('/AdminJBM/updateLightBoxAction'); ?>" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="idLightBox" value="<?= $lightbox->idLightBox; ?>" readonly>
                  <img src="<?= base_url('uploads/lightbox/' . $lightbox->gambarLightBox); ?> " width="100%">
                </form>
                <br>

            </div>
          </div><!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <?php $no = 0; ?>
                  <?php foreach ($aplikasi as $app) : ?> 
                  <?php $no++;?>
                  <h4><a href="#"><?= $app->namaAplikasi; ?></a></h4>
                  <p><?= $app->alamatAplikasi; ?></p>
                   <?php if($no == 6){
                            break;
                        }

                        ?>
                    <?php endforeach;?>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->



  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>PT PLN JBM</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">MAMIZAM</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url()?>assets/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url()?>assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?php echo base_url()?>assets/assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo base_url()?>assets/assets/vendor/quill/quill.min.js"></script>
  <script src="<?php echo base_url()?>assets/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo base_url()?>assets/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url()?>assets/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url()?>assets/assets/js/main.js"></script>

</body>

</html>
