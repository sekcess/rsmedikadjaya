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
                        <h4 class="card-title">Edit Kategori Dokter</h4>

                        <div class="form-group form-info">

                        <div class="form-group form-info">
                            <label class="label-control">Kategori Dokter</label>
                            <input class="form-control" name="nama" id="nama" type="text" value="<?= $kategori['nama']; ?>" />
                        </div>
                        <?= form_error('nama', '<div class="text-danger">', '</div>'); ?>

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