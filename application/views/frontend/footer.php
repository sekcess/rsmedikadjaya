	<!-- ======= Footer ======= -->
	<footer id="footer">

	<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6 footer-contact">
						<h3><b>RS Medika Djaya Pontianak</b></h3>
						<p>
							Jl. Parit H. Husin 1 Blok. MD No. 1, Bangka Belitung Laut, Kec. Pontianak Tenggara, Kota Pontianak, Kalimantan Barat<br><br>

						<div class="contact-info">
							<i class="bi bi-envelope"></i> <strong> Email:</strong> <a href="mailto:rsmedikadjaya@gmail.com">rsmedikadjaya@gmail.com</a><br>
							<i class="bi bi-telephone"></i><strong> No. Telp:</strong> <a href="tel:05615688558"> (0561)-5688558</a><br>
						</div>
						</p>

						<hr>
						<div class="social-links">
							<p><strong>Follow Us</strong></p>
							<a href="https://www.instagram.com/rsmedikadjayaptk/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
							<a href="https://www.facebook.com/RS-Medika-Djaya-Pontianak-100345592659104/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
							<a href="https://twitter.com/rsmedikadjaya" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
							<a href="https://www.youtube.com/channel/UCYJelct7NVx0XCAuEVGTPNQ" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
						</div>
					</div>

					<div class="col-lg-2 col-md-3 footer-links">
						<h4>Keterangan Lengkap</h4>
						<ul>
							<li>
								<i class="bx bx-chevron-right"></i>
								<a class="<?php if ($title == 'Beranda') : ?>
                        		<?= 'active'; ?>
								<?php endif; ?>" href="<?= base_url(); ?>">Beranda
								</a>
							</li>

							<li>
								<i class="bx bx-chevron-right"></i>
								<a class="<?php if ($title == 'Profil') : ?>
                        		<?= 'active'; ?>
								<?php endif; ?>" href="<?= base_url('profil'); ?>">Tentang Kami
								</a>
							</li>

							<li>
								<i class="bx bx-chevron-right"></i>
								<a class="<?php if ($title == 'Dokter') : ?>
                        		<?= 'active'; ?>
								<?php endif; ?>" href="<?= base_url('dokter/jadwal_dokter'); ?>">Jadwal Dokter
								</a>
							</li>
							
							<?php foreach ($homes as $home) : ?>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a class="<?php if ($title == 'Dokter') : ?>
                                    <?= 'active'; ?>
						            <?php endif; ?>" href="<?= base_url('dokter/kategori/' . $home->id); ?>"><?= $home->nama; ?>
						        </a>
						    </li>
						    <?php endforeach; ?>
							
							<li><i class="bx bx-chevron-right"></i> <a href="kontak.php">Kontak Kami</a></li>

							<!--<li>-->
							<!--	<i class="bx bx-chevron-right"></i>-->
							<!--	<a class="<?php if ($title == 'Pengajuan Surat Online') : ?>-->
       <!--                			<?= 'active'; ?>-->
							<!--	<?php endif; ?>" href="<?= base_url('janjitemu') ?>">Buat Janji Temu-->
							<!--	</a>-->
							<!--</li>-->

							<!--<li>-->
							<!--	<i class="bx bx-chevron-right"></i>-->
							<!--	<a class="<?php if ($title == 'Tracking') : ?>-->
       <!--                		 	<?= 'active'; ?>-->
							<!--	<?php endif; ?>" href="<?= base_url('tracking') ?>">Tracking-->
							<!--	</a>-->
							<!--</li>-->

						</ul>
					</div>
					
					<div class="col-lg-2 col-md-3 footer-links">
						<h4>Layanan</h4>
						<ul>
							<?php foreach ($kategori_ruangans as $ruangan) : ?>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a class="<?php if ($title == 'Ruangan') : ?>
                                    <?= 'active'; ?>
						            <?php endif; ?>" href="<?= base_url('ruangan/kategori_ruangan/' . $ruangan->id); ?>"><?= $ruangan->nama; ?>
						        </a>
						    </li>
						    <?php endforeach; ?>
						    
							<?php foreach ($kategori_ruangans2 as $ruangan) : ?>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a class="<?php if ($title == 'Ruangan') : ?>
                                    <?= 'active'; ?>
						            <?php endif; ?>" href="<?= base_url('ruangan/kategori_ruangan24/' . $ruangan->id); ?>"><?= $ruangan->nama; ?>
						        </a>
						    </li>
						    <?php endforeach; ?>
						</ul>
					</div>

					<div class="col-lg-2 col-md-3 footer-links">
						<h4>Lain-Lain</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('kerjasama') ?>">Rekan Kerjasama</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('kerjasama/karir') ?>">Karir</a></li>
							<!--<li><i class="bx bx-chevron-right"></i> <a href="#">Kebijakan Privasi</a></li>-->
							<!--<li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('auth/login') ?>" target="_blank">Login</a></li>-->
						</ul>
					</div>

					<div class="col-lg-3 col-md-3 footer-newsletter">
						<center>
							<a href="<?= base_url(); ?>" class="logo me-2"><img style="width:350px;height:275px;" src="<?= base_url(); ?>template/assets/img/logors.png">
							</a>
							<!--<h3 class="logo mt-2 px-2" style="color: #1977cc;"><b>RS MEDIKA DJAYA</b></h3>-->
						</center>
					</div>

				</div>
			</div>
		</div>

		<div class=" container text-center py-4">
			<div>
				<div class="copyright">
					&copy; <strong><span>RS Medika Djaya Pontianak</span></strong> <?= date('Y'); ?>. All Rights Reserved.
				</div>
			</div>
		</div>
	</footer><!-- End Footer -->

	<div id="preloader"></div>
	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?= base_url(); ?>template/assets/vendor/purecounter/purecounter.js"></script>
	<script src="<?= base_url(); ?>template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url(); ?>template/assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="<?= base_url(); ?>template/assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="<?= base_url(); ?>template/assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="<?= base_url(); ?>template/assets/js/main.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<!-- JS 2 -->

	<!-- Bootstrap core JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Third party plugin JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	<!-- Contact form JS-->
	<script src="<?= base_url() ?>assets/mail/jqBootstrapValidation.js"></script>
	<script src="<?= base_url() ?>assets/mail/contact_me.js"></script>
	<!-- Core theme JS-->
	<script src="<?= base_url() ?>assets/js/scripts.js"></script>
	<script src="<?= base_url(); ?>assets/jquery-ui-1.12.1/jquery-ui.js"></script>
	
	<script
    src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js">
    </script>
    
	<script>
	$(document).ready(function () {
                $('#tanggal').datepicker({
                 //merubah format tanggal datepicker ke dd-mm-yyyy
                    format: "dd-mm-yyyy",
                    //aktifkan kode dibawah untuk melihat perbedaanya, disable baris perintah diatasa
                    //format: "dd-mm-yyyy",
                    todayHighlight:true,
                    autoclose: true
                });
            });
    </script>
    
    <script>
    
    $(".tm").on("change", function() {
    this.setAttribute(
        "data-date",
        moment(this.value, "YYYY-MM-DD")
        .format( this.getAttribute("data-date-format") )
    )
    }).trigger("change")

    </script>
    
	</body>

	</html>