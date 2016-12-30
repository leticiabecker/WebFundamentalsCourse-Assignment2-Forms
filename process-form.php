<!DOCTYPE html>
<html lang="en-ca">
	<head>
		<meta charset="utf-8" />
		<title>Printer Purchased | The Tech World</title>
		<!-- Styles -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/styles.css" />
		<!-- Icons -->
		<link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
		<link rel="manifest" href="images/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
	</head>
	<body>
		<header role="banner">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Logo -->
						<a class="navbar-brand" href="#"><img src="images/tech-world-logo.png" title="The Tech World" alt="The Tech World Logo" id="logo" class="img-responsive" /></a>
					</div>
					<!-- Menu navigation -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="javascript:void(0)">TOP 10 Technological Inventions</a></li>
							<li><a href="javascript:void(0)">Order Online</a></li>
							<li><a href="javascript:void(0)">Contact</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>
		<main class="container">
			<!-- Everything about the printing press-->
			<div class="row">
			<!-- The <h1> is the title of the page -->
				<section class="col-md-8">
					<h1>Printer Purchased</h1>
					<?php
						$product = $_POST['product'];
						$color = $_POST['color'];
						$quantity = $_POST['quantity'];
						$fname = $_POST['fname'];
						$lname = $_POST['lname'];
						$address = $_POST['address'];
						$phone = $_POST['phone'];
						$email = $_POST['email'];
						$cctype = $_POST['cctype'];
						$ccnumber = $_POST['ccnumber'];
						$ccexpyear = $_POST['ccexpyear'];
						$ccexpmonth = $_POST['ccexpmonth'];
						$moreinfo[] = $_POST['moreinfo[]'];
						echo('<p>Thank You, '.$fname.' '.$lname.', we received your order.</p>');
					?>
				</section>
			</div>
		</main>
		<footer class="footer">
			<!-- This is the footer navigation, which contains important complementary information. -->
			<nav class="footer-nav navbar navbar-default">
				<p class="navbar-text"><small>&copy; 2016 The Tech World</small></p>
				<div class="container">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="javascript:void(0)">Terms of Use</a></li>
						<li><a href="javascript:void(0)">Privacy Policy</a></li>
						<li><a href="javascript:void(0)">Support</a></li>
					</ul>
				</div>
			</nav>
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>
