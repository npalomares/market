<?php 
	require_once('db.php');
?>

<!doctype html>
<html lang="en">
<head>
	<title>Market</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/custom.js"></script>
</head>
<body class="home-page">

<?php include('includes/header.php'); ?>


	<div class="wrapper">
		
		<!-- Slideshow section that may be included later -->
		<section class="slideshow">
			<div class="container">
				<img src="http://placehold.it/1170x300&text=Dis+Jus+Placeholder" class="img-responsive" />
			</div>
		</section><!-- close slideshow -->

	
		<!-- Main Section of content - MEAT -->
		<main class="main" role="main">
			<div class="row clearfix">
				<section class="content col-sm-8">		
					<h2 class="page-title">Intro</h2>
					<p>dLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
					</p>
					<p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
				</section><!-- close content -->
				

				<?php include('includes/aside.php'); ?>
			</div>
		</main>

	</div><!-- close wrapper -->



	<?php include('includes/footer.php'); ?>


</body>
</html>