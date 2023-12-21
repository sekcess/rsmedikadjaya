<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('front/_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('front/_partials/navbar.php'); ?>

    

	<div class="content">
    <div class="container">
        <div class="row align-items-stretch no-gutters contact-wrap">
          <div class="col-md-12">
            <div class="form h-100">
              <section class="page-section">
                  <div class="container">
                      <?php if ($this->session->flashdata('success') == TRUE) : ?>
                          <?= $this->session->flashdata('success'); ?>
                      <?php endif; ?>
                      <div class="text-center">
                          <h2 class="section-heading text-uppercase">Pengajuan Surat Online</h2>
                          <h3 class="section-subheading text-muted">Isi Form Pengajuan Surat Dibawah:</h3>
                      </div>
                      <div class="text-justify pl-5 pr-5">
                          <?= form_open_multipart('page/ajukan', 'id="ajukanSurat"') ?>
                          <div class="row">
                              <div class="col-lg-6">
                                  <label for="nik">NIK *</label>
                                  <?= form_input(['name' => 'nik', 'id' => 'nik', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan NIK anda']); ?>
                              </div>
                              <div class="col-lg-6">
                                  <label for="nama">Nama *</label>
                                  <?= form_input(['name' => 'nama', 'id' => 'nama', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan nama anda']); ?>
                              </div>
                              <div class="col-lg-6 mt-2">
                                  <label for="no_hp">No Hp *</label>
                                  <?= form_input(['type' => 'text', 'name' => 'no_hp', 'id' => 'no_hp', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan No Hp anda']); ?>
                              </div>
                              <div class="col-lg-6 mt-2">
                                  <label for="jenis">Pilih Jenis Surat *</label>
                                  
                                  <?= form_dropdown('jenis_surat', $options, '', ['id' => 'jenis', 'class' => 'form-control']); ?>
                              </div>
                              <div class="col-lg-12 mt-2">
                                  <label for="file">File Berkas/Lampiran <sup class="text-danger">*PDF Recommended! | Max 5MB</sup></label>
                                  <?= form_upload(['name' => 'file', 'id' => 'file', 'class' => 'form-control']) ?>
                              </div>
                          </div>
                          <hr>
                          <small>
                              <p class="text-danger">PENTING!! Syarat Harus Terpenuhi, Jika Tidak Pengajuan Tidak Diproses!</p>
                              <div id="syarat" class="text-danger">
                              </div>
                          </small>
                          <hr>
                          <button type="submit" class="btn btn-block btn-primary">Kirim Permohonan</button>
                          <div class="row mt-2">
                              <div class="col-lg-4">
                              </div>
                              <?= form_close() ?>
                              <div class="col-lg-4">
                                 
                              </div>
                              
                          </div>
                          <button class="replybutton btn btn-block btn-success" data-commentbox="s">Cek Surat</button><br/><br/>
                          
                          <div class="row mt-2">
                                <div  id="s" style="display:none">
                                  <!-- <textarea cols="35" rows="8"></textarea><br/> -->
                                  <div class="content">
                                    <?= form_open('page/cari', 'id="", class="card card-sm"') ?>
                                        <div class="card-body row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i class="fa fa-search"></i>
                                            </div>
                                            <!--end of col-->
                                            <div class="col">
                                                <input class="form-control form-control-lg form-control-borderless" type="search"
                                                    name="trackid" placeholder="Masukkan ID Pengajuan Anda">
                                            </div>
                                            <!--end of col-->
                                            <div class="col-auto">
                                                <button class="btn btn-lg btn-success" type="submit">Cari</button>
                                            </div>
                                            <!--end of col-->
                                        </div>
                                    <?= form_close()?>
                                  </div>
                                  
                                </div>
                              
                          </div>
                          
                      </div>
                      
                  </div>
              </section>

    

          </div>
        </div>
      </div>
    </div>
  </div>
	<!-- <div class="container">
		<h1>Contact Us</h1>
		<p>Hubungi kami melalui form berikut</p>
		<form action="" method="post" style="max-width: 600px;">
			<div>
				<label for="name">Name*</label>
				<input  type="text"  name="name"  class="<?= form_error('name') ? 'invalid' : '' ?>"  placeholder="your name"  value="<?= set_value('name') ?>"  required  maxlength="32"/>
				<div class="invalid-feedback"><?= form_error('name') ?></div>
			</div>
			<div>
				<label for="email">Email*</label>
				<input type="email" name="email" class="<?= form_error('email') ? 'invalid' : '' ?>" placeholder="your email address" value="<?= set_value('email') ?>" required/>
				<div class="invalid-feedback"><?= form_error('email') ?></div>
			</div>
			<div>
				<label for="message">Message*</label><br>
				<textarea name="message" cols="30" class="<?= form_error('message') ? 'invalid' : '' ?>" rows="5" placeholder="write your message" required><?= set_value('message') ?></textarea>
				<div class="invalid-feedback"><?= form_error('message') ?></div>
			</div>

			<div style="display: flex; gap: 1rem">
				<input type="submit" class="button button-primary" value="Kirim">
				<input type="reset" class="button" value="Reset">
			</div>
		</form>
	</div> -->

	<?php $this->load->view('front/_partials/footer.php'); ?>
  <script type="text/javascript">
            $(document).ready(function () {
                $('#nik').autocomplete({
                    source: "<?php echo site_url('Penduduk/get_autocomplete');?>",

                    select: function (event, ui) {
                    console.log(ui.item)
                            $('[name="nik"]').val(ui.item.label);
                            $('[name="nama"]').val(ui.item.nama);
                            $('[name="no_hp"]').val(ui.item.no_hp);
                    },
                    response: function(event, ui){
                        if(ui.content.length === 0){
                            console.log('No results loaded!');
                        }else{
                            console.log('success!');
                        }
                    },
                });

            });
        </script>
        <script>
    $(function() {

    $('.replybutton').on('click', function() {
    $('.replybox').hide();
    var commentboxId= $(this).attr('data-commentbox');
    $('#'+commentboxId).toggle();
    });

    $('.cancelbutton').on('click', function() {
    $('.replybox').hide();
    });

    });
  </script> 

        <script>
            $('#jenis').change(function(){
                var e = document.getElementById("jenis");
                var jenisSurat =  e.value;
                // console.log(jenisSurat)

                const spkk = ['KK Lama (Asli & FC)', 'KTP', 'Surat Pindah dari daerah asal', 'FC Buku Nikah', 'Surat Pengantar/Keterangan RT & RW']
                const spna = ['FC KK Calon Suami & Istri', 'FC KTP Calon Suami & Istri', 'Pas Foto 3x4 Calon Suami & Istri', 'Surat Pengantar/Keterangan RT & RW', 'FC Akta Cerai (Bagi Janda/Duda)']
                const skkl = ['KK (Asli & FC)', 'KTP', 'Surat Keterangan Kelahiran dari Bidan/RS (Jika ada/ Optional)', 'Surat Pengantar/Keterangan RT & RW']
                const skkm = ['KK (Asli & FC)', 'KTP', 'Surat Keterangan Kematian (Jika ada/Optional)', 'Surat Pengantar/Keterangan RT & RW']
                const skp = ['KK (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW', 'Data alamat daerah tujuan']
                const skd = ['KK (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW', 'Data alamat daerah asal']
                const skbm = ['KK (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW']
                const skph = ['KK (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pernyataan dari yang bersangkutan(Optional)', 'Surat Pengantar/Keterangan RT & RW']
                const skm = ['KK (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW']
                const sku = ['KK (Asli & FC)', 'KTP (Asli & FC)', 'Izin Usaha', 'Surat Pengantar/Keterangan RT & RW']
                const skt = ['KTP (Asli & FC)', 'Surat Dasar Kepemilikan']
                const skgg = ['KTP (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW']
                const situ = ['KTP (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW']
                const simb = ['KTP (Asli & FC)', 'FC Surat Tanah Lokasi Bangunan', 'Surat Pengantar/Keterangan RT & RW']

                const showList = (surat) => {
                    surat.forEach(item => {
                        $('#syarat').append(
                            `
                            <ul>
                                <li>${item}</li>
                            </ul>
                            `
                        )
                    });
                }

                if (jenisSurat == 'SPKK') {
                    $('#syarat').html('')
                    showList(spkk)
                }else if(jenisSurat == 'SPNA'){
                    $('#syarat').html('')
                    showList(spna)
                }else if(jenisSurat == 'SKKL'){
                    $('#syarat').html('')
                    showList(skkl)
                }else if(jenisSurat == 'SKKM'){
                    $('#syarat').html('')
                    showList(skkm)
                }else if(jenisSurat == 'SKP'){
                    $('#syarat').html('')
                    showList(skp)
                }else if(jenisSurat == 'SKD'){
                    $('#syarat').html('')
                    showList(skd)
                }else if(jenisSurat == 'SKBM'){
                    $('#syarat').html('')
                    showList(skbm)
                }else if(jenisSurat == 'SKPH'){
                    $('#syarat').html('')
                    showList(skph)
                }else if(jenisSurat == 'SKM'){
                    $('#syarat').html('')
                    showList(skm)
                }else if(jenisSurat == 'SKU'){
                    $('#syarat').html('')
                    showList(sku)
                }else if(jenisSurat == 'SKT'){
                    $('#syarat').html('')
                    showList(skt)
                }else if(jenisSurat == 'SKGG'){
                    $('#syarat').html('')
                    showList(skgg)
                }else if(jenisSurat == 'SITU'){
                    $('#syarat').html('')
                    showList(situ)
                }else if(jenisSurat == 'SIMB'){
                    $('#syarat').html('')
                    showList(simb)
                }else{
                    console.log('Nothing')
                }
            })
        </script>
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
  </script>
</body>

</html>