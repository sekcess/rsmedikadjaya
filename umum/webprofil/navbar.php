<!-- <nav class="navbar">
	<a href="<?= site_url() ?>">Home</a>
	<a href="<?= site_url('article') ?>">Article</a>
	<a href="<?= site_url('page/about') ?>">About</a>
	<a href="<?= site_url('page/contact') ?>">Contact</a>
	<a href="<?= site_url('auth/login') ?>" style="margin-left:auto">Login</a>
</nav> -->
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Website Desa Kuala Dua</h2>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row justify-content-between">
				<div class="col">
					<a class="navbar-brand" href="<?= site_url() ?>">Logo <span>Kuala Dua</span></a>
				</div>
				<div class="col d-flex justify-content-end">
					<div class="social-media">
		    		<p class="mb-0 d-flex">
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
		    		</p>
	        </div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
				<form action="<?= site_url('page/search') ?>" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="search" name="keyword" class="form-control pl-3" placeholder="Search" value="">
            <button type="submit" placeholder="" value="" class="form-control search"><span class="fa fa-search"></span></button>
          </div>
          
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item <?php if($meta['title'] == 'Kuala Dua') { echo "active"; } ?>"><a href="<?= site_url() ?>" class="nav-link">Home</a></li>
	        	<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="#">Profil Wilayah Desa</a>
                <a class="dropdown-item" href="#">Sejarah Desa</a>              
              </div>
            </li>
	        	<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pemerintahan</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="#">Visi Dan Misi</a>
                <a class="dropdown-item" href="#">Pemerintah Desa</a>              
              </div>
            </li>
            <li class="nav-item"><a href="#" class="nav-link">Lemmas</a></li>
	        	<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Data</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                
                <a class="dropdown-item" href="#">Data Wilayah Administratif</a>
                <a class="dropdown-item" href="#">Data Pendidikan Dalam KK</a>
                <a class="dropdown-item" href="#">Data Pendidikan Ditempuh</a>
                <a class="dropdown-item" href="#">Data Pekerjaan</a>
                <a class="dropdown-item" href="#">Data Agama</a>
                <a class="dropdown-item" href="#">Data Jenis Kelamin</a>
                
              </div>
            </li>
	        	
            <li class="nav-item"><a href="<?= site_url('auth/index') ?>" class="nav-link">Admin</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

	</section>



<!-- <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded" aria-label="Twelfth navbar example">
      
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= site_url() ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url('article') ?>">Article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url('page/about') ?>">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url('page/contact') ?>">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url('auth/login') ?>">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown10">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>
</div> -->




<!-- <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Offcanvas navbar</a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= site_url() ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('article') ?>">Article</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('page/about') ?>">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('page/contact') ?>">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('auth/login') ?>">Login</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Settings</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> -->

