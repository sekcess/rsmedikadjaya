<style>
	.section_our_solution .row {
		align-items: center;
	}

	.our_solution_category {
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
	}

	.our_solution_category .solution_cards_box {
		display: flex;
		flex-direction: column;
		justify-content: center;
	}

	.solution_cards_box .solution_card {
		flex: 0 50%;
		background: #f1f7fd;
		box-shadow: 0 2px 4px 0 rgba(136, 144, 195, 0.2),
			0 5px 15px 0 rgba(37, 44, 97, 0.15);
		border-radius: 15px;
		margin: 8px;
		padding: 10px 15px;
		position: relative;
		z-index: 1;
		overflow: hidden;
		min-height: 218px;
		transition: 0.7s;
	}

	.solution_cards_box .solution_card:hover {
		background: #309df0;
		color: #fff;
		transform: scale(1.1);
		z-index: 9;
	}

	.solution_cards_box .solution_card:hover::before {
		background: rgb(85 108 214 / 10%);
	}

	.solution_cards_box .solution_card:hover .solu_title h3,
	.solution_cards_box .solution_card:hover .solu_description p {
		color: #fff;
	}

	.solution_cards_box .solution_card:before {
		content: "";
		position: absolute;
		background: rgb(85 108 214 / 5%);
		width: 170px;
		height: 400px;
		z-index: -1;
		transform: rotate(42deg);
		right: -56px;
		top: -23px;
		border-radius: 35px;
	}

	.solution_cards_box .solution_card:hover .solu_description button {
		background: #fff !important;
		color: #309df0;
	}

	.solution_card .so_top_icon {}

	.solution_card .solu_title h3 {
		color: #212121;
		font-size: 1.3rem;
		margin-top: 13px;
		margin-bottom: 20px;
	}

	.solution_card .solu_description p {
		font-size: 15px;
		margin-bottom: 15px;
		text-align: center;
	}

	.solution_card .solu_description button {
		border: 0;
		border-radius: 15px;
		background: linear-gradient(140deg,
				#42c3ca 0%,
				#42c3ca 50%,
				#42c3cac7 75%) !important;
		color: #fff;
		font-weight: 500;
		font-size: 1rem;
		padding: 7px 16px;
	}

	.our_solution_content h1 {
		text-transform: capitalize;
		margin-bottom: 1rem;
		font-size: 2.5rem;
	}

	.our_solution_content p {}

	.hover_color_bubble {
		position: absolute;
		background: rgb(54 81 207 / 15%);
		width: 100rem;
		height: 100rem;
		left: 0;
		right: 0;
		z-index: -1;
		top: 16rem;
		border-radius: 50%;
		transform: rotate(-36deg);
		left: -18rem;
		transition: 0.7s;
	}

	.solution_cards_box .solution_card:hover .hover_color_bubble {
		top: 0rem;
	}

	.solution_cards_box .solution_card .so_top_icon {
		width: 60px;
		height: 60px;
		border-radius: 50%;
		background: #fff;
		overflow: hidden;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.solution_cards_box .solution_card .so_top_icon img {
		width: 40px;
		height: 50px;
		object-fit: contain;

	}

	/*start media query*/
	@media screen and (min-width: 320px) {
		.sol_card_top_3 {
			position: relative;
			top: 0;
		}

		.our_solution_category {
			width: 100%;
			margin: 0 auto;
		}

		.our_solution_category .solution_cards_box {
			flex: auto;
		}
	}

	@media only screen and (min-width: 768px) {
		.our_solution_category .solution_cards_box {
			flex: 1;
		}
	}

	@media only screen and (min-width: 1024px) {
		.sol_card_top_3 {
			position: relative;
			top: -3rem;
		}

		.our_solution_category {
			width: 50%;
			margin: 0 auto;
		}
	}
</style>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
	<div class="container">
		<h1 class="">SELAMAT DATANG DI RUMAH SAKIT MEDIKA DJAYA PONTIANAK KOTA</h1>
		<h2></h2>
		<br>
		<br>
		<br>
	</div>
</section><!-- End Hero -->

<main id="main">

	<!-- ======= Services Section ======= -->
	<section id="services" class="services section-bg">
		<div class="container">

			<div class="section-title">
				<h2>Fasilitas Unggulan</h2>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
					<div class="icon-box">
						<div class="icon"><i class="fas fa-dna" style="color: #accc39;"></i></div>
						<h4><a href="">Pusat Orthopaedi Trauma</a></h4>
						<p>Pusat Orthopaedi Trauma untuk pasien yang mengalami cedera dan trauma, sehingga sendi tulang dan sendi dapat berfungsi secara normal.</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
					<div class="icon-box">
						<div class="icon"><i class="fas fa-bone" style="color: #accc39;"></i></div>
						<h4><a href="">Tulang Belakang (Spine)</a></h4>
						<p>Mengatasi nyeri punggung yang terjadi baik secara tiba-tiba atau berlangsung dalam waktu lama (kronis) serta keluhan kesemutan, kebas dan bila tidak tertangani dapat menurunkan fungsi secara keseluruhan.</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
					<div class="icon-box">
						<div class="icon"><i class="fas fa-hospital-user" style="color: #accc39;"></i></div>
						<h4><a href="">Pusat Bedah Urologi</a></h4>
						<p>Mendiagnosis dan pengobatan penyakit saluran kemih, baik pria maupun wanita.</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
					<div class="icon-box">
						<div class="icon"><i class="fas fa-heartbeat" style="color: #accc39;"></i></div>
						<h4><a href="">Pusat Layanan Jantung</a></h4>
						<p>Pusat Layanan Jantung senantiasa didukung oleh tenaga medis (seperti Dokter Spesialis Jantung dan Dokter Bedah Jantung), paramedic yang profesional.</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
					<div class="icon-box">
						<div class="icon"><i class="fas fa-syringe" style="color: #accc39;"></i></div>
						<h4><a href="">Pembuluh Darah</a></h4>
						<p>Dapat mendiagnosis adanya penyumbatan pada Pembuluh Darah.</p>
					</div>
				</div>

			</div>

		</div>
	</section><!-- End Services Section -->

	<section>
		<div class="container">



			<div class="row row-cols-1 row-cols-md-3 g-4">
				<div class="solution_cards_box">
					<div class="solution_card">
						<div class="hover_color_bubble"></div>

						<div class="solu_title">
							<h3 class="text-center"><b>Gawat Darurat (IGD)</b></h3>
						</div>

						<div class="solu_description">
							<p>Untuk layanan gawat darurat silahkan hubungi nomor di bawah ini:<br>
								<i class="btn btn-md btn-success mt-2 bi bi-whatsapp"></i> <b>0821-5523-9966</b> <br>
								<i class="btn btn-md btn-info mt-2 bi bi-telephone"></i> <b>0561-5688437</b> <br>
							<h5 class="text-center"><b>(24 jam)</b></h5>
							</p>
						</div>
					</div>
				</div>

				<div class="solution_cards_box">
					<div class="solution_card">
						<div class="hover_color_bubble"></div>

						<div class="solu_title">
							<h3 class="text-center"><b>Pendaftaran Poliklinik</b></h3>
						</div>

						<div class="solu_description">
							<p>Untuk pendaftaran poliklinik silahkan hubungi nomor di bawah ini:<br><br>
								<i class="btn btn-md btn-success mt-2 bi bi-whatsapp"></i> <b>0813-4999-1775</b>
								<br>

							<h5 class="text-center">
								<b>Senin-Sabtu <br>
									08:00-21:00</b>
							</h5>
							</p>
						</div>
					</div>
				</div>

				<div class="solution_cards_box">
					<div class="solution_card">
						<div class="hover_color_bubble"></div>

						<div class="solu_title">
							<h3 class="text-center"><b>Customer Service</b></h3>
						</div>

						<div class="solu_description">
							<p class="text-justify">Untuk layanan pelanggan silahkan hubungi nomor di bawah ini:<br>
								<i class="btn btn-md btn-success mt-2 bi bi-whatsapp"></i> <b>0812-5568-6668</b> <br>
								<i class="btn btn-md btn-info mt-2  bi bi-telephone"></i> <b>0561-5688558</b> <br>
							<h5 class="text-center">
								<b>Senin-Sabtu, 08:00-21:00</b>
							</h5>
							</p>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>

	<!-- ======= Why Us Section ======= -->
	<section id="why-us" class="why-us section-bg">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 d-flex align-items-stretch">
					<div class="content">
						<h3>MENGAPA MEMILIH KAMI?</h3>
						<p>
							Karena Kami akan menjadikan RSU MEDIKA DJAYA sebagai pilihan utama masyarakat melalui pelayanan yang berkualitas, efisien, dan terjangkau masyarakat Kota Pontianak, terutama Kami akan mengutamakan keselamatan, keamanan, dan kenyamanan pasien.
						</p>
						<div class="text-center">
							<a href="<?= base_url('profil'); ?>" class="more-btn">SELENGKAPNYA <i class="bx bx-chevron-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-8 d-flex align-items-stretch">
					<div class="icon-boxes d-flex flex-column justify-content-center">
						<div class="row">
							<div class="col-xl-4 d-flex align-items-stretch">
								<div class="icon-box mt-4 mt-xl-0">
									<i class="bx bx-git-branch"></i>
									<h4>Rumah Sakit Berbasis Digital</h4>
									<p>Menerapkan sistem manajemen operasional berbasis teknologi informasi dan jaringan dengan menerapkan sistem SIMRS, menjadikan rumah sakit ini menjadi Smart Hospital.</p>
								</div>
							</div>
							<div class="col-xl-4 d-flex align-items-stretch">
								<div class="icon-box mt-4 mt-xl-0">
									<i class="bx bx-group"></i>
									<h4>Kolaborasi Interprofesional</h4>
									<p>Mengembangkan kolaborasi interprofesional dalam pelayanan.</p>
								</div>
							</div>
							<div class="col-xl-4 d-flex align-items-stretch">
								<div class="icon-box mt-4 mt-xl-0">
									<i class="bx bx-chevrons-right"></i>
									<h4>Perawatan Berkelanjutan</h4>
									<p>Kesinambungan pelayanan yang dilakukan mulai dari perawatan sampai pasien pulang ke rumah.</p>
								</div>
							</div>
						</div>
					</div><!-- End .content-->
				</div>
			</div>

		</div>
	</section><!-- End Why Us Section -->

	<!-- ======= About Section ======= -->
	<section id="about" class="about ">
		<div class="container-fluid">

			<div class="row">
				<div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
					<a href="https://www.youtube.com/watch?v=BVqZISsESPE" class="glightbox play-btn mb-4"></a>
				</div>

				<div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
					<h3>FASILITAS PELAYANAN</h3>
					<p>RS MEDIKA DJAYA memiliki fasilitas yang dapat memenuhi kebutuhan pasien secara menyeluruh. Fasilitas yang ada berbasis komputerisasi dan sistem online sehingga mempercepat waktu proses pelayanan kepada pasien. Fasilitas-fasilitas ini diselenggarakan secara optimal dengan orientasi kepuasan pelanggan. Dibawah ini adalah beberapa fasilitas yang ada di RS MEDIKA DJAYA.</p>

					<div class="icon-box">
						<div class="icon"><i class="bx bx-clinic"></i></div>
						<h4 class="title"><a href="<?= base_url('ruangan'); ?>">Poliklinik</a></h4>
						<p class="description">Poliklinik RS MEDIKA DJAYA melayani tindakan observasi, diagnosis, pengobatan, rehabilitasi medik, serta pelayanan kesehatan lainnya. Poliklinik RS MEDIKA DJAYA didukung oleh dokter umum, dan dokter spesialis.</p>
					</div>

					<div class="icon-box">
						<div class="icon"><i class="bx bx-pulse"></i></div>
						<h4 class="title"><a href="">IGD & ICU</a></h4>
						<p class="description">Ada juga IGD & ICU di RS MEDIKA DJAYA untuk memberikan penanganan secepat mungkin ke pasien yang membutuhkan.</p>
					</div>

					<div class="icon-box">
						<div class="icon"><i class="bx bx-first-aid"></i></div>
						<h4 class="title"><a href="">Penunjang Medik</a></h4>
						<p class="description">Penunjang Medik di RS Medika Djaya berupa poliklinik, radiologi, IGD & ICU, serta Rawat Inap</p>
					</div>

					<div class="icon-box">
						<div class="icon"><i class="bx bx-bed"></i></div>
						<h4 class="title"><a href="">Rawat Inap</a></h4>
						<p class="description">Rawawt Inap di RS MEDIKA DJAYA sudah lengkap dengan alat yang sudah mendukung untuk kenyamanan pasien.</p>
					</div>

				</div>
			</div>

		</div>
	</section><!-- End About Section -->

	<!-- ======= Contact Section ======= -->
	<section id="contact" class="contact">
		<div class="container">

			<div class="section-title">
				<h2 class="section-heading text-uppercase"><b>KONTAK KAMI</b></h2>
				<p class="section-subheading text-muted">Apabila ada yang ingin Anda tanyakan langsung saja hubungi Kami. Pelayanan Kami akan segera membantu Anda.</p>
			</div>
		</div>

		<div class="container">
			<div class="row mt-5">

				<div class="col-lg-4">
					<div class="info">
						<div class="address">
							<i class="bi bi-geo-alt"></i>
							<h4>Lokasi:</h4>
							<p>Jl. Parit H. Husien 1, Kota Pontianak, Kalimantan Barat, Indonesia</p>
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
					<div class="text-center mb-3">
						<a href="<?= base_url(); ?>kontak.php">
							<button class="btn btn-info">
								<span class="btn-label" style="color: white;">
									Hubungi Kami<i class="material-icons"> Disini</i>
								</span>

							</button>
						</a>
					</div>

					<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d1847.034946658802!2d109.35605870340157!3d-0.06204156417061929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2e1d59e433affdbb%3A0xa40483fcfe467dd0!2sRS%20Medika%20Djaya%2C%20Jl.%20Parit%20H.%20Husin%201%20Blok.%20MD%20No.%201%2C%20Bangka%20Belitung%20Laut%2C%20Kec.%20Pontianak%20Tenggara%2C%20Kota%20Pontianak%2C%20Kalimantan%20Barat%2078124!3m2!1d-0.0617927!2d109.3569715!5e0!3m2!1sen!2sid!4v1669124885473!5m2!1sen!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

				</div>

			</div>
		</div>
	</section><!-- End Contact Section -->

</main><!-- End #main -->