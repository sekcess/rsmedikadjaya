<div class="col-lg-4">
  <div class="sidebar">
    <div class="row">
      <div class="col-lg-12">
        <div class="sidebar-item recent-posts">
          <div class="sidebar-heading">
            <h2>Peta Desa</h2>
          </div>
          <div class="content">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63836.73415149577!2d109.38359977492145!3d-0.1921466319219427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d4f18dd05e889%3A0xaa34e4338bfcaad4!2sKuala%20Dua%2C%20Kec.%20Sungai%20Raya%2C%20Kabupaten%20Kubu%20Raya%2C%20Kalimantan%20Barat!5e0!3m2!1sid!2sid!4v1653879389313!5m2!1sid!2sid" width="300" height="225" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
     
      <div class="col-lg-12">
        <div class="sidebar-item categories">
          <div class="sidebar-heading">
            <h2>Statistik Penduduk</h2>
          </div>
          <div class="content">
            <div id="chartContainers" style="height: 300px; width: 100%;"></div>
            
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="sidebar-item categories">
          <div class="sidebar-heading">
            
          </div>
          <div class="content">
            
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="sidebar-item categories">
          <div class="sidebar-heading">
            <h2>Aparatur</h2>
          </div>
          <div class="content">
            
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="sidebar-item tags">
          <div class="sidebar-heading">
            <h2>Kategori</h2>
          </div>
          <div class="content">
          <ul>
            <?php foreach($meta['categories'] as $c){ ?>
							
              <li><a href="<?php echo site_url('article/category/').$c->slug_c?>"><?php echo $c->category_name?></a></li>
						<?php } ?>
          </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>