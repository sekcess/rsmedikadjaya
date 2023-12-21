<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('front/_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('front/_partials/navbar.php'); ?>

	<div class="container">
		<h1>Thank You!</h1>
		<p>Your message has been sent!</p>
	</div>

	<?php $this->load->view('front/_partials/footer.php'); ?>
	<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
	</script>
</body>

</html>