<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><b><?= $sub_title ?></b></h2>
          <ol>
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li><?= $sub_title ?></li>
          </ol>
        </div>

      </div>
    </section>
<!-- End Breadcrumbs Section -->

<section class="page-section" id="profil">
    <div class="container">
        <div class="text-center">
            <div class="section-title">
                <h2>TENTANG KAMI</h2>
                <h4>VISI, MISI, FALSAFAH DAN MOTTO RUMAH SAKIT MEDIKA DJAYA</h4>
            </div>
        </div>
        <div class="row text-justify pl-5 pr-5">
                
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4 mt-3">
                        <img src="<?= base_url(); ?>assets/img/about/sejarah.JPG" class="rounded-start" height="650px">
                    </div>
                    
                    <div class="col-md-8">
                        <div class="card-body">
                            <img src="<?= base_url(); ?>assets/img/about/sejarah2.JPG" class="rounded-start" height="160px">
                            
                            <p class="card-text"><?= $profil[0]['profile'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>