<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open_multipart(); ?>
                    <!-- <form id="RegisterValidation" action="" method=""> -->
                    <div class="card-header card-header-icon" data-background-color="blue">
                        <i class="fa-solid fa-users fa-lg"></i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Edit Rekan Kerjasama</h4>

                        <div class="form-group form-info">
                            <label class="label-control">Nama Rekan Kerjasama</label>
                            <input class="form-control" name="nama" id="nama" type="text" value="<?= $kerjasama['nama']; ?>" />
                        </div>
                        <?= form_error('nama', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group form-info">
                            <label class="label-control">Foto</label>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="<?= base_url('./uploads/rekan_kerjasama') ?>/<?= $kerjasama['foto']; ?>" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-danger btn-file">
                                        <i class="material-icons">cloud_upload</i>
                                        <span class="fileinput-new">Select File</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="foto" id="foto" value="<?= $kerjasama['foto']; ?>" />
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="material-icons">info</i></i> Remove</a>
                                </div>
                            </div>
                        </div>
                        <?= form_error('foto', '<div class="text-danger">', '</div>'); ?>


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