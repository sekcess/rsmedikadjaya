<section class="page-section section-bg mt-5 p-auto">
    <div class="container">
        <?php if ($this->session->flashdata('success') == TRUE) : ?>
            <?= $this->session->flashdata('success'); ?>
        <?php endif; ?>
        <div class="section-title mt-5">
            <h2 class="section-heading text-uppercase mt-5">Buat Janji Temu Anda</h2>
            <p class="section-subheading text-muted">Isi Form Janji Temu Anda Dibawah Ini:</p>
        </div>
        <div class="text-justify pl-5 pr-5">
            <?= form_open_multipart('janjitemu/ajukan', 'id="ajukanJanji"') ?>
            <div class="row">
                <div class="col-lg-6">
                    <label for="nama">Nama Lengkap *</label>
                    <?= form_input(['name' => 'nama', 'id' => 'nama', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan nama lengkap anda']); ?>
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="no_hp">No Hp *</label>
                    <?= form_input(['type' => 'text', 'name' => 'no_hp', 'id' => 'no_hp', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan No Hp anda']); ?>
                </div>
                <div class="col-lg-6">
                    <label for="nik">Tanggal Ingin Bertemu <sup class="text-danger">*Masukkan Angka Saja (Contoh: 01-01-2022)</sup></label>
                    <?= form_input(['name' => 'nik', 'id' => 'nik', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan tanggal ingin bertemu Dokter']); ?>
                </div>
                <div class="col-lg-6 mt-2">
                    <label for="jenis">Pilih Dokter Spesialis *</label>
                    <?= form_dropdown('jenis_dokter', $options, '', ['id' => 'jenis', 'class' => 'form-control', "required" => "required"]); ?>
                </div>
                <div class="col-lg-12 mt-2">
                    <label for="file">File Berkas/Lampiran <sup class="text-danger">*Direkomendasikan File PDF! | File Max 5MB</sup></label>
                    <?= form_upload(['name' => 'file', 'id' => 'file', 'class' => 'form-control', "required" => "required"]); ?>
                </div>
            </div>
            <hr>
            <small>
                <p class="text-danger">PENTING!! Syarat Harus Terpenuhi, Jika Tidak Pengajuan Tidak Diproses!</p>
                <div id="syarat" class="text-danger">
                </div>
            </small>
            <hr>
            <div class="row mt-2">
                <div class="col-lg-4">
                    <button type="submit" class="btn btn-block btn-primary">KIRIM PERMOHONAN</button>
                </div>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</section>
<hr>