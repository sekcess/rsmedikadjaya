<style>
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
  }

  li {
    float: left;
  }

  li a {
    display: block;
    padding: 8px;
  }

  #map {
    height: 600px;
  }
</style>
<title>WEB GIS KUALA DUA</title>
<link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/icon/Lambang_Kabupaten_Kubu_Raya.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.js"></script>

<!-- LEAFLET -->
<link rel="stylesheet" href="<?= base_url(); ?>leaflet/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
<script src="<?= base_url(); ?>leaflet/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

<!-- VIEWMAP  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.js"></script>
<script src="https://unpkg.com/esri-leaflet@2.1.3/dist/esri-leaflet.js" integrity="sha512-pijLQd2FbV/7+Jwa86Mk3ACxnasfIMzJRrIlVQsuPKPCfUBCDMDUoLiBQRg7dAQY6D1rkmCcR8286hVTn/wlIg==" crossorigin=""></script>
<script src="https://unpkg.com/esri-leaflet-renderers@2.0.6/dist/esri-leaflet-renderers.js" integrity="sha512-mhpdD3igvv7A/84hueuHzV0NIKFHmp2IvWnY5tIdtAHkHF36yySdstEVI11JZCmSY4TCvOkgEoW+zcV/rUfo0A==" crossorigin=""></script>
<script src="<?= base_url(); ?>viewmap/JS/leaflet-providers.js"></script>
<script src="https://cdn.osmbuildings.org/OSMBuildings-Leaflet.js"></script>
<link rel="stylesheet" href="<?= base_url(); ?>viewmap/CSS/leaflet.groupedlayercontrol.min.css">
<script src="<?= base_url(); ?>viewmap/JS/leaflet.groupedlayercontrol.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?= base_url(); ?>viewmap/CSS/Control.MiniMap.css">
<script src="<?= base_url(); ?>viewmap/JS/Control.MiniMap.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>viewmap/JS/leaflet.wms.js"></script>
<link rel="stylesheet" href="<?= base_url(); ?>viewmap/CSS/leaflet-control-credits.css" />
<script type="text/javascript" src="<?= base_url(); ?>viewmap/JS/leaflet-control-credits.js"></script>
<script src="<?= base_url(); ?>viewmap/JS/leaflet-providers.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet.pm@latest/dist/leaflet.pm.css">
<script src="https://unpkg.com/leaflet.pm@latest/dist/leaflet.pm.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet.pm@latest/dist/leaflet.pm.css">
<script src="https://unpkg.com/leaflet.pm@latest/dist/leaflet.pm.min.js"></script>

<!-- PANEL LAYER -->
<link rel="stylesheet" href="<?= base_url(); ?>leaflet-panel-layers-master/src/leaflet-panel-layers.css" />
<script src="<?= base_url(); ?>leaflet-panel-layers-master/src/leaflet-panel-layers.js"></script>

<!-- ANIMATION MARKER BOUNCE-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/hosuaby/Leaflet.SmoothMarkerBouncing@v2.0.0/dist/bundle.js" crossorigin="anonymous"></script>

<!-- LEAFLET-AJAX -->
<script src="<?= base_url(); ?>assets/js/leaflet.ajax.js"></script>

<ul>
  <li><a href="<?php echo base_url('user/rawanlongsor'); ?>" class="btn btn-primary mt-1 ml-1">Home</a></li>
  <li><a href="<?php echo base_url(); ?>user/leafletdrawinghasil3" class="btn btn-primary mt-1 ml-1">Hasil GeoJSON</a></li>

</ul>
<br>
<div id="map"></div>
<div id='result' value=''></div>

<button class="btn btn-success mt-2 ml-1" id="convert"> Tambah GeoJson </button>
<br>

<script>
  var map = new L.Map('map', {
    zoom: 13,
    center: new L.latLng(-0.182298538531561, 109.4320904464776)
  });
  map.addLayer(new L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
      'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11'
  }));

  var defaultBase = L.tileLayer.provider('OpenStreetMap').addTo(map);

  var baseLayers = {
    'OpenStreetMap': defaultBase,
    'Stamen Toner': L.tileLayer.provider('Stamen.TonerLite'),
    'ESRI Imagery': L.tileLayer.provider('Esri.WorldImagery'),
  };

  //add layer switch control
  L.control.groupedLayers(baseLayers).addTo(map);

  //add scale bar to map
  L.control.scale({
    position: 'bottomleft'
  }).addTo(map);

  // Overview mini map
  var Esri_WorldTopoMap = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}', {
    attribution: '&copy; Esri &mdash; Esri, DeLorme, NAVTEQ, TomTom, Intermap, iPC, USGS, FAO, NPS, NRCAN, GeoBase, Kadaster NL, Ordnance Survey, Esri Japan, METI, Esri China (Hong Kong), and the GIS User Community'
  });

  var miniMap = new L.Control.MiniMap(Esri_WorldTopoMap, {
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

        $('#result').html(' Tunggu');
      },
      success: function(data) {
        $('#result').html(' Data gambar berhasil ditambahkan!');
      }
    });
  }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>