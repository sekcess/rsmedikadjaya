<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?php if ($this->session->flashdata('success') == TRUE) : ?>
					<div class="alert alert-success">
						<span><?= $this->session->flashdata('success'); ?></span>
					</div>
				<?php endif; ?>
				<div class="card">
					<div class="card-header card-header-icon" data-background-color="blue">
						<i class="fa-solid fa-table-columns fa-lg"></i>
					</div>
					<div class="card-content">
						<h4 class="card-title">Edit Radiologi</h4>
						<image class="img-fluid" src="<?= base_url('/assets/galery/');
														echo $profil[0]['radiologi'] ?>" alt="radiologi"></image>
						<hr />
						<form enctype="multipart/form-data" action="<?= base_url('galery/edit_radiologi/') ?><?= $profil[0]['id'] ?>" method="post">

							<label for="radiologi">Ganti Radiologi</label>
							<input type="file" accept="image/*" name="radiologi" id="radiologi">
							<input type="hidden" name="radiologi_old" value="<?= $profil[0]['radiologi'] ?>" id="radiologi">
							<button class="btn btn-success pull-right" type="submit">Update</button>
						</form>
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