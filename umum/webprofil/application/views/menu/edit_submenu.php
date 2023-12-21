<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $judul ?></h1>

    </div>

    <div class="flash-data-menu" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
        <!-- <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible" role="alert">
                    Menu <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                </div>
            </div>
        </div> -->
    <?php endif; ?>

    <?php $i = 1; ?>
    <?php foreach ($SubMenu as $sm) : ?>

        <?php $i++; ?>
    <?php endforeach; ?>

    <div class="row">
        <div class="col-lg-6">
            <form action="<?= base_url('menu/ubahsubmenu'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Sub Menu" value="<?= $sm['judul'] ?>">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Pilih Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Url Sub Menu" value="<?= $sm['url']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon Sub Menu" value="<?= $sm['icon'] ?>">
                        <p style="color: red;">*icon menggunakan <a href="https://fontawesome.com/">fontawesome.com</a>
                        </p>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Apakah Aktif?
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <center>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </center>
                </div>
            </form>
        </div>
    </div>