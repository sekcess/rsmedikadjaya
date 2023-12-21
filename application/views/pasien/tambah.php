<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open_multipart(); ?>
                    <!-- <form id="RegisterValidation" action="" method=""> -->
                    <div class="card-header card-header-icon" data-background-color="blue">
                        <i class="fa-solid fa-person-breastfeeding fa-lg"></i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Tambah Pasien</h4>

                        <div class="form-group form-info">
                            <label class="label-control">Tanggal Temu</label>
                            <input class="form-control" name="nik" id="nik" type="text" value="<?= set_value('nik'); ?>" />
                        </div>
                        <?= form_error('nik', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group form-info">
                            <label class="label-control">Nama</label>
                            <input class="form-control" name="nama" id="nama" type="text" value="<?= set_value('nama'); ?>" />
                        </div>
                        <?= form_error('nama', '<div class="text-danger">', '</div>'); ?>


                        <div class="form-group form-info">
                            <label class="label-control">Tempat Lahir</label>
                            <input class="form-control" name="tmpt_lhr" id="tmpt_lhr" type="text" value="<?= set_value('tmpt_lhr'); ?>" />
                        </div>
                        <?= form_error('tmpt_lhr', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group form-info">
                            <label class="label-control">Tanggal Lahir</label>
                            <input type="text" class="form-control datepicker" name="tgl_lhr" id="tgl_lhr" value="10/10/2016" />
                        </div>
                        <?= form_error('tgl_lhr', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group form-info">
                            <label class="label-control">Alamat</label>
                            <input class="form-control" name="alamat" id="alamat" type="text" value="<?= set_value('alamat'); ?>" />
                        </div>
                        <?= form_error('alamat', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group form-info">
                            <label class="label-control">No. Hp</label>
                            <input class="form-control" name="no_hp" id="no_hp" type="text" value="<?= set_value('no_hp'); ?>" />
                        </div>
                        <?= form_error('no_hp', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group form-info">
                            <label class="label-control">Pekerjaan</label>
                            <input class="form-control" name="pekerjaan" id="pekerjaan" type="text" value="<?= set_value('pekerjaan'); ?>" />
                        </div>
                        <?= form_error('pekerjaan', '<div class="text-danger">', '</div>'); ?>


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