<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('front/_partials/head.php'); ?>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>

<body>
	<?php $this->load->view('front/_partials/navbar.php'); ?>

	<!-- <h1>Halaman untuk baca artikel</h1> -->
	<section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
				
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <!-- <img src=<?= base_url("upload/thumbnail/$article->thumbnail") ?> alt=""> -->
                    </div>
                    <div class="down-content">
                      <!-- <span>Lifestyle</span> -->
                      <h4>Struktur Organisasi Pemerintah Desa Kuala Dua Kecamatan Sungai Raya Kabupaten Kubu Raya</h4>
                      <!-- <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">Published at <?= $article->created_at ?></a></li>
                        <li><a href="#">10 Comments</a></li>
                      </ul> -->
                      <table>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Jabatan</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Abbas, S.Ag</td>
                          <td>Kepala Desa</td>
                          
                          
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Mat Lubi, S.E</td>
                          <td>Sekretaris Desa</td>
                          
                          
                          
                        </tr>
                        <tr>
                          <td>3</td>
                          
                          <td>Abdul Hamid</td>
                          <td>Kaur Umum</td>
                          
                        </tr>
                        
                        <tr>
                          <td>4</td>
                          
                          <td>Muji Asih</td>
                          <td>Kaur Keuangan</td>
                          
                        </tr>
                        <tr>
                          <td>5</td>
                          
                          <td>Syafaruddin</td>
                          <td>Kasi Pemerintahan</td>
                          
                        </tr>
                        <tr>
                          <td>6</td>
                          
                          <td>Muhammad Taufik</td>
                          <td>Kasi Kesra</td>
                          
                        </tr>
                      </table>
                      
                      <h4>Badan Permusyawaratan Desa (BPD)</h4>
                      <p>Merupakan lembaga perwujudan demokrasi dalam penyelenggaraan pemerintahan desa. BPD dapat dianggap sebagai "parlemen"-nya desa. BPD merupakan lembaga baru di desa pada era otonomi daerah di Indonesia. Anggota BPD adalah wakil dari penduduk desa bersangkutan berdasarkan keterwakilan wilayah yang ditetapkan dengan cara musyawarah dan mufakat. Anggota BPD terdiri dari Ketua Rukun Warga, pemangku adat, golongan profesi, pemuka agama dan tokoh atau pemuka masyarakat lainnya. Masa jabatan anggota BPD adalah 6 tahun dan dapat diangkat/diusulkan kembali untuk 1 kali masa jabatan berikutnya. Pimpinan dan Anggota BPD tidak diperbolehkan merangkap jabatan sebagai Kepala Desa dan Perangkat Desa.
                      <table>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Jabatan</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Sanusi, S.Pd.I</td>
                          <td>Ketua</td>
                          
                          
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Drs. Ramli Ardiansyah, S.H</td>
                          <td>Wakil Ketua</td>
                          
                          
                          
                        </tr>
                        <tr>
                          <td>3</td>
                          
                          <td>Tri Vika Sari</td>
                          <td>Sekretaris</td>
                          
                        </tr>
                        
                        <tr>
                          <td>4</td>
                          
                          <td>Abdul Muin, S.Ag</td>
                          <td>Anggota</td>
                          
                        </tr>
                        <tr>
                          <td>5</td>
                          
                          <td>Mursidi, S.Pd.I </td>
                          <td>Anggota</td>
                          
                        </tr>
                        <tr>
                          <td>6</td>
                          
                          <td>Tabrani</td>
                          <td>Anggota</td>
                          
                        </tr>
                        <tr>
                          <td>7</td>
                          
                          <td>Awaludin</td>
                          <td>Anggota</td>
                          
                        </tr>
                        <tr>
                          <td>8</td>
                          
                          <td>Hardiyanto, A.Md</td>
                          <td>Anggota</td>
                          
                        </tr>
                        <tr>
                          <td>9</td>
                          
                          <td>Bawi, S.Pd.I</td>
                          <td>Anggota</td>
                          
                        </tr>
                      </table>
                      </p>

                      <h4>Lembaga Adat Desa</h4>
                      <p>Lembaga adat Desa adalah merupakan lembaga yang penyelenggarakan fungsi adat istiadat dan menjadi bagian dari susunan asli Desa yang tumbuh dan berkembang atas prakarsa masyarakat Desa.
                      <table>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Jabatan</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Marsidi Kurniawan A.Md</td>
                          <td>Ketua</td>
                          
                          
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Arel</td>
                          <td>Wakil Ketua</td>
                          
                          
                          
                        </tr>
                        <tr>
                          <td>3</td>
                          
                          <td>Yasno</td>
                          <td>Sekretaris</td>
                          
                        </tr>
                        
                        <tr>
                          <td>4</td>
                          
                          <td>Idris</td>
                          <td>Anggota</td>
                          
                        </tr>
                        <tr>
                          <td>5</td>
                          
                          <td>Rodian</td>
                          <td>Anggota</td>
                          
                        </tr>
                        <tr>
                          <td>6</td>
                          
                          <td>Ajam</td>
                          <td>Anggota</td>
                          
                        </tr>
                        
                      </table>
                      </p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <!-- <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Best Templates</a>,</li>
                              <li><a href="#">TemplateMo</a></li>
                            </ul> -->
                          </div>
                          <div class="col-6">
                            <!-- <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  
                </div>
                <div class="col-lg-12">
                  
                </div>
              </div>
            </div>
          </div>
          <?php $this->load->view('front/_partials/sidebar.php'); ?>
        </div>
      </div>
    </section>
	
	

	<?php $this->load->view('front/_partials/footer.php'); ?>
</body>

</html>