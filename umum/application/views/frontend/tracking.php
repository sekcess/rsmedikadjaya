<!-- ======= Appointment Section ======= -->
<section id="appointment" class="appointment section-bg mt-5">
	<div class="container">
		<?php if ($this->session->flashdata('message') == TRUE) : ?>
			<?= $this->session->flashdata('message'); ?>
		<?php endif; ?>
		<div class="text-center section-title mt-5">
			<h2 class="section-heading text-uppercase">Tracking ID Janji Temu Anda</h2>
			<p class="section-subheading text-muted">Masukkan <b>ID</b> Janji Temu Anda untuk <b>Track</b>:</p>
		</div>

		<div class="text-justify pl-5 pr-5">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-lg-8">
					<?= form_open('tracking/cari', 'id="tracking", class="card card-sm"') ?>
					<div class="card-body row no-gutters align-items-center">
						<div class="col-auto">
							<i class="fas fa-search h4 text-body"></i>
						</div>
						<!--end of col-->
						<div class="col">
							<input class="form-control form-control-lg form-control-borderless" type="search" name="trackid" placeholder="Masukkan ID Anda">
						</div>
						<!--end of col-->
						<div class="col-auto">
							<button class="btn btn-lg btn-success" type="submit">Cari</button>
						</div>
						<!--end of col-->
					</div>
					<?= form_close() ?>
				</div>
				<!--end of col-->
			</div>
		</div>

	</div>
</section><!-- End Appointment Section -->
<hr>