﻿<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>影片檢視</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="assets/css/bootstrap-dropdownhover.min.css" type="text/css">
		<link rel="stylesheet" href="assets/font/css/font-awesome.min.css" type="text/css">
		<link rel="stylesheet" href="assets/css/animate.min.css" type="text/css">
		<link rel="stylesheet" href="assets/css/style.css" type="text/css">
		<link href="assets/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="assets/owl-carousel/owl.theme.css" rel="stylesheet">
	</head>
	<body>
		<?php
			include_once('Functions.php');
		?>
		<div id="preloader">
			<div id="loading">
			</div>
		</div>
		<header class="insid-header">
			<div class="top-menu">
				<div id="" class="">
					<div class="container">
						<div class="row">
							<nav class="navbar navbar-inverse navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
										data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">XXX學會</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt="logo"></a>
								</div>
								<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeIn fadeInLeft fadeInUp fadeInRight">
						
									<ul class="nav navbar-nav">
										<li><a href="index.php">首頁</a></li>
										<li><a href="videolist.php">影片列表</a></li>
										<li><a href="contact.php"><span>聯絡我們</span></a></li>
									</ul>
								</div>

							</nav>
						</div>
					</div>
				</div>
			</div>
			<div class="header-title">
				<h1>回覆列表</h1>
			</div>
		</header>
		<section class="courses">
			<div class="container">
				<div class="row">
					<?php
						$ContactList=getContactFiles();
						foreach ($ContactList as $Contact) {
							echo "<div class='col-xs-12 col-sm-6 col-md-4 mb-4'>";
							echo "  <div class='card shadow-sm'>";
							echo "    <div class='card-body'>";
							echo "      <div class='viewed-courses-img mb-3'>";
							echo "        <a href='contactDetail.php?contact=".$Contact."' class='text-decoration-none'>";
							echo "          <h5 class='card-title text-center'>這裡有新的訊息->".$Contact."</h5>";
							echo "        </a>";
							echo "      </div>";
							echo "    </div>";
							echo "  </div>";
							echo "</div>";
						}
						
					?>
				</div>
			</div>
		</section>

		<?php include_once('Footer.php')?>
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/bootstrap-dropdownhover.min.js"></script>
		<script src="assets/js/jquery.easing.min.js"></script>
		<script src="assets/js/jquery.fittext.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script src="assets/js/modernizr.js"></script>
		<script src="assets/js/main.js"></script>
		<script type="text/javascript" src="assets/js/jquery.countTo.js"></script>
		<script src="assets/owl-carousel/owl.carousel.js"></script>
		<script src="assets/js/custom.js"></script>
	</body>
</html>