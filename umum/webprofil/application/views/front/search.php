<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('front/_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('front/_partials/navbar.php'); ?>

	<div class="container">
		
        
    <?php 
    $url = $this->uri->segment(3);

    if(isset($url)){
        $query = $this->db->where('slug_c', $url)->get('category')->row();
        $title = "tentang " . $query->category_name;
        
    }else{
        $title = '';
    }
    ?>
        <section class="blog-posts grid-system">
        <div class="container">
            <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                <div class="sidebar-heading">
                <h2>Semua Artikel <?php echo $title?></h2>
                </div>
                <div class="row">
                    
                <?php foreach ($search_result as $article) : ?>
                    
                    <?php $content = character_limiter($article->content, 80)?>
                    <div class="col-lg-6">
                    <div class="blog-post">
                        <div class="blog-thumb">
                        <img src=<?= base_url("upload/thumbnail/$article->thumbnail") ?> style="width: 100%; height: 337px; object-fit: cover;" alt="">
                        </div>
                        <div class="down-content">
                        <!-- <span>Lifestyle</span> -->
                        <a href="<?php echo site_url('article/category/').$article->slug_c?>"><span><?= $article->category_name ? html_escape($article->category_name) : "No Title" ?></span></a>
                        <a href="<?= site_url('article/'.$article->slug) ?>"><h4><?= $article->title ? html_escape($article->title) : "No Title" ?></h4></a>
                        <!-- <ul class="post-info">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">May 31, 2020</a></li>
                            <li><a href="#">12 Comments</a></li>
                        </ul> -->
                        <p><?php echo $content?></p>
                        <!-- <div class="post-options">
                            <div class="row">
                            <div class="col-lg-12">
                                <ul class="post-tags">
                                <li><i class="fa fa-tags"></i></li>
                                <li><a href="#">Best Templates</a>,</li>
                                <li><a href="#">TemplateMo</a></li>
                                </ul>
                            </div>
                            </div>
                        </div> -->
                        </div>
                    </div>
                    </div>
                <?php endforeach ?> 
                
                
                <!-- <?=  $this->pagination->create_links(); ?> -->
                
                </div>
                </div>
            </div>
            <?php $this->load->view('front/_partials/sidebar.php'); ?>
            </div>
        </div>
        </section>

        
	</div>
	<?php $this->load->view('front/_partials/footer.php'); ?>
</body>

</html>