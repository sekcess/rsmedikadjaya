<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('front/_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('front/_partials/navbar.php'); ?>

	<!-- <h1>Halaman untuk baca artikel</h1> -->
	<section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
				
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <!-- <img src=<?= base_url("upload/thumbnail/$article->thumbnail") ?> alt=""> -->
                    </div>
                    <div class="down-content">
                      <!-- <span>Lifestyle</span> -->
                      <h4>Sejarah Desa</h4>
                      <!-- <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">Published at <?= $article->created_at ?></a></li>
                        <li><a href="#">10 Comments</a></li>
                      </ul> -->
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, aliquid excepturi dolor repudiandae non similique porro praesentium accusantium! Ea, labore mollitia vitae ducimus autem velit unde doloribus repudiandae harum quia.</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <!-- <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Best Templates</a>,</li>
                              <li><a href="#">TemplateMo</a></li>
                            </ul> -->
                          </div>
                          <div class="col-6">
                            <!-- <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  
                </div>
                <div class="col-lg-12">
                  
                </div>
              </div>
            </div>
          </div>
          <?php $this->load->view('front/_partials/sidebar.php'); ?>
        </div>
      </div>
    </section>
	
	

	<?php $this->load->view('front/_partials/footer.php'); ?>
</body>

</html>