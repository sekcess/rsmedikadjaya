<style>
    .section_our_solution .row {
  align-items: center;
}

.our_solution_category {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}
.our_solution_category .solution_cards_box {
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.solution_cards_box .solution_card {
  flex: 0 50%;
  background: #f1f7fd;
  box-shadow: 0 2px 4px 0 rgba(136, 144, 195, 0.2),
    0 5px 15px 0 rgba(37, 44, 97, 0.15);
  border-radius: 15px;
  margin: 8px;
  padding: 10px 15px;
  position: relative;
  z-index: 1;
  overflow: hidden;
  min-height: 218px;
  transition: 0.7s;
}

.solution_cards_box .solution_card:hover {
  background: #309df0;
  color: #fff;
  transform: scale(1.1);
  z-index: 9;
}

.solution_cards_box .solution_card:hover::before {
  background: rgb(85 108 214 / 10%);
}

.solution_cards_box .solution_card:hover .solu_title h3,
.solution_cards_box .solution_card:hover .solu_description p {
  color: #fff;
}

.solution_cards_box .solution_card:before {
  content: "";
  position: absolute;
  background: rgb(85 108 214 / 5%);
  width: 170px;
  height: 400px;
  z-index: -1;
  transform: rotate(42deg);
  right: -56px;
  top: -23px;
  border-radius: 35px;
}

.solution_cards_box .solution_card:hover .solu_description button {
  background: #fff !important;
  color: #309df0;
}

.solution_card .so_top_icon {
}

.solution_card .solu_title h3 {
  color: #212121;
  font-size: 1.3rem;
  margin-top: 13px;
  margin-bottom: 20px;
}

.solution_card .solu_description p {
  font-size: 15px;
  margin-bottom: 15px;
}

.solution_card .solu_description button {
  border: 0;
  border-radius: 15px;
  background: linear-gradient(
    140deg,
    #42c3ca 0%,
    #42c3ca 50%,
    #42c3cac7 75%
  ) !important;
  color: #fff;
  font-weight: 500;
  font-size: 1rem;
  padding: 7px 16px;
}

.our_solution_content h1 {
  text-transform: capitalize;
  margin-bottom: 1rem;
  font-size: 2.5rem;
}
.our_solution_content p {
}

.hover_color_bubble {
  position: absolute;
  background: rgb(54 81 207 / 15%);
  width: 100rem;
  height: 100rem;
  left: 0;
  right: 0;
  z-index: -1;
  top: 16rem;
  border-radius: 50%;
  transform: rotate(-36deg);
  left: -18rem;
  transition: 0.7s;
}

.solution_cards_box .solution_card:hover .hover_color_bubble {
  top: 0rem;
}

.solution_cards_box .solution_card .so_top_icon {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background: #fff;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.solution_cards_box .solution_card .so_top_icon img {
  width: 40px;
  height: 50px;
  object-fit: contain;

}

/*start media query*/
@media screen and (min-width: 320px) {
  .sol_card_top_3 {
    position: relative;
    top: 0;
  }

  .our_solution_category {
    width: 100%;
    margin: 0 auto;
  }

  .our_solution_category .solution_cards_box {
    flex: auto;
  }
}
@media only screen and (min-width: 768px) {
  .our_solution_category .solution_cards_box {
    flex: 1;
  }
}
@media only screen and (min-width: 1024px) {
  .sol_card_top_3 {
    position: relative;
    top: -3rem;
  }
  .our_solution_category {
    width: 50%;
    margin: 0 auto;
  }
}
</style>

<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><b><?= $sub_title ?></b></h2>
          <ol>
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li>Dokter</li>
            <li><?= $sub_title ?></li>
          </ol>
        </div>

      </div>
    </section>
<!-- End Breadcrumbs Section -->

<!-- ======= Doctors Section ======= -->
<section id="doctors" class="doctors">
    <div class="container">

        <div class="text-center section-title">
            <h2 class="section-heading text-uppercase"><?= $sub_title ?></h2>
            <p class="section-subheading text-muted"><b><?= $sub_title ?></b> yang Ada di RS Medika Djaya:</p>
        </div>
        
        <div class="row">

            <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($kategoris as $kategori) : ?>
                <div class="solution_cards_box">
                    <div class="solution_card">
                        <div class="hover_color_bubble"></div>
                            <div class="so_top_icon ">
                                <img  src="<?= base_url("uploads/spesialis") ?>/<?= $kategori->logo ?>">
                            </div>
                            
                            <div class="solu_title">
                                
                                <h3><?= $kategori->nama_spesialis ?></h3>
                            </div>
                            
                        <div class="solu_description">
                            <a class="<?php if ($title == 'Dokter') : ?>
                                    <?= 'active'; ?>
						            <?php endif; ?>" href="<?= base_url('dokter/dokter/' . $kategori->id_spesialis); ?>">
                            <button type="button" class="read_more_btn">
                                Lihat Jadwal
                            </button>
						    </a>
                            
                            
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            
        </div>
        
    </div>
</section><!-- End Doctors Section -->