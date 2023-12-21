<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open_multipart(); ?>
                    <!-- <form id="RegisterValidation" action="" method=""> -->
                    <div class="card-header card-header-icon" data-background-color="blue">
                        <i class="fa-solid fa-id-card-clip fa-lg"></i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Tambah Kategori Spesialis</h4>

                        <?php if ($this->session->flashdata('danger') == TRUE) : ?>
                            <div class="alert alert-danger">
                                <span><?= $this->session->flashdata('danger'); ?></span>
                            </div>
                        <?php endif; ?>

                        <div class="form-group form-info">
                            <label class="label-control">Kategori Spesialis</label>
                            <input class="form-control" name="nama_spesialis" id="nama_spesialis" type="text" value="<?= set_value('nama_spesialis'); ?>" />
                        </div>
                        <?= form_error('nama_spesialis', '<div class="text-danger">', '</div>'); ?>
                        
                        <div class="form-group form-info">
                            <label class="label-control">Logo</label>
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
                                        <input type="file" name="logo" id="logo" />
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="material-icons">info</i></i> Remove</a>
                                </div>
                            </div>
                        </div>
                        <?= form_error('logo', '<div class="text-danger">', '</div>'); ?>
                        

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