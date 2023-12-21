<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?= base_url() ?>/assets/img/logo/logors1.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Rumah Sakit Medika Djaya | <?= $title; ?></title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<!-- Bootstrap core CSS     -->
	<link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
	<!--  Material Dashboard CSS    -->
	<link href="<?= base_url() ?>/assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="<?= base_url() ?>/assets/css/demo.css" rel="stylesheet" />
	<!--     Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/jquery-ui-1.12.1/jquery-ui.css">

	<link href="<?= base_url(); ?>assets/fontawesome-free-6.1.2/css/all.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/fontawesome-free-6.1.2/css/fontawesome.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/fontawesome-free-6.1.2/css/brands.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/fontawesome-free-6.1.2/css/solid.css" rel="stylesheet">

</head>

<body>
	<div class="wrapper">
		<div class="sidebar" data-active-color="blue" data-background-color="black" data-image="<?= base_url() ?>/assets/img/sidebar-1.jpg">
			<!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
			<div class="logo">
				<a href="/" class="simple-text logo-mini"><img style="width:32px;height:29px;" src="<?= base_url(); ?>/assets/img/logo/logors1.png"></a>
				<a href="http://www.creative-tim.com" class="simple-text logo-normal">
					RS MEDIKA DJAYA
				</a>
			</div>
			<div class="sidebar-wrapper">
				<?php if ($this->session->userdata('id_user') == TRUE) : ?>
					<div class="user">
						<div class="photo">
							<?php

							$data = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

							?>
							<img src="<?= base_url('uploads/admin/') . $data['foto']; ?>">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" class="collapsed">
								<span>
									<?php

									$data = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

									?>
									<?= ucfirst($data['username']); ?>
									<b class="caret"></b>
								</span>
							</a>
							<div class="clearfix"></div>
							<div class="collapse" id="collapseExample">
								<ul class="nav">
									<!-- <li>
                                        <a href="#">
                                            <span class="sidebar-mini">MP</span>
                                            <span class="sidebar-normal">My Profile</span>
                                        </a>
                                    </li> -->
									<li>
										<a href="<?= base_url() ?>user/edit/<?= $this->session->userdata('id_user'); ?>">
											<span class="sidebar-mini">EP</span>
											<span class="sidebar-normal">Edit Profile</span>
										</a>
									</li>
									<!-- <li>
                                        <a href="#">
                                            <span class="sidebar-mini">S</span>
                                            <span class="sidebar-normal">Settings</span>
                                        </a>
                                    </li> -->
								</ul>
							</div>
						</div>
					</div>
				<?php endif; ?>


				<ul class="nav">
					<li class="<?php if ($title == 'Dashboard') : ?>
                        <?= 'active'; ?>
						<?php endif; ?>
						">
						<a href="<?= base_url('dashboard') ?>">
							<i class="material-icons">dashboard</i>
							<p>Dashboard</p>
						</a>
					</li>

					<li class="
						<?php if ($title == 'Management Janji Temu') : ?>
							<?= 'active'; ?>
						<?php endif; ?>
						">
						<a data-toggle="collapse" href="#pagesExamples">
							<i class="fa-solid fa-bars-progress"></i>
							<p>Management Janji
								<b class="caret"></b>
							</p>
						</a>
						<div class="
                        <?php if ($title == 'Management Janji Temu') : ?>
                            <?= 'collapse in'; ?>
                        <?php else : ?>
                            <?= 'collapse'; ?>
                        <?php endif; ?>
                        " id="pagesExamples">
							<ul class="nav">
								<li class="
                                <?php if ($sub_title == 'Pengajuan Janji Masuk') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>janji/pengajuan">
										<span class="sidebar-mini">PJM</span>
										<span class="sidebar-normal">Pengajuan Janji Masuk</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Janji Masuk') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>janji/janji_masuk">
										<span class="sidebar-mini">JM</span>
										<span class="sidebar-normal">Janji Masuk</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Janji Keluar') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>janji/janji_keluar">
										<span class="sidebar-mini">JK</span>
										<span class="sidebar-normal">Janji Keluar</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Janji Keterangan') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>janji/janji_keterangan">
										<span class="sidebar-mini">KJ</span>
										<span class="sidebar-normal">Keterangan Janji</span>
									</a>
								</li>

							</ul>
						</div>
					</li>

					<li class="<?php if ($title == 'Pasien') : ?>
                        <?= 'active'; ?>
						<?php endif; ?>
						">
						<a href="<?= base_url('pasien') ?>">
							<i class="fa-solid fa-person-breastfeeding"></i>
							<p>Pasien</p>
						</a>
					</li>

					<?php if ($this->session->userdata('level') == 'administrator') : ?>


						<li class="
                        <?php if ($title == 'Management Pegawai') : ?>
                            <?= 'active'; ?>
                        <?php endif; ?>
                            ">
							<a href="<?= base_url() ?>pegawai">
								<i class="fa-solid fa-user-doctor"></i>
								<p>Management Pegawai</p>
							</a>
						</li>

						<li class="
                        <?php if ($title == 'Management User') : ?>
                            <?= 'active'; ?>
                        <?php endif; ?>
                            ">
							<a href="<?= base_url() ?>user">
								<i class="fa-solid fa-hospital-user"></i>
								<p>Management User</p>
							</a>
						</li>

					<?php endif; ?>

					<li class="
						<?php if ($title == 'Gallery') : ?>
							<?= 'active'; ?>
						<?php endif; ?>
						">
						<a data-toggle="collapse" href="#formsExamples">
							<i class="fa-solid fa-table-columns"></i>
							<p>Gallery
								<b class="caret"></b>
							</p>
						</a>
						<div class="
                        <?php if ($title == 'Gallery') : ?>
                            <?= 'collapse in'; ?>
                        <?php else : ?>
                            <?= 'collapse'; ?>
                        <?php endif; ?>
                        " id="formsExamples">
							<ul class="nav">
								<li class="
                                <?php if ($sub_title == 'Profil Rumah Sakit') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>galery/profil_rs">
										<span class="sidebar-mini">PRS</span>
										<span class="sidebar-normal">Profil Rumah Sakit</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Radiologi') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>galery/radiologi">
										<span class="sidebar-mini">R</span>
										<span class="sidebar-normal">Radiologi</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Poliklinik') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>galery/poliklinik">
										<span class="sidebar-mini">VF</span>
										<span class="sidebar-normal">Poliklinik</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'IGD & ICU') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>galery/igdicu">
										<span class="sidebar-mini">I&I</span>
										<span class="sidebar-normal">IGD & ICU</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Penunjang Medis') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>galery/p_medis">
										<span class="sidebar-mini">PM</span>
										<span class="sidebar-normal">Penunjang Medis</span>
									</a>
								</li>
								<li class="
                                <?php if ($sub_title == 'Rawat Inap') : ?>
                                    <?= 'active'; ?>
                                <?php endif; ?>
                                ">
									<a href="<?= base_url() ?>galery/r_inap">
										<span class="sidebar-mini">RI</span>
										<span class="sidebar-normal">Rawat Inap</span>
									</a>
								</li>
							</ul>
						</div>
					</li>

					<?php if ($this->session->userdata('id_user') == TRUE) : ?>

						<li>
							<a href="<?= base_url('auth/logout') ?>">
								<i class="fa-solid fa-right-from-bracket"></i>
								<p>Logout</p>
							</a>
						</li>

					<?php else : ?>

						<li>
							<a href="<?= base_url() ?>auth/login">
								<i class="material-icons">login</i>
								<p>Login</p>
							</a>
						</li>

					<?php endif; ?>



				</ul>
			</div>
		</div>
		<div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-minimize">
						<button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
							<i class="material-icons visible-on-sidebar-regular">more_vert</i>
							<i class="material-icons visible-on-sidebar-mini">view_list</i>
						</button>
					</div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"> <?= $title; ?> </a>
					</div>
					<!-- <div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">



							<li>
								<a href="<?= base_url() ?>auth/login" class="dropdown-toggle">
									<i class="material-icons">login</i>
									<p class="hidden-lg hidden-md">Login</p>
								</a>
							</li>
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">person</i>
									<p class="hidden-lg hidden-md">Profile</p>
								</a>
							</li>
							<li class="separator hidden-lg hidden-md"></li>
						</ul>
						<form class="navbar-form navbar-right" role="search">
							<div class="form-group form-search is-empty">
								<input type="text" class="form-control" placeholder="Search">
								<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i>
								<div class="ripple-container"></div>
							</button>
						</form>
					</div> -->
				</div>
			</nav>