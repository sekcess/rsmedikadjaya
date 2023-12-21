<!-- ======= Doctors Section ======= -->
<section id="doctors" class="doctors mt-5">
    <div class="container">

        <div class="text-center section-title mt-5">
            <h2 class="section-heading text-uppercase">Daftar Dokter</h2>
            <p class="section-subheading text-muted">Dibawah Ini Adalah <b>DOKTER UNGGULAN</b> Yang Ada:</p>
        </div>

        <div class="row">

            <?php foreach ($data as $key) : ?>
                <div class="col-lg-6">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row gy-4 member">

                                <div class="col-lg-4 text-center order-2 order-lg-1">
                                    <img src="<?= base_url("uploads/foto") ?>/<?= $key["foto"] ?>" class="img-fluid" height="150" width="150">
                                </div>

                                <div class="member-info col-lg-8 details order-1 order-lg-2">
                                    <h4 class="mt-4"><?= $key['nama']; ?></h4>
                                    <p class="mt-5"><?= $key['jabatan']; ?></p>
                                    <span></span>
                                    <p class="mt-2"><?= $key['pendidikan']; ?></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
</section><!-- End Doctors Section -->