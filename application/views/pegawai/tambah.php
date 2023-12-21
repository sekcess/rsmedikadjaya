<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open_multipart(); ?>
                    <!-- <form id="RegisterValidation" action="" method=""> -->
                    <div class="card-header card-header-icon" data-background-color="blue">
                        <i class="fa-solid fa-user-doctor fa-lg"></i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Tambah Pegawai</h4>

                        <?php if ($this->session->flashdata('danger') == TRUE) : ?>
                            <div class="alert alert-danger">
                                <span><?= $this->session->flashdata('danger'); ?></span>
                            </div>
                        <?php endif; ?>

                        <div class="form-group form-info">
                            <label class="label-control">Nama Dokter</label>
                            <input class="form-control" name="nama_dokter" id="nama_dokter" type="text" value="<?= set_value('nama_dokter'); ?>" />
                        </div>
                        <?= form_error('nama_dokter', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group form-info">
                            <label class="label-control">NIK</label>
                            <input class="form-control" name="nik" id="nik" type="text" value="<?= set_value('nik'); ?>" />
                        </div>
                        <?= form_error('nik', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group form-info">
                            <label class="label-control">Tempat Lahir</label>
                            <input class="form-control" name="tempat_lahir" id="tempat_lahir" type="text" value="<?= set_value('tempat_lahir'); ?>" />
                        </div>
                        <?= form_error('tempat_lahir', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group form-info">
                            <label class="label-control">Tanggal Lahir</label>
                            <input type="text" class="form-control datepicker" name="tanggal_lahir" id="tanggal_lahir" value="0/0/2000" />
                        </div>
                        <?= form_error('tanggal_lahir', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group form-info">
                            <label class="label-control">Alamat</label>
                            <input class="form-control" name="alamat" id="alamat" type="text" value="<?= set_value('alamat'); ?>" />
                        </div>
                        <?= form_error('alamat', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group form-info">
                            <label class="label-control">Foto</label>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <!-- <img src="<?= base_url() ?>assets/save.png" alt="..."> -->
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-danger btn-file">
                                        <i class="material-icons">cloud_upload</i>
                                        <span class="fileinput-new">Select File</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="foto" id="foto" />
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="material-icons">info</i></i> Remove</a>
                                </div>
                            </div>
                        </div>
                        <?= form_error('foto', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group form-info">
                            <label class="label-control">No. Hp</label>
                            <input class="form-control" name="no_hp" id="no_hp" type="text" value="<?= set_value('no_hp'); ?>" />
                        </div>
                        <?= form_error('no_hp', '<div class="text-danger">', '</div>'); ?>
                        
                        <div class="input-group input-group-static mb-4">
                            <label for="kategori_id" class="ms-0">Pilih Kategori Dokter</label>
                            <select class="form-control" id="kategori_id" name="kategori_id">
                                <option selected>- Pilih -</option>
                                <?php foreach($kategoris as $kategori){ ?>
                                <option value="<?= $kategori->id ?>"><?= $kategori->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <?= form_error('kategori_id', '<div class="text-danger">', '</div>'); ?>
                        
                        <div class="input-group input-group-static mb-4">
                            <label for="kategori_spesialis_id" class="ms-0">Pilih Kategori Spesialis</label>
                            <select class="form-control" id="kategori_spesialis_id" name="kategori_spesialis_id">
                                <option selected>- Pilih -</option>
                                <?php foreach($kategoris2 as $kategori){ ?>
                                <option value="<?= $kategori->id_spesialis ?>"><?= $kategori->nama_spesialis ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <?= form_error('kategori_spesialis_id', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group form-info">
                            <label class="label-control">Jabatan</label>
                            <input class="form-control" name="jabatan" id="jabatan" type="text" value="<?= set_value('jabatan'); ?>" />
                        </div>
                        <?= form_error('jabatan', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group form-info">
                            <label class="label-control">Jadwal</label>
                            <input class="form-control" name="jadwal" id="jadwal" type="text" value="<?= set_value('jadwal'); ?>" />
                        </div>
                        <?= form_error('jadwal', '<div class="text-danger">', '</div>'); ?>
                        
                        <div class="form-group form-info">
                            <label class="label-control">Jadwal 2</label>
                            <input class="form-control" name="jadwal2" id="jadwal2" type="text" value="<?= set_value('jadwal2'); ?>" />
                        </div>
                        <?= form_error('jadwal2', '<div class="text-danger">', '</div>'); ?>
                        
                        <div class="form-group form-info">
                            <label class="label-control">Senin</label>
                            <input class="form-control" name="senin" id="senin" type="text" value="<?= set_value('senin'); ?>" />
                        </div>
                        <?= form_error('senin', '<div class="text-danger">', '</div>'); ?>
                        
                        <div class="form-group form-info">
                            <label class="label-control">Senin 2</label>
                            <input class="form-control" name="senin2" id="senin2" type="text" value="<?= set_value('senin2'); ?>" />
                        </div>
                        <?= form_error('senin2', '<div class="text-danger">', '</div>'); ?>
                        
                        <div class="form-group form-info">
                            <label class="label-control">Selasa</label>
                            <input class="form-control" name="selasa" id="selasa" type="text" value="<?= set_value('selasa'); ?>" />
                        </div>
                        <?= form_error('selasa', '<div class="text-danger">', '</div>'); ?>
                        
                        <div class="form-group form-info">
                            <label class="label-control">Selasa 2</label>
                            <input class="form-control" name="selasa2" id="selasa2" type="text" value="<?= set_value('selasa2'); ?>" />
                        </div>
                        <?= form_error('selasa2', '<div class="text-danger">', '</div>'); ?>
                        
                        <div class="form-group form-info">
                            <label class="label-control">Rabu</label>
                            <input class="form-control" name="rabu" id="rabu" type="text" value="<?= set_value('rabu'); ?>" />
                        </div>
                        <?= form_error('rabu', '<div class="text-danger">', '</div>'); ?>
                        
                        <div class="form-group form-info">
                            <label class="label-control">Rabu 2</label>
                            <input class="form-control" name="rabu2" id="rabu2" type="text" value="<?= set_value('rabu2'); ?>" />
                        </div>
                        <?= form_error('rabu2', '<div class="text-danger">', '</div>'); ?>
                        
                        <div class="form-group form-info">
                            <label class="label-control">Kamis</label>
                            <input class="form-control" name="kamis" id="kamis" type="text" value="<?= set_value('kamis'); ?>" />
                        </div>
                        <?= form_error('kamis', '<div class="text-danger">', '</div>'); ?>
                        
                        <div class="form-group form-info">
                            <label class="label-control">Kamis 2</label>
                            <input class="form-control" name="kamis2" id="kamis2" type="text" value="<?= set_value('kamis2'); ?>" />
                        </div>
                        <?= form_error('kamis2', '<div class="text-danger">', '</div>'); ?>
                        
                        <div class="form-group form-info">
                            <label class="label-control">Jumat</label>
                            <input class="form-control" name="jumat" id="jumat" type="text" value="<?= set_value('jumat'); ?>" />
                        </div>
                        <?= form_error('jumat', '<div class="text-danger">', '</div>'); ?>
                        
                        <div class="form-group form-info">
                            <label class="label-control">Jumat 2</label>
                            <input class="form-control" name="jumat2" id="jumat2" type="text" value="<?= set_value('jumat2'); ?>" />
                        </div>
                        <?= form_error('jumat2', '<div class="text-danger">', '</div>'); ?>
                        
                        <div class="form-group form-info">
                            <label class="label-control">Sabtu</label>
                            <input class="form-control" name="sabtu" id="sabtu" type="text" value="<?= set_value('sabtu'); ?>" />
                        </div>
                        <?= form_error('sabtu', '<div class="text-danger">', '</div>'); ?>
                        
                        <div class="form-group form-info">
                            <label class="label-control">Sabtu 2</label>
                            <input class="form-control" name="sabtu2" id="sabtu2" type="text" value="<?= set_value('sabtu2'); ?>" />
                        </div>
                        <?= form_error('sabtu2', '<div class="text-danger">', '</div>'); ?>
                        
                        <div class="form-group form-info">
                            <label class="label-control">Minggu</label>
                            <input class="form-control" name="minggu" id="minggu" type="text" value="<?= set_value('minggu'); ?>" />
                        </div>
                        <?= form_error('minggu', '<div class="text-danger">', '</div>'); ?>
                        
                        <div class="form-group form-info">
                            <label class="label-control">Minggu 2</label>
                            <input class="form-control" name="minggu2" id="minggu2" type="text" value="<?= set_value('minggu2'); ?>" />
                        </div>
                        <?= form_error('minggu2', '<div class="text-danger">', '</div>'); ?>


                        <div class="category form-category">
                            <div class="form-footer text-right">

                                <button type="submit" class="btn btn-success btn-fill">simpan</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>