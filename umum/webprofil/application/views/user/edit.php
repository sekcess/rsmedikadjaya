<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $judul ?></h1>
    </div>

    <div class="row">
        <!-- <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div> -->
        <div class="flash-data-editprofil" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    </div>

    <dic class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('user/editprofil'); ?>

            <div class="form-group row">
                <div class="col-auto">
                    <label for="email" id="email" name="email" class="col-form-label">Email</label>
                </div>
                <div class="col-lg-10">
                    <input type="text" id="email" name="email" class="form-control" value="<?= $user['email']; ?>" readonly>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-auto">
                    <label for="name" id="name" name="name" class="col-form-label">Nama Lengkap</label>
                </div>
                <div class="col-lg-9">
                    <input type="text" id="name" name="name" class="form-control" value="<?= $user['name']; ?>">
                    <?= form_error('name', '<medium class="text-danger">', '</medium>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2">Gambar</div>
                <div class="col-sm-10">
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Pilih Gambar</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Ubah Profil</button>
                </div>
            </div>

            </form>

        </div>
</div>

</div>