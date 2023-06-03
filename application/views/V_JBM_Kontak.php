  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
      
        <div class="section-title">
          <h2>Contact</h2>
          <p>Hubungi PT PLN PERSERO JBM Sidoarjo.</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15828.17313502127!2d112.7072374!3d-7.3490366!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe95fbe93a6d0b572!2sPT.%20PLN%20-%20Unit%20Induk%20Transmisi%20JBM%20%26%20UP2B%20Jatim!5e0!3m2!1sid!2sid!4v1675100616614!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row gy-4" style="padding-top: 20px;">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p><?= $kontak->alamat; ?></p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p><?= $kontak->web; ?></p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p><?= $kontak->telepon; ?></p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
