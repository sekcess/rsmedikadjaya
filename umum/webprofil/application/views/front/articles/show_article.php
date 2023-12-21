<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('front/_partials/head.php'); ?>
  <style>
    #myDIV {
      width: 100%;
      padding: 50px 0;
      text-align: center;
      background-color: lightblue;
      display :none;
      margin-top: 20px;
    }
  </style>
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
                      <img src=<?= base_url("upload/thumbnail/$article->thumbnail") ?> alt="">
                    </div>
                    <div class="down-content">
                      <!-- <span>Lifestyle</span> -->
                      <h4><?= $article->title ? html_escape($article->title) : "No Title" ?></h4>
                      <!-- <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">Published at <?= $article->created_at ?></a></li>
                        <li><a href="#">10 Comments</a></li>
                      </ul> -->
                      <p><?= $article->content ?></p>
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
                  <div class="sidebar-item comments">
                    <div class="sidebar-heading">
                      <h2>Komentar</h2>
                    </div>
                    <div class="sidebar-item submit-comment">

                      <div class="content">
                        <?php
                            $content_id =  $article->id;
                            $query = $this->db->query("SELECT * FROM komentar WHERE statuskomen = '0' AND idarticle = '$content_id'");
                            foreach ($query->result() as $utama):
                        ?>
                          <ul>
                            <br>
                            <li>
                              <div class="author-thumb">
                                <img src="<?= base_url('assets/img/profile/default.jpg')?>" alt="">
                              </div>
                              <div class="right-content">
                                
                                <h4><?php echo $utama->nakom?><span>May 16, 2020</span></h4>
                                <p><?php echo $utama->pesan?></p>
                                <!-- <br><button class="replybutton" data-commentbox="<?php echo $utama->idkomen?>" onclick="document.getElementById('<?php echo $utama->idkomen?>').style.display='block'">Balas</button> -->
                                <button class="replybutton" data-commentbox="<?php echo $utama->idkomen?>">Balas</button><br/><br/>

                                <div  id="<?php echo $utama->idkomen?>" style="display:none">
                                  <!-- <textarea cols="35" rows="8"></textarea><br/> -->
                                  <div class="content">
                                    <form method="POST" action="<?php echo site_url('page/balas') ?>">
                                      <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                          <fieldset>
                                            <input type="hidden" value="<?php echo $article->id;?>" name="id">
                                            <input type="hidden" value="<?php echo $utama->idkomen;?>" name="idko">
                                            <input type="hidden" value="<?php echo $article->slug;?>" name="slug">
                                            <input name="nama" type="text" id="nama" placeholder="Your name" required="">
                                          </fieldset>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                          <fieldset>
                                            <input name="email" type="text" id="email" placeholder="Your email" required="">
                                          </fieldset>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                          <fieldset>
                                            <input name="no_hp" type="text" id="no_hp" placeholder="Subject">
                                          </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                          <fieldset>
                                            <textarea name="pesan" rows="6" id="pesan" placeholder="Type your comment" required=""></textarea>
                                          </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                          <fieldset>
                                            <button type="submit" id="form-submit" class="main-button">Submit</button>
                                          </fieldset>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                  
                                </div>
                              </div>
                              
                            </li>
                      
                              <div class="author-thumb">
                                
                              </div>
                              <div class="right-content">
                                
                                
                              </div>
            
                            <!-- <button type="submit" id="form-submit" class="btn btn-block btn-success" onclick="document.getElementById('<?php echo $utama->idkomen?>').style.display='block'">Balas</button> -->
                              <!-- <button onclick="myFunction()">Try it</button> -->
                              
                              
                            
                            <?php
                                  $content_id = $content_id;
                                  $comment_id=$utama->idkomen;
                                  $query = $this->db->query("SELECT * FROM komentar WHERE statuskomen='$comment_id' AND idarticle = '$content_id'");
                                  foreach ($query->result() as $balasan):
                            ?>
                              
                              <li class="replied">
                                <div class="author-thumb">
                                  
                                  <img src="<?= base_url('assets/img/profile/default.jpg')?>" alt="">
                                </div>
                                <div class="right-content">
                                  <h4><?php echo $balasan->nakom?><span>May 20, 2020</span></h4>
                                  <p><?php echo $balasan->pesan?></p>
                                </div>
                              </li>
                            <?php endforeach;?>
                            
                            
                          </ul>
                        <?php endforeach;?>

                      </div>


                    </div>
                    
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item submit-comment">
                    <div class="sidebar-heading">
                      <h2>Your comment</h2>
                    </div>
                    <div class="content">
                      <form method="POST" action="<?php echo site_url('page/komen') ?>">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input type="hidden" value="<?php echo $article->id;?>" name="id">
                              <input type="hidden" value="<?php echo $article->slug;?>" name="slug">
                              <input name="nama" type="text" id="nama" placeholder="Your name" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" id="email" placeholder="Your email" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="no_hp" type="text" id="no_hp" placeholder="Subject">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="pesan" rows="6" id="pesan" placeholder="Type your comment" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-button">Submit</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php $this->load->view('front/_partials/sidebar.php'); ?>
        </div>
      </div>
    </section>
	
	

	<?php $this->load->view('front/_partials/footer.php'); ?>
  <script>
    function myFunction() {
      var x = document.getElementById("<?php echo $utama->idkomen?>");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
  </script>
  <script>
    $(function() {

    $('.replybutton').on('click', function() {
    $('.replybox').hide();
    var commentboxId= $(this).attr('data-commentbox');
    $('#'+commentboxId).toggle();
    });

    $('.cancelbutton').on('click', function() {
    $('.replybox').hide();
    });

    });
  </script> 
</body>

</html>