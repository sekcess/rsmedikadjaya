
	<main class="main">
		

		<div class="container-fluid">
			<div class="d-sm-flex align-items-center justify-content-between mb-3">
				<h1 class="h3 mb-0 text-gray-800"><?= $judul ?></h1>
			</div>
			<?= form_open_multipart('user/new'); ?>
			<!-- <form action="<?php echo site_url("user/new");?>" method="POST" enctype="multipart/form-data"> -->
				<div>
					<label for="title">Title*</label>
				
					<input type="text" name="title" class="form-control" placeholder="Judul artikel" value="<?= set_value('title') ?>" required  maxlength="128"/>
					<div class="invalid-feedback">
						<?= form_error('title') ?>
					</div>
				</div>
				<br>

				<div>
					<label for="content">Konten</label>
					
					<textarea class="form-control" name="content" cols="30" rows="10" placeholder="Tuliskan isi pikiranmu..."><?= set_value('content') ?></textarea>
				</div>

				<br>
				
				<div>
					<label for="category_id">Kategori</label>
					<select class="form-control" aria-label="Default select example" name="category_id" required>
						<option selected>- Pilih -</option>
						<?php foreach($categories as $c){ ?>
							<option value="<?= $c->c_id ?>"><?php echo $c->category_name?></option>
						<?php } ?>
					</select>
					
				</div>
				<br>
				<div>
					<label for="thumbnail">Pilih Gambar thumbnail</label>
					<div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
                            <label class="custom-file-label" for="image">Pilih Gambar</label>
                        </div>
                    </div>
					<!-- <input type="file" name="thumbnail" id="thumbnail" accept="image/png, image/jpeg, image/jpg, image/gif"> -->
				</div>

				<?php if (isset($error)) : ?>
					<div class="invalid-feedback"><?= $error ?></div>
				<?php endif; ?>

				<!-- <div>
					<button type="submit" name="save" class="button button-primary">Upload</button>
				</div> -->

				<div>
					
					<!-- <button type="submit" name="draft" class="btn btn-success mt-3" value="true">Save to Draft</button> -->
					<button type="submit" name="draft" class="btn btn-primary mt-3" value="false">Publish</button>
					<div class="invalid-feedback">
						<?= form_error('draft') ?>
					</div>
				</div>
			</form>

			
		</div>
	</main>


