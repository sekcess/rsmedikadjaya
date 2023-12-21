<main class="main">


		<div class="container-fluid">
			<div class="d-sm-flex align-items-center justify-content-between mb-3">
				<h1 class="h3 mb-0 text-gray-800"><?= $judul ?></h1>
			</div>
			
				
				<table id="datatables" class="table " >
					<thead>
						<tr>
							<th>No</th>
							<th>Pekerjaan</th>
							<th>Jumlah</th>
							
							<th class="disabled-sorting text-right">Actions</th>
							
						</tr>
					</thead>
					<tbody>
			
						<?php $no = 1; ?>
						<?php foreach ($data as $key) : ?>
						<!-- <?php if($key['status'] !== '5'):?> -->
							<tr>
								<td><?= $no; ?></td>
								<!-- <td><?= $key['statuskomen']; ?></td> -->
								<td><?= $key['namapekerjaan']; ?></td>
								<td><?= $key['jumlah']; ?></td>
								<!-- <td><?= $key['no_hp']; ?></td>
								<td><?= $key['email']; ?></td>
								<td><?= $key['pesan']; ?></td>
								<td><?= $key['tanggal']; ?></td> -->
								<td class="text-right"><button class="btn btn-simple btn-danger btn-icon" data-toggle="modal" data-target="#hapusKomentar<?= $key['idkomen']; ?>"><i class="fa fa-trash"></i></button></td>
                                
                                
								<!-- <td><?= $key['nama'] . ' (' . $key['nik'] . ')'; ?></td> -->
								<!-- <td>
									<button class="btn btn-simple btn-info" data-toggle="modal" data-target="#lihatfile<?= $key['idpermohonan']; ?>"><i class="fa fa-eye"></i></button>
								</td>
								<td><?= $status[$key['status']]; ?></td>
								<td class="text-right">
									<button class="btn btn-simple btn-success btn-icon" data-toggle="modal" data-target="#statusPengajuan<?= $key['idpermohonan']; ?>"><i class="fa fa-pencil"></i>Update Status</button>
									<button class="btn btn-simple btn-danger btn-icon" data-toggle="modal" data-target="#hapusPengajuan<?= $key['idpermohonan']; ?>"><i class="fa fa-trash"></i></button>
								</td>
								<td><?= $key['notelepon']; ?></td>
								<?php $content = character_limiter($key['created_at'], 10)?>
								<td><?= $content; ?></td>
								<td><?= $options[$key['jenissurat']]; ?></td> -->
			
							</tr>
							<?php $no++; ?>
						<?php endif; ?>
						<?php endforeach; ?>
					</tbody>
				</table>

                        <?php foreach ($data as $key) : ?>
							<div class="modal fade" id="hapusKomentar<?= $key['idkomen']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-small ">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
										</div>

										<form method="post" action="<?= base_url(); ?>user/hapusKomentar/<?= $key['idkomen']; ?>">
											<div class="modal-body text-center">
												<h5>Apakah anda yakin untuk menghapus Komentar ini? </h5>
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
				
						

		</div>
</main>
