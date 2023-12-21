<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Web Kuala Dua: <?= $title ?></title>

  <link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/icon/Lambang_Kabupaten_Kubu_Raya.png">
  <!-- Custom fonts for this template-->
  <link href="<?= base_url() ?>template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Datatables -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
  <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

  <!-- Custom styles for this template-->
  <link href="<?= base_url() ?>template/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Sweet Alert 2 CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>sweetalert/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- LEAFLET -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/icons.css" />
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
  <!-- GEOJSON DATA -->
  <script src="<?= base_url(); ?>leaflet-panel-layers-master/examples/data/bar.js"></script>
  <script src="<?= base_url(); ?>leaflet-panel-layers-master/examples/data/fuel.js"></script>
  <script src="<?= base_url(); ?>leaflet-panel-layers-master/examples/data/parking.js"></script>
  <script src="<?= base_url(); ?>leaflet-panel-layers-master/examples/data/drinking_water.js"></script>

  <!-- ANIMATION MARKER BOUNCE-->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/hosuaby/Leaflet.SmoothMarkerBouncing@v2.0.0/dist/bundle.js" crossorigin="anonymous"></script>

  <!-- LEAFLET-AJAX -->
  <script src="<?= base_url(); ?>assets/js/leaflet.ajax.js"></script>

</head>