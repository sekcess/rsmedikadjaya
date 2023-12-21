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

    <div class="row">
        <div class="col-lg-6">
            <?php echo form_open("menu/ubahMenu/{$menu['id']}"); ?>
            <input type="hidden" name="id" value="<?= $menu['id']; ?>">
            <div class="form-group">
                <label for="menu">Menu</label>
                <input type="text" class="form-control" id="menu" name="menu" value="<?= $menu['menu']; ?>">
                <?= form_error('menu', '<small class="text-danger">', '</small>'); ?>
            </div>

            <div class="form-group">
                <a href="<?= base_url('menu') ?>" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-fw fa-arrow-circle-left"></i>
                    </span>
                    <span class="text">Keluar</span>
                </a>
                <button type="submit" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-fw fa-save"></i>
                    </span>
                    <span class="text">Simpan</span>
                </button>

            </div>
            </form>
        </div>
    </div>