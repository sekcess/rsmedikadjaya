<!DOCTYPE html>
<html>

<head>
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
      background-color: #dddddd;
    }
  </style>
  <title>WEB GIS KUALA DUA</title>
  <link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/icon/Lambang_Kabupaten_Kubu_Raya.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>

<body>

  <ul>
    <li><a href="<?php echo base_url('user/rawanbanjir'); ?>" class="btn btn-primary ml-1 mt-1">Home</a></li>
    <li><a href="<?php echo base_url('user/leafletdrawinghasil2'); ?>" class="btn btn-primary mt-1 ml-1">Hasil GeoJSON</a></li>

  </ul>
  <hr>
  <a href="<?php echo base_url('user/leafletdrawing2'); ?>" class="btn btn-success ml-1">Tambah Geojson</a>
  <hr>
  <table class="row ml-2" border="1" cellspacing="1" cellpadding="1" width="99%">
    <tr>
      <td>GeoJson</td>
      <td>Action</td>
    </tr>
    <?php foreach ($tb_peta2 as $key) { ?>
      <tr>
        <td><?php echo $key->GeoJson ?></td>
        <td width="100px" align="center">
          <a href="leafletdrawingedit2?Id=<?php echo $key->Id; ?>" class="button">Edit</a>
          <a href="leafletdrawingDelete2?Id=<?php echo $key->Id; ?>" class="button">Delete</a>
        </td>
      </tr>
    <?php } ?>
  </table>
</body>

</html>