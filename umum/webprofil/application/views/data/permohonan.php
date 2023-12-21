<main class="main">


		<div class="container-fluid">
			<div class="d-sm-flex align-items-center justify-content-between mb-3">
				<h1 class="h3 mb-0 text-gray-800"><?= $judul ?></h1>
			</div>
			<?php if ($this->session->flashdata('success') == TRUE) : ?>
					<div class="alert alert-success">
						<span><?= $this->session->flashdata('success'); ?></span>
					</div>
				<?php endif; ?>
				
				<table id="datatables" class="table" >
					<thead>
						<tr>
							<th>No</th>
							<th>ID Pengajuan</th>
							<th>Nama Pengaju (NIK)</th>
							<th>File</th>
							<th>Status Pengajuan</th>
							<th class="disabled-sorting text-right">Actions</th>
							<th>No Hp</th>
							<th>Tanggal</th>
							<th>Jenis Surat</th>
						</tr>
					</thead>
					<tbody>
			
						<?php $no = 1; ?>
						<?php foreach ($data as $key) : ?>
						<?php if($key['status'] !== '5'):?>
							<tr>
								<td><?= $no; ?></td>
								<td><?= $key['idpermohonan']; ?></td>
								<td><?= $key['nama'] . ' (' . $key['nik'] . ')'; ?></td>
								<td>
									<button class="btn btn-simple btn-info" data-toggle="modal" data-target="#lihatfile<?= $key['idpermohonan']; ?>"><i class="fa fa-eye"></i></button>
								</td>
								<td><?= $status[$key['status']]; ?></td>
								<td class="text-center">
									<button class="btn btn-simple btn-success btn-icon" data-toggle="modal" data-target="#statusPengajuan<?= $key['idpermohonan']; ?>"><i class="fa fa-edit"></i></button>
									<button class="btn btn-simple btn-danger btn-icon" data-toggle="modal" data-target="#hapusPengajuan<?= $key['idpermohonan']; ?>"><i class="fa fa-trash"></i></button>
								</td>
								<td><?= $key['notelepon']; ?></td>
								<?php $content = character_limiter($key['created_at'], 10)?>
								<td><?= $content; ?></td>
								<td><?= $options[$key['jenissurat']]; ?></td>
			
							</tr>
							<?php $no++; ?>
						<?php endif; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
				
						<?php foreach ($data as $key) : ?>
							<div class="modal fade" id="statusPengajuan<?= $key['idpermohonan']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg ">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
										</div>

										<form method="post" action="<?= base_url(); ?>user/updateStatus/<?= $key['idpermohonan']; ?>">
											<div class="modal-body text-center">
												<h5>Update Status Pengajuan ID: <?= $key['idpermohonan'] ?>? </h5>
												<label for="status">Pilih Status</label>
												<div class="radio">
													<label>
														<input type="radio" name="status" value="1" <?= $key['status'] == '1' ? 'checked="true"' : '' ?>><span class="circle"></span><span class="check"></span> <?= $status['1'] ?>
													</label>
													<label>
														<input type="radio" name="status" value="2" <?= $key['status'] == '2' ? 'checked="true"' : '' ?>><span class="circle"></span><span class="check"></span> <?= $status['2'] ?>
													</label>
													<label>
														<input type="radio" name="status" value="3" <?= $key['status'] == '3' ? 'checked="true"' : '' ?>><span class="circle"></span><span class="check"></span> <?= $status['3'] ?>
													</label>
													<label>
														<input type="radio" name="status" value="4" <?= $key['status'] == '4' ? 'checked="true"' : '' ?>><span class="circle"></span><span class="check"></span> <?= $status['4'] ?>
													</label>

													<label>
														<input type="radio" name="status" value="5" <?= $key['status'] == '5' ? 'checked="true"' : '' ?>><span class="circle"></span><span class="check"></span> <?= $status['5'] ?>
													</label>
												</div>
											</div>
											<div class="modal-footer text-center">
												<button type="button" class="btn btn-simple" data-dismiss="modal">Tidak</button>
												<button type="submit" class="btn btn-info btn-simple">Update</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
						<!--    end large modal update  -->

						<!-- small modal hapus  -->
						<?php foreach ($data as $key) : ?>
							<div class="modal fade" id="hapusPengajuan<?= $key['idpermohonan']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-small ">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
										</div>

										<form method="post" action="<?= base_url(); ?>user/hapusPengajuan/<?= $key['idpermohonan']; ?>">
											<div class="modal-body text-center">
												<h5>Apakah anda yakin untuk menghapus pengajuan ini? </h5>
											</div>
											<div class="modal-footer text-center">
												<button type="button" class="btn btn-simple" data-dismiss="modal">Tidak</button>
												<button type="submit" class="btn btn-success btn-simple">Ya</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
						<!--    end small modal hapus  -->

						<!-- notice modal -->
						<?php foreach ($data as $key) : ?>
							<div class="modal fade" id="lihatFile<?= $key['idpermohonan']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-notice">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
											<h5 class="modal-title text-center" id="myModalLabel">File Lampiran</h5>
										</div>
										<div class="modal-body">
											<div class="instruction">
												<div class="row">
													<div class="col-md-12">
														<embed type="application/pdf" width="100%" height="450px;" src="<?= base_url('uploads/berkas') ?>/<?= $key['file'] ?>"></embed>
													</div>

												</div>
											</div>

										</div>
										<div class="modal-footer text-center">
											<button type="button" class="btn btn-info btn-round" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>

						<?php foreach ($data as $key) : ?>
							<div class="modal fade" id="lihatfile<?= $key['idpermohonan']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-notice">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
											<h5 class="modal-title text-center" id="myModalLabel">File</h5>
										</div>
										<div class="modal-body">
											<div class="instruction">
												<div class="row">
													<div class="col-md-12">
														<embed type="application/pdf" width="100%" height="450px;" src="<?= base_url('uploads/berkas') ?>/<?= $key['file'] ?>"></embed>
													</div>

												</div>
											</div>

										</div>
										<div class="modal-footer text-center">
											<button type="button" class="btn btn-info btn-round" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>

		</div>
</main>
