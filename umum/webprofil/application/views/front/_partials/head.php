<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Hugo 0.84.0">
<title><?= isset($meta['title']) ? $meta['title'] : 'kualadua.com' ?></title>

<link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/icon/Lambang_Kabupaten_Kubu_Raya.png">

<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url('assets/front/css/bootstrap.min.css') ?>" />

<link rel="stylesheet" href="<?= base_url('assets/front/css/fontawesome.css') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/front/css/tmp.css') ?>" />

<link rel="stylesheet" href="<?= base_url('assets/front/css/owl.css') ?>" />


<link rel="stylesheet" href="<?= base_url('assets/front/css/navbar/nav.css') ?>" />
<!-- <link rel="stylesheet" href="<?= base_url('assets/front/css/form/form.css') ?>" /> -->
<!-- <script src="<?= base_url('assets/front/js/highcharts.js') ?>"></script>
<script src="<?= base_url('assets/front/js/exporting.js') ?>"></script>
<script src="<?= base_url('assets/front/js/export-data.js') ?>"></script>
<script src="<?= base_url('assets/front/js/accessibility.js') ?>"></script> -->

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<!-- <script src="../../code/highcharts.js"></script>
<script src="../../code/modules/exporting.js"></script>
<script src="../../code/modules/export-data.js"></script>
<script src="../../code/modules/accessibility.js"></script> -->
<!-- <link rel="stylesheet" href="<?= base_url('assets/front/css/font-awesome.min.css') ?>" /> -->

<script>
	window.onload = function() {

		var chart = new CanvasJS.Chart("chartContainers", {
			animationEnabled: true,
			theme: "light2", // "light1", "light2", "dark1", "dark2"
			title: {
				text: "Jumlah Penduduk"
			},
			axisY: {
				title: "Jumlah"
			},
			data: [{
				type: "column",
				showInLegend: true,
				legendMarkerColor: "grey",
				// legendText: "",
				dataPoints: [{
						y: 14981,
						label: "Laki-Laki"
					},
					{
						y: 14455,
						label: "Perempuan"
					},
					{
						y: 29436,
						label: "Total"
					}
				]
			}]
		});
		chart.render();

	}
</script>

<!-- <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet"> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet"> -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/"> -->
<!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbars/"> -->