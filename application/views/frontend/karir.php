<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><b><?= $sub_title ?></b></h2>
          <ol>
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li>Lain-Lain</li>
            <li><?= $sub_title ?></li>
          </ol>
        </div>

      </div>
    </section>
<!-- End Breadcrumbs Section -->

<!-- ======= Departments Section ======= -->
<section id="departments" class="departments page-section">
    <div class="container">
        
            
        <div class="text-center section-title">
            <h2 class="section-heading text-uppercase"><?= $sub_title ?></h2>
            <p class="section-subheading text-muted">Dibawah Ini Adalah <b>Lowongan Pekerjaan</b> Yang Tersedia.</p>
        </div>
        
        <div class="text-center col-md-12">
        <table class="table table-striped ">
            <thead class="table-primary">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Posisi</th>
                    <th scope="col">Deadline</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data as $karir) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $karir['posisi']; ?></td>
                    <td><?= $karir['deadline']; ?></td>
                </tr>
                <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
        
    
    </div>
</section><!-- End Departments Section -->
<hr>