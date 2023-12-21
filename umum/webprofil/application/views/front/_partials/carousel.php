
<div class="main-banner header-text">
  <div class="container-fluid">
    <div class="owl-banner owl-carousel">
      <?php foreach ($meta['articles'] as $article) : ?>
        <div class="item">
          <img src=<?= base_url("upload/thumbnail/$article->thumbnail") ?> style="width: 100%; height: 337px; object-fit: cover;"alt="">
          <div class="item-content">
            <div class="main-content">
              <div class="meta-category">
                <!-- <span>Fashion</span> -->
              </div>
              <a href="<?= site_url('article/'.$article->slug) ?>"><h4><?= $article->title ? html_escape($article->title) : "No Title" ?></h4></a>
              <ul class="post-info">
                <!-- <li><a href="#">Admin</a></li>
                <li><a href="#">May 12, 2020</a></li>
                <li><a href="#">12 Comments</a></li> -->
              </ul>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>



