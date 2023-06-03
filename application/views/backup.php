  <header class="masthead">
    <div class="cotainer px-4 px-lg-5 d-flex h-100 align-center justify-conten-center">
      <div class="text-center mx-auto col align-self-center">
        <h1 class="mx-auto my-0 text-uppercase">PT PLN JBM</h1><h2 class="text-white-50 mx-auto mt-2 mb-5">JL SUNINGRAT SIDOARJO</h2><a class="btn btn-primary" href="#popup1">Get Started</a>
      </div>
    </div>
</div>

<div id="popup1" class="overlay">
  <div class="popup" style="margin-top: 100px;">
    <a class="close" href="#">&times;</a>
    <div class="content">
      <img src="<?= base_url('uploads/lightbox/' . $lightbox->gambarLightBox); ?>" class="menu-img img-fluid" alt="">
    </div>
  </div>
</div>
  </header>
  <section class="about-section text-center" id="contac">
    <div class="container px-4 px-lg5">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://infopublik.id/assets/upload/headline//0_Cegah_Gangguan,_PLN_Lakukan_Pekerjaan_di_GI_Sidoarjo.jpg" class="img-fluid w-100">
          </div>
          <div class="carousel-item">
            <img src="https://statik.tempo.co/data/2019/09/18/id_873360/873360_720.jpg" class="img-fluid w-100">
          </div>
          <div class="carousel-item">
            <img src="https://infopublik.id/assets/upload/headline//0_Cegah_Gangguan,_PLN_Lakukan_Pekerjaan_di_GI_Sidoarjo.jpg" class="img-fluid w-100">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
  </div>  
  </section>
      <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Media</h2>
          <p><strong>Check Our <span>Media</span></strong></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#media">
              <h4>Media</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#aplikasi">
              <h4>Aplikasi</h4>
            </a><!-- End tab nav item -->
        </ul>

    <div class="tab-content" data-oas="fade-up" data-aos-delay="300">
    <div class="tab-pane fade active show" id="media">
      <div class="tab-header text-center">
        <p>Media Informasi</p>
        <h3>Starters</h3>
      </div>

      <div class="row gy-5">
      <?php foreach ($media as $row) { ?>  
        <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="<?php echo base_url('uploads/media/'.$row->gambarMedia); ?>" class="menu-img img-fluid" alt=""></a>
                <h4><?php echo $row->judulMedia; ?></h4>
                <p class="ingredients">
                  <?= $row->teksMedia; ?>
                </p>
              </div>
      <?php }?>
      </div> 
    </div>
    <div class="tab-pane fade" id="aplikasi">

            <div class="tab-header text-center">
              <p>Application</p>
              <h3>We has the application</h3>
            </div>

            <div class="row gy-5">
              <?php foreach ($aplikasi as $apl) : ?>
                    <div class="col-lg-4 col-12 mb-4 mb-lg-13">
                        <div class="custom-block custom-block-full" style=" background-color: white; border-radius: 5px;">
                            <div class="custom-block-info">
                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        <?= $apl->namaAplikasi; ?>
                                    </a>
                                </h5>
                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>

                                <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="btn custom-btn custom-border-btn smoothscroll" style="background-color: red; margin-left: 20%;">
                                        OPEN NOW
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
 
              </div><!-- Menu Item -->
            </div>
          </div>
  </section>

  <section id="stats-counter" class="stats-counter">
      <div id="aplikasi" class="chefs">   
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <i class="bi bi-clock icon"></i>
                <h4>Opening Hours</h4>
                <p>hubungi via admin responsive dengan nomer dibawah ini <a href="https://<?php $kontak->web?>"><?= $kontak->web; ?></a></p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <i class="bi bi-telephone icon"></i>
                <h4>Reservations</h4>
                <p>hubungi admin pada nomor berikut ini <?= $kontak->telepon; ?></p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <i class="bi bi-geo-alt icon"></i>
                <h4>Address</h4>
                <p><?= $kontak->alamat; ?></p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

         </div>
        </div>
      </div>
      </div>
    </section><!-- End Stats Counter Section -->


   <script src="<?php echo base_url('assets/vendor/Bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/aos/aos.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/purecounter/purecounter_vanilla.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js')?>"></script>
    <script src="../../../assets/Bootstrap/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="../../../assets/Bootstrap/main.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>
  
