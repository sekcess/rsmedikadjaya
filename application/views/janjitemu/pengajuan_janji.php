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
						<i class="fa-solid fa-bars-progress lg"></i>
					</div>
					<div class="card-content">
						<h4 class="card-title">Pengajuan Janji Masuk</h4>
						<div class="toolbar">
						</div>
						<div class="material-datatables">
							<table id="datatables" class="table table-striped table-no-bordered table-hover nowrap" cellspacing="0" width="100%" style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										
										<th>ID Pengajuan</th>
										<th>Nama Pengaju (Tanggal)</th>
										<th>Status</th>
										<th>No Hp</th>
										<!--<th>Tanggal</th>-->
										<th class="text-center">Dokter Pilihan</th>
										<th class="text-center">File</th>
										<th class="disabled-sorting text-center">Actions</th>
									</tr>
								</thead>
								<tbody>

									<?php $no = 1; ?>
									<?php foreach ($data as $key) : ?>
										<?php if ($key['status'] !== '5') : ?>
											<tr>
												<td><?= $no; ?></td>
												<td><?= $key['id']; ?></td>
												<td><?= $key['nama'] . ' (' . $key['nik'] . ')'; ?></td>
												<td><?= $status[$key['status']]; ?></td>
												<td><?= $key['no_hp']; ?></td>
												<!--<td><?= $key['tanggal']; ?></td>-->
												<td><?= $options[$key['jenis_dokter']]; ?></td>
												<td>

													<button class="btn btn-simple btn-info" data-toggle="modal" data-target="#lihatfile<?= $key['id']; ?>"><i class="material-icons">remove_red_eye</i></button>
												</td>
												<td class="text-right">
													<button class="btn btn-simple btn-success btn-icon" data-toggle="modal" data-target="#statusPengajuan<?= $key['id']; ?>"><i class="material-icons">outbond</i>Update Status</button>
													<button class="btn btn-simple btn-danger btn-icon" data-toggle="modal" data-target="#hapusPengajuan<?= $key['id']; ?>"><i class="material-icons">delete</i></button>
												</td>

											</tr>
											
									<?php $no++; ?>
										<?php endif; ?>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>


						<!-- large modal update  -->
						<?php foreach ($data as $key) : ?>
							<div class="modal fade" id="statusPengajuan<?= $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg ">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
										</div>

										<form method="post" action="<?= base_url(); ?>janji/updateStatus/<?= $key['id']; ?>">
											<div class="modal-body text-center">
												<h5>Update Status Pengajuan ID: <?= $key['id'] ?>? </h5>
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
												<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Tidak</button>
												<button type="submit" class="btn btn-success btn-simple">Update</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
						<!--    end large modal update  -->

						<!-- small modal hapus  -->
						<?php foreach ($data as $key) : ?>
							<div class="modal fade" id="hapusPengajuan<?= $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-small ">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
										</div>

										<form method="post" action="<?= base_url(); ?>janji/hapusPengajuan/<?= $key['id']; ?>">
											<div class="modal-body text-center">
												<h5>Apakah anda yakin untuk menghapus pengajuan ini? </h5>
											</div>
											<div class="modal-footer text-center">
												<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Tidak</button>
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
							<div class="modal fade" id="lihatFile<?= $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
							<div class="modal fade" id="lihatfile<?= $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-notice">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
											<h5 class="modal-title" id="fileLampiran">File ID: <?= $key['id'] ?></h5>
										</div>
										<div class="modal-body">
											<div class="instruction">
												<div class="row">
													<div class="col-md-12">
														<img class="img-fluid" style="max-height:500px;" src="<?= base_url('uploads/berkas/') ?>/<?= $key['file'] ?>">
													</div>

												</div>
											</div>
											
                                            <div class="mt-2">
                                                 <a href="<?= base_url('/uploads/berkas/') ?>/<?= $key['file'] ?>" class="btn btn-success btn-round" download>Download</a>
						        	        </div>
										</div>
										<div class="modal-footer text-center">
											<button type="button" class="btn btn-danger btn-round" data-dismiss="modal">Tutup</button>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
						<!-- end notice modal -->
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