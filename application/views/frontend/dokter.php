<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><b><?= $sub_title ?></b></h2>
          <ol>
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li>Dokter</li>
            <li><?= $sub_title ?></li>
          </ol>
        </div>

      </div>
    </section>
<!-- End Breadcrumbs Section -->

<!-- ======= Doctors Section ======= -->
<section id="doctors" class="doctors">
    <div class="container">

        <div class="text-center section-title">
            <h2 class="section-heading text-uppercase"><?= $sub_title ?></h2>
            <p class="section-subheading text-muted"><b>Daftar <?= $sub_title ?></b> yang Ada di RS Medika Djaya:</p>
        </div>
        
        <div class="row">

            <?php foreach ($dokters as $dokter) : ?>
                <div class="col-lg-6">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row member">

                                <div class="col-lg-4 text-center order-2 order-lg-1">
                                    <img src="<?= base_url("uploads/foto") ?>/<?= $dokter->foto ?>" class="img-fluid">
                                </div>

                                <div class="member-info col-lg-8 details order-1 order-lg-2">
                                    <h4 class="mt-5"><?= $dokter->nama_dokter ?></h4>
                                    <span></span>
                                    <p><?= $dokter->jabatan ?></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
</section><!-- End Doctors Section -->