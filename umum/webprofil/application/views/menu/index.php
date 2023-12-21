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
        <div class="col-lg-12">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Tambah Menu Baru</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Action <a style="color: red;">*Admin, User, dan Menu tidak boleh diubah!</a></th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $m['menu']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>menu/ubahMenu/<?= $m['id']; ?>" class="btn btn-success btn-sm">Ubah</a>
                                <a href="<?= base_url(); ?>menu/hapusDataMenu/<?= $m['id']; ?>" class="tombol-hapus"><button class="btn btn-danger btn-sm">Hapus</button></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Modal -->

<!-- Modal Tambah Menu -->
<div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Tambah Menu Baru</h5>
                <button type="button" class="fa fa-times" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="<?= base_url('menu'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama Menu">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>