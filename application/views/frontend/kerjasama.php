<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><b><?= $sub_title ?></b></h2>
          <ol>
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li>Lain-Lain</li>
            <li><?= $sub_title ?></li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-6 g-4">
          <?php foreach ($data as $key) : ?>
            <div class="col">
                <div class="card">
                    <img src="<?= base_url("uploads/rekan_kerjasama") ?>/<?= $key['foto'] ?>" class="card-img-top mt-3" height="140px">
                    <div class="card-body">
                        <hr>
                        <h5 class="card-title text-center"><?= $key['nama'] ?></h5>
                    </div>
                </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

 </main><!-- End #main -->