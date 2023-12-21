<script src="<?= base_url('assets/ckeditor/ckeditor.js') ?>"></script>

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
                        <h4 class="card-title">Edit Data Ruangan</h4>

                        <div class="form-group form-info">
                            <label class="label-control">Nama Ruangan</label>
                            <input class="form-control" name="nama_ruangan" id="nama_ruangan" type="text" value="<?= $ruangan['nama_ruangan']; ?>" />
                        </div>
                        <?= form_error('nama_ruangan', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group form-info">
                            <label class="label-control">Foto</label>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img class="img-fluid" src="<?= base_url('./uploads/ruangan') ?>/<?= $ruangan['foto']; ?>" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-danger btn-file">
                                        <i class="material-icons">cloud_upload</i>
                                        <span class="fileinput-new">Select File</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="foto" id="foto" value="<?= $ruangan['foto']; ?>" />
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="material-icons">info</i></i> Remove</a>
                                </div>
                            </div>
                        </div>
                        <?= form_error('foto', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group form-info">
                            <label class="label-control">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi"><?= $ruangan['deskripsi']; ?></textarea>

                        </div>
                        <?= form_error('deskripsi', '<div class="text-danger">', '</div>'); ?>

                        <div class="input-group input-group-static mb-4">
                            <label for="kategori_ruangan_id" class="ms-0">Pilih Kategori Ruangan</label>
                            <select class="form-control" id="kategori_ruangan_id" name="kategori_ruangan_id">
                                <option selected>- Pilih -</option>
                                <?php foreach($kategoris as $kategori){ ?>
                                <option value="<?= $kategori->id ?>"><?= $kategori->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <?= form_error('kategori_ruangan_id', '<div class="text-danger">', '</div>'); ?>

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
    
<script>
    CKEDITOR.replace('deskripsi',
    {
        uiColor: '#00acc1'
    });
</script>