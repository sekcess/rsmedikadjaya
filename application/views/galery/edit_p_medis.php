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
						<h4 class="card-title">Edit Penunjang Medis</h4>
						<image class="img-fluid" src="<?= base_url('/assets/galery/');
														echo $profil[0]['p_medis'] ?>" alt="p_medis"></image>
						<hr />
						<form enctype="multipart/form-data" action="<?= base_url('galery/edit_p_medis/') ?><?= $profil[0]['id'] ?>" method="post">

							<label for="p_medis">Ganti Penunjang Medis</label>
							<input type="file" accept="image/*" name="p_medis" id="p_medis">
							<input type="hidden" name="p_medis_old" value="<?= $profil[0]['p_medis'] ?>" id="s_pemuda">
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