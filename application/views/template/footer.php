<?php 
$CI = &get_instance();
$CI->load->model('M_Admin');
$kontak = $CI->M_Admin->getKontakDetail(1);

?>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>MAHIMAM</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">MAHIMAM</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url()?>assets/view/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo base_url()?>assets/view/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url()?>assets/view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/view/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url()?>assets/view/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url()?>assets/view/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/view/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?php echo base_url()?>assets/view/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url()?>assets/view/js/main.js"></script>

</body>

</html>