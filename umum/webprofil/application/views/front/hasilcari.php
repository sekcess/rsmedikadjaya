<section class="page-section">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Tracking Surat Online</h2>
			<h3 class="section-subheading text-muted">Surat <b>Ditemukan</b>, Detail Dibawah:</h3>
		</div>
		<div class="text-justify pl-5 pr-5">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-lg-10">
					<div class="row">
						<div class="col">
							<h3>Keterangan:</h3>
							<table class="table">
								<tr>
									<td>ID Pengajuan</td>
									<td>:</td>
									<td><?= $row['idpermohonan'] ?></td>
								</tr>
								<tr>
									<td>Nama Pengaju</td>
									<td>:</td>
									<td><?= $row['nama'] ?></td>
								</tr>
								<tr>
									<td>NIK</td>
									<td>:</td>
									<td><?= $row['nik'] ?></td>
								</tr>
								<tr>
									<td>No Hp</td>
									<td>:</td>
									<td><?= $row['notelepon'] ?></td>
								</tr>
								<tr>
									<td>Status</td>
									<td>:</td>
									<td><?= $status[$row['status']] ?></td>
								</tr>
								<tr>
									<td>Jenis Surat</td>
									<td>:</td>
									<td><?= $options[$row['jenissurat']] ?></td>
								</tr>
								<tr>
									<td>File Lampiran</td>
									<td>:</td>
									<td>
										<button class="btn btn-outline-info" data-toggle="modal" data-target="#lihatFile<?= $row['idpermohonan']; ?>"><i class="fa fa-eye"></i></button>
									</td>
								</tr>

							</table>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page-section">
</section>

<!-- Modal -->
<div class="modal fade" id="lihatFile<?= $row['idpermohonan']; ?>" tabindex="-1" role="dialog" aria-labelledby="fileLampiran" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="fileLampiran">File ID: <?= $row['idpermohonan'] ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<embed type="application/pdf" width="100%" height="450px;" src="<?= base_url('upload/berkas/') . $row['file']; ?>"></embed>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>