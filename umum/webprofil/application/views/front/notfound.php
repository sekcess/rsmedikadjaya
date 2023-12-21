<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('front/_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('front/_partials/navbar.php'); ?>

	<div class="container">
        <section class="blog-posts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">

                        <div class="all-blog-posts">
                        <!-- <div class="sidebar-heading">
                            <h2>Kabar Terkini</h2>
                        </div> -->
                        <div class="row">
                            <h1>Tidak ada yang ditemukan</h1>
                            <p>Coba dengan kata kunci yang lain</p>
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

