<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><b>Layanan <?= $sub_title ?></b></h2>
          <ol>
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li>Layanan</li>
            <li>Layanan <?= $sub_title ?></li>
          </ol>
        </div>

      </div>
    </section>
<!-- End Breadcrumbs Section -->

<!-- ======= Departments Section ======= -->
<section id="departments" class="departments page-section">
    <div class="container">
    <div class="col">
        
    
        <div class="text-center section-title">
            <h2 class="section-heading text-uppercase">Layanan <?= $sub_title ?></h2>
            <p class="section-subheading text-muted">Dibawah Ini Adalah <b>Layanan <?= $sub_title ?></b> Yang Kami Siapkan:</p>
        </div>
        
        <?php foreach ($ruangans2 as $ruangan) : ?>
        <div class="card border-info mb-3">
            <div class="card-header text-center">
                <img class="card-img-top" src="<?= base_url("uploads/ruangan") ?>/<?= $ruangan->foto ?>"> 
            </div>
                <div class="card-body">
                    <?= $ruangan->deskripsi ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
</div>
    </div>
</section><!-- End Departments Section -->
<hr>