  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Media Information</h2>
          <p>Lihat informasi terbaru kami dengan beragam informasi.</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <?php foreach ($media as $row) { ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url('uploads/media/'.$row->gambarMedia); ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?php echo $row->judulMedia; ?></h4>
                <p><?php echo substr($row->teksMedia,0,3); ?></p>
                <div class="portfolio-links">
                  <form action="<?= base_url('/JBM/viewMediaDetail'); ?>" method="POST">
                    <input type="hidden" name="idMedia" value="<?= $row->idMedia; ?>">
                    <input class="btn btn-outline-light" type="submit" value="Read">   
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
      </div>
    </div>
</section>

