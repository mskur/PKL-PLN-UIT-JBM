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

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
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

        <li class="nav-item dropdown">

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
   <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('/AdminJBM/dashboard'); ?>">
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
        <a class="nav-link" href="<?= base_url('/AdminJBM/viewKontak'); ?>">
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
      <h1>Media Infomation</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('/AdminJBM/dashboard'); ?>">Home</a></li>
          <li class="breadcrumb-item active">Contact Person</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
            
            <!-- Reports -->
              <div class="card">

                <div class="card-body">
                <h5 class="card-title">Contact <span>/Person</span></h5>
                <?php echo validation_errors(); ?>
				<form action="<?php echo site_url('AdminJBM/updateKontakAction')?>" method="POST">
				    <input type="hidden" name="idKontak" value="<?= $kontak->idKontak; ?>">
				    <div class="mb-3">
			    		<label class="form-label" for="formGroupExampleInput">Alamat Web</label>	
			    		<input  class="form-control" type="text" name="web" value="<?= $kontak->web; ?>" required> 
			    	</div>
			    	<div class="mb-3">
			    		<label class="form-label" for="formGroupExampleInput">Nomor Telpone</label>
			    		<input  class="form-control" type="text" name="telepon" value="<?= $kontak->telepon; ?>" required>
		    		</div>	
			   		<div class="mb3">
			   			<label class="form-label" for="formGroupExampleInput">Alamat</label>
		    			<textarea class="form-control" type="text" name="alamat" required rows="3"><?= $kontak->alamat; ?></textarea> <br>
			    	</div>
					<input type="submit" value="Submit" class="btn btn-primary mb-3">
				    </div>
				</form>
            </div><!-- End Reports -->
 
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>PT PLN JBM</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="V_JBM_Dashboard.php">MAMIZAM</a>
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
