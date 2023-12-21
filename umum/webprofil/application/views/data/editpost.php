
	<div class="container-fluid">
			<div class="d-sm-flex align-items-center justify-content-between mb-3">
				<h1 class="h3 mb-0 text-gray-800"><?= $judul ?></h1>
			</div>
			<form action="" method="POST">
				<div>
					<label for="title">Title*</label>
					<input type="text" name="title" class="form-control"
					value="<?= form_error('title') ? set_value('title') : $article->title ?>" required  maxlength="128"/>
					<div class="invalid-feedback">
						<?= form_error('title') ?>
					</div>
				</div>

                <br>
				<div>
					<label for="content">Konten</label>
					<textarea class="form-control" name="content" cols="30" rows="10" placeholder="Tuliskan isi pikiranmu..."><?= form_error('content') ? set_value('content') : $article->content ?></textarea>
				</div>

                <br>
				<div>
					<label for="category_id">Kategori</label>
					<select class="form-control" aria-label="Default select example" name="category_id" required>
						<option selected>- Pilih -</option>
						<?php foreach($categories as $c){ ?>
							<option value="<?= $c->c_id ?>" <?php if($c->c_id == $article->category_id){ print ' selected'; }?>><?php echo $c->category_name?></option>
						<?php } ?>
					</select>
					
				</div>

                <br>    
                <div class="form-group row">
                    <div class="col-sm-2">Pilih Gambar thumbnail</div>
                        <div class="col-sm-10">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <?php if(!empty($article->thumbnail)) : ?>
                                        <img src="<?= base_url("upload/thumbnail/$article->thumbnail") ?>" class="img-thumbnail">
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
                                            <label class="custom-file-label" for="image">Pilih Gambar</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
				
				

				<div>
					
					<button type="submit" name="draft" class="btn btn-primary mt-3" value="false">Publish Update</button>
					<div class="invalid-feedback">
						<?= form_error('draft') ?>
					</div>
				</div>
			</form>

			
		</div>