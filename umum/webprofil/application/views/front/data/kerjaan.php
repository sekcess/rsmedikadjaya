

<!DOCTYPE html>
<html lang="en">

<head>


	<?php $this->load->view('front/_partials/head.php'); ?>
  <style>
    #container {
      height: 400px;
    }

    .highcharts-figure,
    .highcharts-data-table table {
      min-width: 310px;
      max-width: 800px;
      margin: 1em auto;
    }

    #datatable {
      font-family: Verdana, sans-serif;
      border-collapse: collapse;
      border: 1px solid #ebebeb;
      margin: 10px auto;
      text-align: center;
      width: 100%;
      max-width: 500px;
    }

    #datatable caption {
      padding: 1em 0;
      font-size: 1.2em;
      color: #555;
    }

    #datatable th {
      font-weight: 600;
      padding: 0.5em;
    }

    #datatable td,
    #datatable th,
    #datatable caption {
      padding: 0.5em;
    }

    #datatable thead tr,
    #datatable tr:nth-child(even) {
      background: #f8f8f8;
    }

    #datatable tr:hover {
      background: #f1f7ff;
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
                <div id="container"></div>
                  <div class="blog-post">
                    <div class="blog-thumb">
                    
						        
						
                      <!-- <img src=<?= base_url("upload/thumbnail/$article->thumbnail") ?> alt=""> -->
                    </div>
                    <div class="down-content">
                    <figure class="highcharts-figure">
                      <!-- <div id="container"></div> -->
                      <p class="highcharts-description">
                      Sebagian besar penduduk Desa Kuala Dua bekerja pada sektor pertanian secara detail mata pencarian penduduk Desa Kuala Dua adalah sebagai berikut :

                      </p>

                      <table id="datatable">
                        <thead>
                          <tr>
                            
                            <!-- <th>No</th> -->
                            <th>Pekerjaan</th>
                            <th>Jumlah</th>

                           
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($meta['hasil'] as $row) : ?>
				              
                          <tr>
                            <th><?php echo $row['pekerjaan']?></th>
                            <!-- <td></td> -->
                            <td><?php echo $row['COUNT(*)']?></td>
                            
                            
                          </tr>
                        <?php endforeach;?>
                          
                          
                        </tbody>
                      </table>
                    </figure>
                      <!-- <span>Lifestyle</span> -->
                      <!-- <h4><?= $article->title ? html_escape($article->title) : "No Title" ?></h4> -->
                      <!-- <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">Published at <?= $article->created_at ?></a></li>
                        <li><a href="#">10 Comments</a></li>
                      </ul> -->
                      <!-- <p><?= $article->content ?></p> -->
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
                
                
              </div>
            </div>
          </div>
          <?php $this->load->view('front/_partials/sidebar.php'); ?>
        </div>
      </div>
    </section>
	
	

  <script type="text/javascript">
    Highcharts.chart('container', {
      data: {
        table: 'datatable'
      },
      chart: {
        type: 'column'
      },
      title: {
        text: 'Data Pekerjaan Penduduk'
      },
      yAxis: {
        allowDecimals: false,
        title: {
          text: 'Jumlah'
        }
      },
      tooltip: {
        formatter: function () {
          return '<b>' + this.series.name + '</b><br/>' +
            this.point.y + ' ' + this.point.name.toLowerCase();
        }
      }
    });
  </script>
	<?php $this->load->view('front/_partials/footer.php'); ?>
  
</body>

</html>