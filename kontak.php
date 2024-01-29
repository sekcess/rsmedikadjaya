<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="76x76" href="template/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="template/assets/img/logors.png" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rumah Sakit Medika Djaya | Kontak Kami</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="template/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="template/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="template/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/fontawesome-free-6.1.2/css/fontawesome.css" rel="stylesheet">
    <link href="assets/fontawesome-free-6.1.2/css/brands.css" rel="stylesheet">
    <link href="assets/fontawesome-free-6.1.2/css/solid.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link href="template/assets/css/style.css" rel="stylesheet">
    <link href="assets/css/progress_bar.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/jquery-ui-1.12.1/jquery-ui.css">

</head>

<style>
    .blink {
        animation: blink 1s infinite;
    }

    .biru {
        color: #1977cc;
    }

    @keyframes blink {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }
</style>

<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope-fill"></i> <a href="mailto:rsmedikadjaya@gmail.com">rsmedikadjaya@gmail.com</a>
            <i class="bi bi-telephone-fill"></i> <a href="tel:05615688558">(0561)-5688558</a>
        </div>
        <div class="d-none d-lg-flex social-links align-items-center">
            <a href="https://www.instagram.com/rsmedikadjayaptk/" class="instagram"><i class="bi bi-instagram"> @rsmedikadjayaptk</i></a>
            <a href="https://www.facebook.com/RS-Medika-Djaya-Pontianak-100345592659104/" class="facebook"><i class="bi bi-facebook"> RS Medika Djaya Pontianak</i></a>
            <a href="https://twitter.com/rsmedikadjaya" class="twitter"><i class="bi bi-twitter"> @rsmedikadjaya</i></i></a>
            <!--<a href="https://youtube.com/OfficialRSMedikaDjaya" class="youtube"><i class="bi bi-youtube"> Official RS Medika Djaya</i></i></a>-->
        </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <!-- logo -->
        <a href="/rsmedikadjaya" class="logo me-2"><img style="width:60px;height:220px;" src="template/assets/img/logors.png"></a>
        <a href="/rsmedikadjaya">
            <h1 class="logo me-auto" style="color: #1977cc;">RUMAH SAKIT MEDIKA DJAYA</h1>
        </a>

        <nav id="navbar" class="navbar order-last order-lg-0 px-5">
            <ul>
                <li class="nav-link">
                    <a href="/rsmedikadjaya">Beranda
                    </a>
                </li>

                <li class="nav-link">
                    <a href="profil">Tentang Kami
                    </a>
                </li>

                <li class="dropdown">
                    <a class="<?php if ($title == 'Dokter') : ?>
                                    <?= 'active'; ?>
						            <?php endif; ?>" href="#"><span>Dokter</span> <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a class="<?php if ($title == 'Dokter') : ?>
                                    <?= 'active'; ?>
						            <?php endif; ?>" href="dokter/jadwal_dokter">Jadwal Dokter
                            </a>
                        </li>
                        <li>
                            <a class="<?php if ($title == 'Dokter') : ?>
                                    <?= 'active'; ?>
						            <?php endif; ?>" href="dokter/kategori/1">Dokter Spesialis
                            </a>
                        </li>
                        <li>
                            <a class="<?php if ($title == 'Dokter') : ?>
                                    <?= 'active'; ?>
						            <?php endif; ?>" href="dokter/kategori/2">Dokter Umum
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="<?php if ($title == 'Layanan') : ?>
                                    <?= 'active'; ?>
						            <?php endif; ?>" href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a class="<?php if ($title == 'Layanan') : ?>
                                    <?= 'active'; ?>
						            <?php endif; ?>" href="ruangan/kategori_ruangan/3">Rehabilitasi Medik
                            </a>
                        </li>
                        <li>
                            <a class="<?php if ($title == 'Layanan') : ?>
                                    <?= 'active'; ?>
						            <?php endif; ?>" href="ruangan/kategori_ruangan/2">Rawat Inap
                            </a>
                        </li>
                        <li>
                            <a class="<?php if ($title == 'Layanan') : ?>
                                    <?= 'active'; ?>
						            <?php endif; ?>" href="ruangan/kategori_ruangan/1">Poliklinik
                            </a>
                        </li>
                        <div class="list-group-item-primary">
                            <li>
                                <a><span class="blink biru"><b>Pelayanan 24 Jam</b></span></a>
                            </li>
                            <li>
                                <a class="<?php if ($title == 'Layanan') : ?>
                                        <?= 'active'; ?>
						                <?php endif; ?>" href="ruangan/kategori_ruangan24/5">Farmasi
                                </a>
                            </li>
                            <li>
                                <a class="<?php if ($title == 'Layanan') : ?>
                                        <?= 'active'; ?>
						                <?php endif; ?>" href="ruangan/kategori_ruangan24/4">Radiologi
                                </a>
                            </li>
                            <li>
                                <a class="<?php if ($title == 'Layanan') : ?>
                                        <?= 'active'; ?>
						                <?php endif; ?>" href="ruangan/kategori_ruangan24/3">Laboratorium
                                </a>
                            </li>
                            <li>
                                <a class="<?php if ($title == 'Layanan') : ?>
                                        <?= 'active'; ?>
						                <?php endif; ?>" href="ruangan/kategori_ruangan24/1">IGD & ICU
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="<?php if ($title == 'Lain') : ?>
                                    <?= 'active'; ?>
						            <?php endif; ?>" href="#"><span>Lain-Lain</span> <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a class="<?php if ($title == 'Lain') : ?>
                                    <?= 'active'; ?>
						            <?php endif; ?>" href="kerjasama">Rekan Kerjasama
                            </a>
                        </li>
                        <li>
                            <a class="<?php if ($title == 'Lain') : ?>
                                    <?= 'active'; ?>
						            <?php endif; ?>" href="kerjasama/karir">Karir
                            </a>
                        </li>
                    </ul>
                </li>

                <li><a class="active" href="kontak.php">Kontak Kami
                    </a>
                </li>


                <!--<li>-->
                <!--    <a href="umum/janjitemu">Buat Janji Temu-->
                <!--    </a>-->
                <!--</li>-->

                <!--<li>-->
                <!--    <a href="umum/tracking">Cari ID Janji Temu-->
                <!--    </a>-->
                <!--</li>-->

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>

        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2><b>Kontak Kami</b></h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Kontak Kami</li>
            </ol>
        </div>

    </div>
