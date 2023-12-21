<div class="content">
    <div class="container-fluid">

        <div class="row">
            <!-- <div class="col-md-8">
                <canvas id="myCharts"></canvas>
            </div> -->
            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header" data-header-animation="true">
                        <!-- <div class="ct-chart" id="websiteViewsChart"></div> -->
                        <canvas id="myCharts"></canvas>
                        <!-- <canvas id="myChart" width="400" height="300"></canvas> -->
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Daftar Janji Temu Masuk</h4>
                        <div class="card-actions">
                            <!-- <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button> -->
                            <button type="button" class="btn btn-info btn-simple" rel="tooltip" data-placement="bottom" title="Refresh">
                                <!-- <i class="material-icons">refresh</i> -->
                            </button>
                            <!-- <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="Change Date">
                                <i class="material-icons">edit</i>
                            </button> -->
                        </div>
                        <!-- <h4 class="card-title">Website Views</h4> -->
                        <p class="category">Janji Masuk Dalam Bulan</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> Terakhir tanggal <?= $sm[0]["tanggal_janji_masuk"]; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header" data-header-animation="true">
                        <!-- <div class="ct-chart" id="dailySalesChart"></div> -->
                        <canvas id="myCharts1"></canvas>
                    </div>
                    <div class="card-content">
                        <div class="card-actions">
                            <!-- <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button> -->
                            <button type="button" class="btn btn-info btn-simple" rel="tooltip" data-placement="bottom" title="Refresh">
                                <!-- <i class="material-icons">refresh</i> -->
                            </button>
                            <!-- <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="Change Date">
                                <i class="material-icons">edit</i>
                            </button> -->
                        </div>
                        <h4 class="card-title">Daftar Janji Temu Keluar</h4>
                        <p class="category">
                            <span class="text-success"></span> Janji Keluar Dalam Bulan
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> Terakhir tanggal <?= $sk[0]["tanggal_janji_keluar"]; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header" data-header-animation="true">
                        <!-- <div class="ct-chart" id="completedTasksChart"></div> -->
                        <canvas id="myCharts2"></canvas>
                    </div>
                    <div class="card-content">
                        <div class="card-actions">
                            <!-- <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button> -->
                            <button type="button" class="btn btn-info btn-simple" rel="tooltip" data-placement="bottom" title="Refresh">
                                <!-- <i class="material-icons">refresh</i> -->
                            </button>
                            <!-- <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="Change Date">
                                <i class="material-icons">edit</i>
                            </button> -->
                        </div>
                        <h4 class="card-title">Keterangan Janji Temu</h4>
                        <p class="category">Keterangan Janji Dalam Bulan</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> Terakhir tanggal <?= $sket[0]["tanggal_janji_keterangan"]; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="orange">
                        <i class="material-icons">mark_email_read</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Janji Temu Masuk</p>
                        <h3 class="card-title"><?= $this->db->get('janji_masuk')->num_rows(); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-simple">info</i>
                            Jumlah Janji Temu Masuk
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="rose">
                        <i class="material-icons">mark_email_unread</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Janji Temu Keluar</p>
                        <h3 class="card-title"><?= $this->db->get('janji_keluar')->num_rows(); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">info</i> Jumlah Janji Temu Keluar
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="green">
                        <i class="material-icons">mail</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Keterangan Janji Temu</p>
                        <h3 class="card-title"><?= $this->db->get('janji_keterangan')->num_rows(); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">info</i> Jumlah Keterangan Janji Temu
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="blue">
                        <i class="fa-solid fa-user-doctor"></i>
                    </div>
                    <div class="card-content">
                        <p class="category">Dokter</p>
                        <h3 class="card-title"><?= $this->db->get('pegawai')->num_rows(); ?></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">info</i> Jumlah Dokter
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>