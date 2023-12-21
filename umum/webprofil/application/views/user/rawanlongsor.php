<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-3">
        <h1 class="h3 mb-0 text-gray-800"><?= $judul ?></h1>
    </div>

    <style>
        #map {
            height: 550px;
        }
    </style>

    <div class="dropdown">
        <a href="<?php echo base_url(); ?>user/index_map3" class="btn btn-primary">Edit</a>
        <a href="<?php echo base_url(); ?>user/leafletdrawinghasil3" class="btn btn-primary ml-1">Hasil GeoJSON</a>

        <button class="btn btn-primary dropdown-toggle ml-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
            Tampilan Map
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="<?php echo base_url('user/vertex'); ?>">Administrasi</a>
            <a class="dropdown-item" href="<?php echo base_url('user/rawanbanjir'); ?>">Rawan Banjir</a>
        </div>

        <a href="" style="float: right;" class="btn btn-warning" data-toggle="modal" data-target="#newMapModal">
            <i class="fa fa-download" aria-hidden="true"></i>
            <span class="ml-1">Download Map</span>
        </a>
    </div>

    <div class="mt-3" id="map"></div>
    <div id='result' value=''></div>

    <button class="btn btn-success mt-3" id="convert"> Simpan GeoJson </button>
    <br>

    <!-- Modal Download Map -->
    <div class="modal fade" id="newMapModal" tabindex="-1" aria-labelledby="newMenuMapLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="newMapModalLabel"><b>PETA RAWAN LONGSOR DESA KUALA DUA KECAMATAN SUNGAI RAYA KABUPATEN KUBU RAYA PROVINSI KALIMANTAN BARAT</b></h5>
                    <button type="button" class="fa fa-times" data-dismiss="modal" aria-label="Close"></button>
                </div>

                <form>
                    <div class="modal-body text-center">
                        <img style="height: 600px; width: 780px;" src="<?= base_url(); ?>assets/img/map/PetaRawanLongsorKualaDuaFIX.jpg">
                    </div>
                    <div class="modal-footer" style="float: left;">
                        <a class="btn btn-warning" href="<?= base_url('user/download3'); ?>">
                            <i class="fa fa-download" aria-hidden="true"></i>
                            <span class="ml-1">Download Map</span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        var peta1 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });

        var peta2 = L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/satellite-v9'
            });

        var peta3 = L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11'
            });

        var peta4 = L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/dark-v10'
            });

        var map = new L.Map('map', {
            zoom: 13,
            center: [-0.182298538531561, 109.4320904464776],
            layers: [peta1]
        });


        var baseMaps = {
            "OpenStreetMap": peta1,
            "Satellite": peta2,
            "Grayscale": peta3,
            "Dark": peta4,
        };
        //add layer switch control
        L.control.groupedLayers(baseMaps).addTo(map);

        //add scale bar to map
        L.control.scale({
            position: 'bottomleft'
        }).addTo(map);

        // Overview mini map
        var OpenStreetMap = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11'
        });

        var miniMap = new L.Control.MiniMap(OpenStreetMap, {
            toggleDisplay: true,
            minimized: true,
            position: 'bottomleft'
        }).addTo(map);

        // GEOJSON
        var myStyle = {
            "color": "yellow",
            "weight": 4,
            "opacity": 1,
            "fillOpacity": 0.3,
        };

        var myStyle2 = {
            "color": "green",
            "weight": 3,
            "opacity": 1,
            "fillOpacity": 0.3,
        };

        var myStyle3 = {
            "color": "black",
            "weight": 1,
            "opacity": 1
        };

        function popUp(f, l) {
            var out = [];
            if (f.properties) {
                // for (key in f.properties) {
                //     console.log(key);


                // }
                out.push("<b>SEDANG (LONGSOR)</b>");

                l.bindPopup(out.join("<br />"));
            }
        }

        function popUp2(f, l) {
            var out = [];
            if (f.properties) {
                // for (key in f.properties) {
                //     console.log(key);


                // }
                out.push("<b>AMAN (LONGSOR)</b>");

                l.bindPopup(out.join("<br />"));
            }
        }

        function popUp3(f, l) {
            var out = [];
            if (f.properties) {
                // for (key in f.properties) {
                //     console.log(key);


                // }
                out.push(f.properties['REMARK']);

                l.bindPopup(out.join("<br />"));
            }
        }

        function popUp4(f, l) {
            var out = [];
            if (f.properties) {
                // for (key in f.properties) {
                //     console.log(key);


                // }
                out.push("<b>Lokasi: </b>" + f.properties['NAMOBJ']);

                l.bindPopup(out.join("<br />"))
                    .setBouncingOptions({
                        bounceHeight: 30, // height of the bouncing
                        bounceSpeed: 64, // bouncing speed coefficient
                        exclusive: false, // if this marker is bouncing all others must stop
                    })
                    .on('click', function() {
                        this.toggleBouncing();
                    });
            }
        }

        var jsonTest = new L.GeoJSON.AJAX(["<?= base_url(); ?>assets/geojson/RL2.geojson"], {
            onEachFeature: popUp,
            style: myStyle

        }).addTo(map);

        var jsonTest = new L.GeoJSON.AJAX(["<?= base_url(); ?>assets/geojson/RL1.geojson"], {
            onEachFeature: popUp2,
            style: myStyle2

        }).addTo(map);

        var jsonTest = new L.GeoJSON.AJAX(["<?= base_url(); ?>assets/geojson/JalanKualaDua.geojson"], {
            onEachFeature: popUp3,
            style: myStyle3

        }).addTo(map);

        var jsonTest = new L.GeoJSON.AJAX(["<?= base_url(); ?>assets/geojson/KantorDesaKualDua.geojson"], {
            onEachFeature: popUp4,
            style: myStyle

        }).addTo(map);

        // FeatureGroup is to store editable layers
        var drawnItems = new L.FeatureGroup();
        map.addLayer(drawnItems);
        var drawControl = new L.Control.Draw({
            edit: {
                featureGroup: drawnItems
            }
        });
        map.addControl(drawControl);


        map.on('draw:created', function(event) {
            var layer = event.layer,
                feature = layer.feature = layer.feature || {};

            feature.type = feature.type || "Feature";
            var props = feature.properties = feature.properties || {};
            drawnItems.addLayer(layer);

        });


        document.getElementById("convert").addEventListener("click", function() {
            var hasil = $('#result').html(JSON.stringify(drawnItems.toGeoJSON()));
            var cookieValue = document.getElementById('result').innerHTML;
            if (cookieValue === '{"type":"FeatureCollection","features":[]}') {
                alert("Empty...!");
            } else {
                ajax_simpan();
            }
        });

        function ajax_simpan() {
            var url = "<?php echo site_url('user/tambahleaflet3'); ?>";
            var hasil = (JSON.stringify(drawnItems.toGeoJSON(), null, null));
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    result: hasil
                },
                beforeSend: function(s) {

                    $('#result').html('tunggu');
                },
                success: function(data) {
                    $('#result').html('berhasil');
                }
            });
        }
    </script>


</div>