</section>
<!-- End Breadcrumbs Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2 class="section-heading text-uppercase"><b>KONTAK KAMI</b></h2>
            <p class="section-subheading text-muted">Mohon lengkapi data diri Anda dan tuliskan pertanyaan Anda dalam form di bawah ini. Pelayanan Kami akan segera membantu Anda.</p>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Lokasi:</h4>
                        <p>Jl. Parit H. Husin 1 Blok. MD No. 1, Bangka Belitung Laut, Kec. Pontianak Tenggara, Kota Pontianak, Kalimantan Barat</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p><a href="mailto:rsmedikadjaya@gmail.com">rsmedikadjaya@gmail.com</a></p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Hubungi Kami:</h4>
                        <p><a href="tel:05615688558">(0561)-5688558</a></p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-clock"></i>
                        <h4>Jam Kunjungan:</h4>
                        <p>Senin-Minggu: 24 Jam</p>

                    </div>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="send.php" method="post" target="_blank" class="php-email-form">
                    <div class="row">
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Lengkap Anda" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email Anda" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
                    </div>
                    <input type="hidden" name="noWa" value="6281255686668">
                    <!--<div class="my-3">-->
                    <!--    <div class="error-message">Tidak Terkirim</div>-->
                    <!--    <div class="sent-message">Pesan Kamu sudah terkirim. Thank you!</div>-->
                    <!--    <div class="loading">Mohon Tunggu Sebentar..</div>-->
                    <!--</div>-->
                    <div class="text-center"><button type="submit" name="submit">Kirim Pesan</button></div>
                </form>

            </div>

        </div>
        <br>
        <div>
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d1847.034946658802!2d109.35605870340157!3d-0.06204156417061929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2e1d59e433affdbb%3A0xa40483fcfe467dd0!2sRS%20Medika%20Djaya%2C%20Jl.%20Parit%20H.%20Husin%201%20Blok.%20MD%20No.%201%2C%20Bangka%20Belitung%20Laut%2C%20Kec.%20Pontianak%20Tenggara%2C%20Kota%20Pontianak%2C%20Kalimantan%20Barat%2078124!3m2!1d-0.0617927!2d109.3569715!5e0!3m2!1sen!2sid!4v1669124885473!5m2!1sen!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section><!-- End Contact Section -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="container text-center py-4">
        <div>
            <div class="copyright">
                &copy; <strong><span>RS Medika Djaya Pontianak</span></strong> <?= date('Y'); ?>. All Rights Reserved.
            </div>
        </div>
    </div>
</footer><!-- End Footer -->

</html>