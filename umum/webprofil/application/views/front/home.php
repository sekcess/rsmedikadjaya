<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('front/_partials/head.php'); ?>
	<?php $this->load->view('front/_partials/navbar.php'); ?>
	
</head>
<body>

	<div class="container">
		<?php $this->load->view('front/_partials/carousel.php'); ?>

	</div>

	<?php $this->load->view('front/_partials/form.php'); ?>

	</div>
	<section class="blog-posts">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">

					<div class="all-blog-posts">
					<div class="sidebar-heading">
						<h2>Kabar Terkini</h2>
					</div>
					<div class="row">
						<?php foreach ($meta['articles'] as $article) : ?>
							<?php $content = character_limiter($article->content, 200)?>
							<!-- <a href="<?= site_url('article/'.$article->slug) ?>">
							<?= $article->title ? html_escape($article->title) : "No Title" ?>
							</a> -->
							<div class="col-lg-12">
							<div class="blog-post">
								<div class="blog-thumb">
									<img src=<?= base_url("upload/thumbnail/$article->thumbnail") ?> style="width: 100%; height: 337px; object-fit: cover;" alt="">
								</div>
								<div class="down-content">
								<!-- <span>Lifestyle</span> -->
								<a href="<?php echo site_url('article/category/').$article->slug_c?>"><span><?= $article->category_name ? html_escape($article->category_name) : "No Title" ?></span></a>
								<a href="<?= site_url('article/'.$article->slug) ?>">
									<h4>
										<?= $article->title ? html_escape($article->title) : "No Title" ?>
									</h4>
									
								</a>
								
								<!-- <a href="post-details.html"><h4>Best Template Website for HTML CSS</h4></a> -->
								<!-- <ul class="post-info">
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
								</ul> -->
								<p><?php echo $content?></p>
								
								</div>
							</div>
							</div>
						
						<?php endforeach ?>
					
					
						<div class="col-lg-12">
						<div class="main-button">
							<a href="<?= site_url('article') ?>">View All Posts</a>
						</div>
						</div>
					</div>
				</div>
			</div>
			<?php $this->load->view('front/_partials/sidebar.php'); ?>
			</div>
		</div>
	</section>
	

	<!-- <?php $this->load->view('front/_partials/sidebar.php'); ?> -->
	<?php $this->load->view('front/_partials/footer.php'); ?>
</body>

</html>