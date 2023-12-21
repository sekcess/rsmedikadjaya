<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>template/assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?= base_url(); ?>template/assets/img/logors.png" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Rumah Sakit Medika Djaya | <?= $title; ?></title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url(); ?>template/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>template/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url(); ?>template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>template/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?= base_url(); ?>template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<link href="<?= base_url(); ?>assets/fontawesome-free-6.1.2/css/fontawesome.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/fontawesome-free-6.1.2/css/brands.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/fontawesome-free-6.1.2/css/solid.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
	<link href="<?= base_url(); ?>template/assets/css/style.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/css/progress_bar.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/jquery-ui-1.12.1/jquery-ui.css">
</head>

<body>

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
				<a href="https://youtube.com/OfficialRSMedikaDjaya" class="youtube"><i class="bi bi-youtube"> Official RS Medika Djaya</i></i></a>
			</div>
		</div>
	</div>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center">

			<!-- logo -->
			<a href="<?= base_url(); ?>" class="logo me-2"><img style="width:70px;height:150px;" src="<?= base_url(); ?>template/assets/img/logors.png"></a>
			<a href="<?= base_url(); ?>">
				<h1 class="logo me-auto" style="color: #1977cc;">RS MEDIKA DJAYA</h1>
			</a>

			<nav id="navbar" class="navbar order-last order-lg-0">
				<ul>
					<li class="nav-link">
						<a class="<?php if ($title == 'Beranda') : ?>
                        <?= 'active'; ?>
						<?php endif; ?>" href="<?= base_url(); ?>">Beranda
						</a>
					</li>

					<li class="nav-link">
						<a class="<?php if ($title == 'Profil') : ?>
                        <?= 'active'; ?>
						<?php endif; ?>" href="<?= base_url('profil'); ?>">Tentang Kami
						</a>
					</li>

					<li class="nav-link">
						<a class="<?php if ($title == 'Daftar Dokter') : ?>
                        <?= 'active'; ?>
						<?php endif; ?>" href="<?= base_url('dokter'); ?>">Daftar Dokter
						</a>
					</li>

					<li class="nav-link">
						<a class="<?php if ($title == 'Ruangan') : ?>
                        <?= 'active'; ?>
						<?php endif; ?>" href="<?= base_url('ruangan'); ?>">Fasilitas Ruangan
						</a>
					</li>

					<li>
						<a class="<?php if ($title == 'Pengajuan Janji Temu') : ?>
                        <?= 'active'; ?>
						<?php endif; ?>" href="<?= base_url('janjitemu') ?>">Buat Janji Temu
						</a>
					</li>

					<li>
						<a class="<?php if ($title == 'Tracking') : ?>
                        <?= 'active'; ?>
						<?php endif; ?>" href="<?= base_url('tracking') ?>">Tracking
						</a>
					</li>

				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>

			</nav><!-- .navbar -->

			<a href="<?= base_url('auth/login') ?>" target="_blank" class="appointment-btn"><span class="d-none d-md-inline"></span>Login Admin</a>

		</div>
	</header><!-- End Header -->