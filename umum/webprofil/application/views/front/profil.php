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
                      <h4>Profil Wilayah Desa</h4>
                      <!-- <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">Published at <?= $article->created_at ?></a></li>
                        <li><a href="#">10 Comments</a></li>
                      </ul> -->
                      <p>Desa Kuala Dua adalah salah satu desa yang terletak di Kecamatan Sungai Raya Kabupaten Kubu Raya, Kalimantan Barat dengan luas wilayah 46.780 km2. </p>
                      <h4>Visi</h4>
                      <p>Berdasarkan perkembangan situasi dan kondisi Desa Kuala Dua saat ini, dan terkait dengan Rencana Pembangunan Jangka Menengah Desa (RPJM-Desa), maka untuk Pembangunan Desa Kuala Dua pada periode 6 (enam) tahun ke depan (tahun 2020 - 2025, disusun visi sebagai berikut : 
                      <br>
                      Membangun Masyarakat Desa Kuala Dua yang Lebih Baik, Adil, Transparan dan Sejahtera. 
                      <br>
                      Dengan penjelasan sebagai berikut : 
                      <br>
                      a) Lebih baik mengandung pengertian bahwa Desa Kuala Dua mampu mewujudkan kehidupan dalam masyarakat yang mampu meningkatkan dalam aspek spiritual, moral, intelejensi, social budaya serta perekonomian bagi masyarakat serta dapat mengandalkan pada kemampuan dan kekuatan sendiri yang berbasis pada keunggulan lokal dengan pemanfaat sumber daya alam yang dimiliki.
                      <br>
                      b) Adil mengandung pengertian bahwa masyarakat Desa Kuala Dua agar mendapatkan peranana dalam pelayanan secara proporsional untuk mencapai keberhasilan dalam membangun kehidupan bermasyarakat dan pelaksanaan pembangunan
                      <br>
                      c) Transparan mengandung pengertian bahwa masyarakat Desa Kuala Dua dalam berkehidupan di masyarakat dapat mengakses informasi birokrasi secara terbuka dan akuntabel.
                      <br>
                      d) Sejahtera mengandung pengertian bahwa masyarakat desa Kuala Dua dapat diupayakan agar tercapai dan terpenuhi kebutuhan dasar hidup dalam kehidupan bermasyarakat secara lahir dan batin ( sandang, pangan, papan, agama, pendidikan, kesehatan, rasa aman dan tenteram ) sehingga masyarakat yang memiliki ketangguhan jiwa dan raga yang sehat dan kuat.
                      </p>

                      <h4>Misi</h4>
                      <p>Misi adalah penjabaran rencana aksi untuk mencapai visi. Untuk mewujudkan visi tersebut, maka misi yang akan dilakukan adalah sebagai berikut : 
                      <br>
                      1. Meningkatkan dan melakukan transparansi atau kejelasan pembangunan dan Pemeliharaan serta Pengelolaan sarana prasarana baik bantuan dari pemerintah Kabupaten, Provinsi dan nasional dengan tepat sasaran.
                      <br>
                      2. Meningkatkan pelayanan dasar di desa Kuala Dua
                      <br>
                      3. Meningkatkan infrastruktur desa serta Pembangunan dan Pemeliharaan sehingga Pengelolaan sarana dan prasarana Desa Berbasis Kemampuan Lokal Desa
                      <br>
                      4. Meningkatkan iman dan takwa kepada Tuhan Yang Maha Esa.
                      <br>
                      5. Meningkatkan Kualitas dan Peran Kelembagaan Desa berbasis Partisipasi Masyarkat untuk pembangunan Desa
                      </p>
                      <h4>Letak Wilayah</h4>
                      <p>Desa Kuala Dua terletak di bagian Selatan kabupaten Kubu Raya, secara administratif batas Desa Kuala Dua adalah sebagai berikut :
                      <table>
                        <!-- <tr>
                          <th>Company</th>
                          <th>Contact</th>
                          <th>Country</th>
                        </tr> -->
                        <tr>
                          <td>Utara berbatasan dengan desa</td>
                          <td>Ambangah</td>
                          <td>Kecamatan</td>
                          <td>Sungai Raya</td>
                          
                        </tr>
                        <tr>
                          <td>Selatan berbatasan dengan desa</td>
                          <td>Rasau Jaya Umum</td>
                          <td>Kecamatan</td>
                          <td>Rasau Jaya</td>
                          
                          
                        </tr>
                        <tr>
                          <td>Timur berbatasan dengan desa</td>
                          
                          <td>Mekar Sari</td>
                          <td>Kecamatan</td>
                          <td>Sungai Raya</td>
                        </tr>
                        <tr>
                          <td>Barat berbatasan dengan desa</td>
                          
                          <td>Limbung</td>
                          <td>Kecamatan</td>
                          <td>Sungai Raya</td>
                        </tr>
                        
                      </table>
                      </p>
                      <h4>Luas Wilayah</h4>
                      <p>Desa Kuala Dua memiliki wilayah administratif seluas 46.780 KM2 dimana wilayahnya sebagian besar didominasi oleh dataran rendah. Desa Kuala Dua terbagi menjadi 4 ( empat ) dusun. Dusun terluas adalah dusun Keramat 1.
                      <table>
                        <tr>
                          <th>No</th>
                          <th>Nama Dusun</th>
                          <th>Luas Wilayah</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Dusun Keramat 1</td>
                          <td>18.748 KM2</td>
                          
                          
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Dusun Keramat 2</td>
                          <td>7.970 KM2</td>
                          
                          
                          
                        </tr>
                        <tr>
                          <td>3</td>
                          
                          <td>Dusun Karya 1</td>
                          <td>6.091 KM2</td>
                          
                        </tr>
                        <tr>
                          <td>4</td>
                          
                          <td>Dusun Karya 2</td>
                          <td>13.971 KM2</td>
                          
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