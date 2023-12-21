<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header">
                    <h1 class="h3 mb-0 text-gray-800"><?= $judul ?></h1>
                    </div>

                        <!-- <form class="card-body" action="" method="POST" role="form"> -->
                        <form  class="card-body" method="POST" action="<?php echo site_url('user/inputd') ?>" role="form">


                                <label for="nik">NIK</label>
                                <input class="form-control" type="text" name="nik" id="nik" />
                                <small class="form-text text-danger"></small>
                                <br>

                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" />
                                <small class="form-text text-danger"></small>
                                <br>

                                <label for="tempat_tgl">Tempat/Tanggal Lahir</label>
                                <input class="form-control" type="text" name="tempat_tgl" id="tempat_tgl" />
                                <small class="form-text text-danger"></small>
                                <br>

                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select type= "text" class="form-control" aria-label="Default select example" id="jenis_kelamin" name="jenis_kelamin" required>
                                    <option selected>- Pilih -</option>
                                    
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>

                                    
                                </select>
                                <!-- <input class="form-control" type="text" name="jenis_kelamin" id="jenis_kelamin" />
                                <small class="form-text text-danger"></small> -->
                                <br>

                                <label for="alamat">Alamat</label>
                                <input class="form-control" type="text" name="alamat" id="alamat" />
                                <small class="form-text text-danger"></small>
                                <br>

                                <label for="rt_rw">RT/RW</label>
                                <input class="form-control" type="text" name="rt_rw" id="rt_rw" />
                                <small class="form-text text-danger"></small>
                                <br>

                                <label for="kel_desa">Kel/Desa</label>
                                <input class="form-control" type="text" name="kel_desa" id="kel_desa" />
                                <small class="form-text text-danger"></small>
                                <br>

                                <label for="kecamatan">Kecamatan</label>
                                <input class="form-control" type="text" name="kecamatan" id="kecamatan" />
                                <small class="form-text text-danger"></small>
                                <br>
<!-- 
                                <label for="agama">Agama</label>
                                <input class="form-control" type="text" name="agama" id="agama" />
                                <small class="form-text text-danger"></small>
                                <br> -->
                                <label for="agama">Agama</label>
                                <select type= "text" class="form-control" aria-label="Default select example" id="agama" name="agama" required>
                                    <option selected>- Pilih -</option>
                                    
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Konghuchu">Konghuchu</option>
 
                                </select>
                                <br>

                                <!-- <label for="status">Status Perkawinan</label>
                                <input class="form-control" type="text" name="status" id="status" />
                                <small class="form-text text-danger"></small>
                                <br> -->
                                <label for="status">Status Perkawinan</label>
                                <select type= "text" class="form-control" aria-label="Default select example" id="status" name="status" required>
                                    <option selected>- Pilih -</option>
                                    
                                    <option value="Belum Kawin">Belum Kawin</option>
                                    <option value="Kawin">Kawin</option>
                                    <option value="Cerai Hidup">Cerai Hidup</option>
                                    <option value="Cerai Mati">Cerai Mati</option>
 
                                </select>
                                <br>

                                <label for="pekerjaan">Pekerjaan</label>
                                <input class="form-control" type="text" name="pekerjaan" id="pekerjaan" />
                                <small class="form-text text-danger"></small>
                                <br>

                                <label for="kewarganegaraan">Kewarganegaraan</label>
                                <input class="form-control" type="text" name="kewarganegaraan" id="kewarganegaraan" />
                                <small class="form-text text-danger"></small>
                                <br>
                                <button type="submit" name="submit" class="btn btn-success btn-md"><i class="fa fa-edit "></i> Submit</button>
                        </form>
                    

                    <center class="mt-3">
                        <button type="reset" name="reset" class="btn btn-danger btn-md"><i class="fa fa-undo "></i> Reset</button>
                    </center>
                    <br>
                    </form>
                </div>
            </div>
        </div>
    </div>