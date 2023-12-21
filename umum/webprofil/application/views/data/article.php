
	<main class="main">


		<div class="container-fluid">
			<div class="d-sm-flex align-items-center justify-content-between mb-3">
				<h1 class="h3 mb-0 text-gray-800"><?= $judul ?></h1>
			</div>
			<div class="toolbar">
				<a href="<?= site_url('user/new') ?>" class="btn btn-primary">+ Tulis Artikel</a>
				
			</div>

			<div class="mt-3" id="map"></div>
			<table id="datatables" class="table" >
				<thead>
					<tr>
						<th>No</th>
						<th>Title</th>
						
						<th style="width: 15%;" class="text-center">Status</th>
						<th style="width: 25%;" class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					<?php foreach($articles as $article): ?>
					<tr>
						<td><?= $no; ?></td>
						<td>
							<div><?= $article->title ?></div>
							<div class="text-gray"><small><?= $article->created_at ?><small></div>
						</td>
						<?php if($article->draft === 'true'): ?>
							<td class="text-center text-gray">Draft</td>
						<?php else: ?>
							<td class="text-center text-green">Published</td>
						<?php endif ?>
						<td>
							<div class="action" style="text-align: center;">
								<a href="<?= site_url('article/'.$article->slug) ?>" class="btn btn-success mt-3" target="_blank" role="button">Preview</a>
								<a href="<?= site_url('user/edit/'.$article->id) ?>" class="btn btn-primary mt-3" role="button">Edit</a>
								<a href="#" 
									data-delete-url="<?= site_url('user/delete/'.$article->id) ?>" 
									class="btn btn-danger mt-3" 
									role="button"
									onclick="deleteConfirm(this)">Delete</a>
								
							</div>
						</td>
					</tr>
					<?php $no++; ?>
					<?php endforeach ?>
				</tbody>
			</table>


		</div>
	</main>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		function deleteConfirm(event){
			Swal.fire({
				title: 'Delete Confirmation!',
				text: 'Are you sure to delete the item?',
				icon: 'warning',
				showCancelButton: true,
				cancelButtonText: 'No',
				confirmButtonText: 'Yes Delete',
				confirmButtonColor: 'red'
			}).then(dialog => {
				if(dialog.isConfirmed){
					window.location.assign(event.dataset.deleteUrl);
				}
			});
		}
	</script>

	<?php if($this->session->flashdata('message')): ?>
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})

			Toast.fire({
				icon: 'success',
				title: '<?= $this->session->flashdata('message') ?>'
			})
		</script>
	<?php endif ?>


