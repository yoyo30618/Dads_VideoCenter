<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>聯絡我們</title>
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
				<h1>聯絡我們</h1>
			</div>
		</header>
		<section class="courses">
			<div class="container">
				<div class="row">		
					<div class="contact-outer">
					<div class="col-xs-12 col-sm-8 col-md-8">
						<div class="our-course">
							<form name="ajax-form" id="contact-form2" action="ContactCheck.php" method="post" class="contact-form">
								<input name="_redirect" id="name2" value="contact.php" type="hidden">
								<div class="col-sm-12 col-md-12"><h2>聯繫我們</h2></div>
								<div class="col-sm-12 col-md-12">
									<input id="name" name="first-name" required="" placeholder="怎麼稱呼您" type="text">
								</div>
								<div class="col-sm-12 col-md-12">
									<input id="email" name="email" required="" placeholder="電子信箱" type="email">
								</div>
								<div class="col-sm-12 col-md-12">
									<input id="subject" name="subject" required="" placeholder="聯絡主題" type="text">
								</div>
								<div class="col-md-12">
									<textarea id="comment" name="comment" cols="45" rows="5" placeholder="請輸入您想傳遞的訊息..." aria-required="true"></textarea>
								</div>
								<div class="col-sm-12 col-md-12 text-center">
									<input name="submit" value="提交" id="send" type="submit">
								</div>
							</form>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<div class="contact-info">
						<h2>CONTACT US</h2>
						<ul>
						<li>
							<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
							<div class="ftext">811, 高雄市 楠梓區 海專路142號</div>
						</li>                     
						<li>
							<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
							<div class="ftext">XXXX@example.COM</div>
						</li>
						<li>
							<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
							<div class="ftext">07 361 7141</div>
						</li>
					</ul>
						</div>				 	
					</div>
					</div>	
				</div>
			</div>
			<!-- /.courses -->
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