<body>

  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details" style="margin-top: 10%;">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="<?= base_url('uploads/media/' . $media->gambarMedia); ?>">
                </div>

              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3><?= $media->judulMedia; ?></h3>
              <ul>
                <li><strong>Date</strong>: <?= $media->created_at; ?></li>
                <li><strong>Client</strong>: <?= $media->username; ?></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <p>
                <?= $media->teksMedia; ?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
