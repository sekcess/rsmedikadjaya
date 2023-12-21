<main class="main">


		<div class="container-fluid">
			<div class="d-sm-flex align-items-center justify-content-between mb-3">
				<h1 class="h3 mb-0 text-gray-800"><?= $judul ?></h1>
			</div>
            <!-- <div class="toolbar">
				<a href="<?= site_url('user/tempuh') ?>" class="btn btn-primary">Data Pendidikan Ditempuh</a>
				<a href="<?= site_url('user/kerja') ?>" class="btn btn-primary">Data Pekerjaan</a>
				<a href="<?= site_url('user/usia') ?>" class="btn btn-primary">Data Jumlah Penduduk Berdasarkan Usia</a>
				<a href="<?= site_url('user/kel') ?>" class="btn btn-primary">Data Jumlah Penduduk Berdasarkan Jenis Kelamin</a>
				
			</div> -->
            
			
				
				<table id="datatables" class="table">
                    
					<thead>
                        
                        
						<tr>
							<th>No</th>
							<th>NIK</th>
							<th>Nama</th>
							<th>Tempat/Tanggal Lahir</th>
							<th>Jenis Kelamin</th>
							<!-- <th>Alamat</th> -->
							<th>RT/RW</th>
							<!-- <th>Kelurahan</th> -->
							<!-- <th>Kecamatan</th> -->
							<th>Agama</th>
							<th>Status</th>
							<th>Pekerjaan</th>
							<th>Kewarganegaraan</th>
							
							<th class="disabled-sorting text-right">Actions</th>
							
						</tr>
					</thead>
					<tbody>
			
						<?php $no = 1; ?>
						<?php foreach ($data as $key) : ?>
						<!-- <?php if($key['status'] !== '5'):?> -->
							<tr>
								<td><?= $no; ?></td>
								<td><?= $key['nik']; ?></td>
								<td><?= $key['nama_lengkap']; ?></td>
								<td><?= $key['tempat_tgl']; ?></td>
								<td><?= $key['jenis_kelamin']; ?></td>
								<!-- <td><?= $key['alamat']; ?></td> -->
								<td><?= $key['rt_rw']; ?></td>
								<!-- <td><?= $key['kel_desa']; ?></td> -->
								<!-- <td><?= $key['kecamatan']; ?></td> -->
								<td><?= $key['agama']; ?></td>
								<td><?= $key['status']; ?></td>
								<td><?= $key['pekerjaan']; ?></td>
								<td><?= $key['kewarganegaraan']; ?></td>

								<td class="text-right"><button class="btn btn-simple btn-danger btn-icon" data-toggle="modal" data-target="#hapusKomentar<?= $key['id']; ?>"><i class="fa fa-trash"></i></button></td>
                                
                                
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
                
				
						

		</div>
</main>
