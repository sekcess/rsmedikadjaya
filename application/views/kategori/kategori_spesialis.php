<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="blue">
                        <i class="fa-solid fa-id-card-clip fa-lg"></i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Kategori Spesialis</h4>
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                            <a href="<?= base_url() ?>kategori/tambah_kategori_spesialis">
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
                                        <th>Logo</th>
                                        <th>Kategori Spesialis</th>
                                        <th class="disabled-sorting text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Logo</th>
                                        <th>Kategori Spesialis</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>

                                    <?php $no = 1; ?>
                                    <?php foreach ($data as $key) : ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            
                                            <td>
                                                <button class="btn btn-simple btn-info" data-toggle="modal" data-target="#lihatLogo<?= $key['id_spesialis']; ?>"><i class="material-icons">remove_red_eye</i></button>
                                            </td>
                                            <td><?= $key['nama_spesialis']; ?></td>

                                            <td class="text-right">

                                                <a href="<?= base_url() ?>kategori/edit_kategori_spesialis/<?= $key['id_spesialis']; ?>" class="btn btn-simple btn-primary btn-icon"><i class="material-icons">edit</i></a>

                                                <button class="btn btn-simple btn-danger btn-icon" data-toggle="modal" data-target="#hapusSpesialis<?= $key['id_spesialis']; ?>"><i class="material-icons">close</i></button>

                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- small modal hapus kategori -->
                        <?php foreach ($data as $key) : ?>
                            <div class="modal fade" id="hapusSpesialis<?= $key['id_spesialis']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-small ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                        </div>

                                        <form method="post" action="<?= base_url(); ?>kategori/hapus_kategori_spesialis/<?= $key['id_spesialis']; ?>">
                                            <div class="modal-body text-center">
                                                <h5>Apakah anda yakin untuk menghapus data Kategori Spesialis? </h5>
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
                        <!--    end small modal hapus pegawai -->
                        
                        <?php foreach ($data as $key) : ?>
                            <div class="modal fade" id="lihatLogo<?= $key['id_spesialis']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-notice">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                            <h5 class="modal-title text-center" id="myModalLabel">Logo Spesialis</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="instruction">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <img width="100%" height="450px;" src="<?= base_url("uploads/spesialis") ?>/<?= $key["logo"] ?>">
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