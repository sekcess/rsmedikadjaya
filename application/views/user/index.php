<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="blue">
                        <i class="fa-solid fa-hospital-user fa-lg"></i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">User</h4>
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                            <a href="<?= base_url() ?>user/tambah">
                                <button class="btn btn-info">
                                    <span class="btn-label">
                                        <i class="material-icons">check</i>
                                    </span>
                                    Tambah
                                </button>
                            </a>

                            <?php if ($this->session->flashdata('success') == TRUE) : ?>
                                <div class="alert alert-success">
                                    <span><?= $this->session->flashdata('success'); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="material-datatables">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Hak Akses</th>
                                        <th class="disabled-sorting text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Hak Akses</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>

                                    <?php $no = 1; ?>
                                    <?php foreach ($data as $key) : ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td>
                                                <button class="btn btn-simple btn-info" data-toggle="modal" data-target="#lihatFoto<?= $key['id_user']; ?>"><i class="material-icons">remove_red_eye</i></button>
                                            </td>
                                            <td><?= $key['username']; ?></td>
                                            <td><?= $key['password']; ?></td>
                                            <td><?= $key['level']; ?></td>
                                            <td class="text-right">
                                                <!-- <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">favorite</i></a> -->
                                                <a href="<?= base_url() ?>user/edit/<?= $key['id_user']; ?>" class="btn btn-simple btn-primary btn-icon"><i class="material-icons">edit</i></a>

                                                <!-- <button class="btn btn-simple btn-warning btn-icon" data-toggle="modal" data-target="#smallAlertModal"><i class="material-icons">edit</i></button> -->


                                                <button class="btn btn-simple btn-danger btn-icon" data-toggle="modal" data-target="#hapusUser<?= $key['id_user']; ?>"><i class="material-icons">close</i></button>

                                                <!-- <a href="<?= base_url() ?>user/hapus/<?= $key['id_user']; ?>" class="btn btn-simple btn-danger btn-icon"><i class="material-icons">close</i></a> -->
                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- small modal hapus user -->

                        <?php foreach ($data as $key) : ?>
                            <div class="modal fade" id="hapusUser<?= $key['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-small ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                        </div>

                                        <form method="post" action="<?= base_url(); ?>user/hapus/<?= $key['id_user']; ?>">
                                            <div class="modal-body text-center">
                                                <h5>Apakah anda yakin untuk menghapus user? </h5>
                                            </div>
                                            <div class="modal-footer text-center">
                                                <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Tidak</button>
                                                <button type="submit" class="btn btn-success btn-simple">Ya</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!--    end small modal hapus user -->

                        <!-- notice modal -->

                        <?php foreach ($data as $key) : ?>
                            <div class="modal fade" id="lihatFoto<?= $key['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-notice">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                            <h5 class="modal-title text-center" id="myModalLabel">Foto User</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="instruction">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <img width="100%" height="450px;" src="<?= base_url("uploads/admin") ?>/<?= $key["foto"] ?>">
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer text-center">
                                            <button type="button" class="btn btn-danger btn-round" data-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- end notice modal -->

                    </div>
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
    </div>
</div>