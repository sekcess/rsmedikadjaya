<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open_multipart(); ?>
                    <!-- <form id="RegisterValidation" action="" method=""> -->
                    <div class="card-header card-header-icon" data-background-color="blue">
                        <i class="fa-solid fa-bars-progress lg"></i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Tambah janji Masuk</h4>

                        <div class="form-group form-info">
                            <label class="label-control">Nama Janji</label>
                            <input class="form-control" name="nama_janji" id="nama_janji" type="text" value="<?= set_value('nama_janji'); ?>" />
                        </div>
                        <?= form_error('nama_janji', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group form-info">
                            <label class="label-control">Tanggal Janji</label>
                            <input type="text" class="form-control datepicker" name="tanggal_janji" id="tanggal_janji" value="10/10/2016" />
                        </div>
                        <?= form_error('tanggal_janji', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group form-info">
                            <label class="label-control">Keterangan Janji</label>
                            <input class="form-control" name="keterangan_janji" id="keterangan_janji" type="text" <?= set_value('keterangan_janji'); ?> />
                        </div>
                        <?= form_error('keterangan_janji', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group form-info">
                            <label for="file">File Berkas/Lampiran <sup class="text-danger">*PDF Recommended!</sup></label>
                            <br>
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
                                        <input type="file" name="file_janji" id="file_janji" />
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="material-icons">info</i></i> Remove</a>
                                </div>
                            </div>
                        </div>
                        <?= form_error('file_janji', '<div class="text-danger">', '</div>'); ?>

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