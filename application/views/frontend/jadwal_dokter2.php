<style>
    body{
    margin-top:20px;
}
.bg-light-gray {
    background-color: #f7f7f7;
}
.table-bordered thead td, .table-bordered thead th {
    border-bottom-width: 2px;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
}


.bg-sky.box-shadow {
    box-shadow: 0px 5px 0px 0px #00a2a7
}

.bg-orange.box-shadow {
    box-shadow: 0px 5px 0px 0px #af4305
}

.bg-green.box-shadow {
    box-shadow: 0px 5px 0px 0px #4ca520
}

.bg-yellow.box-shadow {
    box-shadow: 0px 5px 0px 0px #dcbf02
}

.bg-pink.box-shadow {
    box-shadow: 0px 5px 0px 0px #e82d8b
}

.bg-purple.box-shadow {
    box-shadow: 0px 5px 0px 0px #8343e8
}

.bg-lightred.box-shadow {
    box-shadow: 0px 5px 0px 0px #d84213
}


.bg-sky {
    background-color: #02c2c7
}

.bg-orange {
    background-color: #e95601
}

.bg-green {
    background-color: #5bbd2a
}

.bg-yellow {
    background-color: #f0d001
}

.bg-pink {
    background-color: #ff48a4
}

.bg-purple {
    background-color: #9d60ff
}

.bg-lightred {
    background-color: #ff5722
}

.padding-15px-lr {
    padding-left: 13px;
    padding-right: 13px;
}
.padding-5px-tb {
    padding-top: 6px;
    padding-bottom: 6px;
}
.margin-10px-bottom {
    margin-bottom: 10px;
}
.border-radius-5 {
    border-radius: 5px;
}

.margin-10px-top {
    margin-top: 10px;
}
.font-size14 {
    font-size: 14px;
}

.font-size15 {
    font-size: 15px;
}

.text-light-gray {
    color: #d6d5d5;
}
.font-size13 {
    font-size: 13px;
}

.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
}
.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
</style>

<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><b>Jadwal <?= $sub_title ?></b></h2>
          <ol>
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li><a href="<?= base_url('dokter/jadwal_dokter') ?>">Jadwal Dokter</a></li>
            <li><?= $sub_title ?></li>
          </ol>
        </div>

      </div>
    </section>
<!-- End Breadcrumbs Section -->

<!-- ======= Departments Section ======= -->
<section id="departments" class="departments page-section">
    <div class="container">
        
            
        <div class="text-center section-title">
            <h2 class="section-heading text-uppercase">Jadwal <?= $sub_title ?></h2>
            <p class="section-subheading text-muted">Dibawah ini adalah jadwal <b><?= $sub_title ?></b> yang ada di RS Medika Djaya:</p>
        </div>
        
        <div class="text-center col-md-12">
            
            <div class="container">
                <div class="timetable-img text-center">
                    <img src="img/content/timetable.png" alt="">
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr class="bg-light-gray">
                                
                                <th class="text-uppercase"><div class="font-size13">Foto</div></th>
                                <th class="text-uppercase"><div class="font-size13">Nama Dokter</div></th>
                                <th class="text-uppercase"><div class="font-size13">Senin</div></th>
                                <th class="text-uppercase"><div class="font-size13">Selasa</div></th>
                                <th class="text-uppercase"><div class="font-size13">Rabu</div></th>
                                <th class="text-uppercase"><div class="font-size13">Kamis</div></th>
                                <th class="text-uppercase"><div class="font-size13">Jumat</div></th>
                                <th class="text-uppercase"><div class="font-size13">Sabtu</div></th>
                                <th class="text-uppercase"><div class="font-size13">Minggu</div></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($kategoris as $kategori) : ?>
                            <tr>
                                <td>
                                    <img src="<?= base_url("uploads/foto") ?>/<?= $kategori->foto ?>" width="110">
                                </td>
                                
                                <td>
                                    <div class="margin-10px-top font-size14 xs-font-size13"><?= $kategori->nama_dokter ?></div>
                                </td>

                                <td>
                                    <?php if ($kategori->senin == !0) : ?>
                                    <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5  margin-10px-bottom text-white font-size13  xs-font-size13">
                                        <?= $kategori->senin ?>
                                    </span>
                                    <?php endif; ?>
                                    <br>
                                    <br>
                                    <?php if ($kategori->senin2 == !0) : ?>
                                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-top text-white font-size13  xs-font-size13">
                                        <?= $kategori->senin2 ?>
                                    </span>
                                    <?php endif; ?>
                                </td>
                                
                                <td>
                                    <?php if ($kategori->selasa == !0) : ?>
                                    <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13  xs-font-size13">
                                        <?= $kategori->selasa ?>
                                    </span>
                                    <?php endif; ?>
                                    <br>
                                    <br>
                                    <?php if ($kategori->selasa2 == !0) : ?>
                                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-top text-white font-size13  xs-font-size13">
                                        <?= $kategori->selasa2 ?>
                                    </span>
                                    <?php endif; ?>
                                </td>
                                
                                <td>
                                    <?php if ($kategori->rabu == !0) : ?>
                                    <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13  xs-font-size13">
                                        <?= $kategori->rabu ?>
                                    </span>
                                    <?php endif; ?>
                                    <br>
                                    <br>
                                    <?php if ($kategori->rabu2 == !0) : ?>
                                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-top text-white font-size13  xs-font-size13">
                                        <?= $kategori->rabu2 ?>
                                    </span>
                                    <?php endif; ?>
                                </td>
                                
                                <td>
                                    <?php if ($kategori->kamis == !0) : ?>
                                    <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13  xs-font-size13">
                                        <?= $kategori->kamis ?>
                                    </span>
                                    <?php endif; ?>
                                    <br>
                                    <br>
                                    <?php if ($kategori->kamis2 == !0) : ?>
                                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-top text-white font-size13  xs-font-size13">
                                        <?= $kategori->kamis2 ?>
                                    </span>
                                    <?php endif; ?>
                                </td>
                                    
                                <td>
                                    <?php if ($kategori->jumat == !0) : ?>
                                    <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13  xs-font-size13">
                                        <?= $kategori->jumat ?>
                                    </span>
                                    <?php endif; ?>
                                    <br>
                                    <br>
                                    <?php if ($kategori->jumat2 == !0) : ?>
                                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-top text-white font-size13  xs-font-size13">
                                        <?= $kategori->jumat2 ?>
                                    </span>
                                    <?php endif; ?>
                                </td>
                                
                                <td>
                                    <?php if ($kategori->sabtu == !0) : ?>
                                    <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13  xs-font-size13">
                                        <?= $kategori->sabtu ?>
                                    </span>
                                    <?php endif; ?>
                                    <br>
                                    <br>
                                    <?php if ($kategori->sabtu2 == !0) : ?>
                                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-top text-white font-size13  xs-font-size13">
                                        <?= $kategori->sabtu2 ?>
                                    </span>
                                    <?php endif; ?>
                                </td>
                                
                                <td>
                                    <?php if ($kategori->minggu == !0) : ?>
                                    <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size13  xs-font-size13">
                                        <?= $kategori->minggu ?>
                                    </span>
                                    <?php endif; ?>
                                    <br>
                                    <br>
                                    <?php if ($kategori->minggu2 == !0) : ?>
                                    <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-top text-white font-size13  xs-font-size13">
                                        <?= $kategori->minggu2 ?>
                                    </span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    
    </div>
</section><!-- End Departments Section -->
<hr>