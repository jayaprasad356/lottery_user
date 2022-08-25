<?php session_start();
include_once('includes/crud.php');
$db = new Database();
$db->connect();
$db->sql("SET NAMES 'utf8'");
include_once('includes/custom-functions.php');
$fn = new custom_functions;
?>
<!doctype html>
<html class="no-js" lang="zxx">



<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>SINGAPORE LOTTARY</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <meta property="og:title" content="Akshar Blog" />
    <meta property="og:image" content="SINGAPORE LOTTARY.png" />
    <!--<meta property="og:url" content="https://new.easytodb.com/Akshar/blog1.php" />-->
    <meta property="og:description" content="Akshar Blog" />
    <!--<meta property="og:url" content="https://<?php echo $w8698d0a787db9c92;?>" />-->
	 <!--Favicons -->
	<link rel="shortcut icon" href="SINGAPORE LOTTARY.png">
	<!--<link rel="apple-touch-icon" href="SINGAPORE LOTTARY.png">-->


	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="style.css">

	<!-- Cusom css -->
	<link rel="stylesheet" href="css/custom.css">

	<!-- Modernizer js -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
	 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="index.php">
								<img src="SINGAPORE LOTTARY.png" alt="logo images" style= height: 70px;>
							</a>
						</div>
					</div>
					<div class="col-lg-8 col-md-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start flex-column flex-lg-row">
								<li class="drop with--one--item"><a href="index.php">Home Page</a></li>
								<li class="drop with--one--item"><a href="today_result.php">Today Result</a></li>
								<li class="drop with--one--item"><a href="old_result.php">Old Result</a></li>
								<li class="drop with--one--item"><a href="live_draw.php">Live Draw</a></li>
								<li class="drop with--one--item"><a href="about_us.php">About Us</a></li>
								<li class="drop with--one--item"><a href="claim_form.php">Claim Form</a></li>
								<li class="drop with--one--item"><a href="scheme.php">Schemes</a></li>
								<li class="drop with--one--item"><a href="https://www.youtube.com/channel/UCX4HyTqtrigR7jsfPmE7S1Q">Play channel</a></li>
								<!--<li class="drop"><a href="e-book.php">E Book</a></li>-->
								<!--<li class="drop"><a href="e-magazine.php">E Magazine</a></li>-->
								<!--<li class="drop"><a href="hardcopy.php">Hard Copy</a></li>-->
								<!--<li class="drop"><a href="blog.php">Blog</a></li>-->
								<li class="drop"><a href="contact.php">Contact Us</a></li>
							</ul>
						</nav>	 
					</div>
				</div>
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="index.php">Home Page</a</li>
								<li><a href="today_result.php">Today Result</a</li>
								<li><a href="old_result.php">Old Result</a></li>
								<li><a href="live_draw.php">Live Draw</a></li>
								<li><a href="about_us.php">About Us</a></li>
								<li><a href="claim_form.php">Claim Form</a></li>
                                <li><a href="scheme.php">Schemes</a></li>
                                <li class="drop with--one--item"><a href="https://www.youtube.com/channel/UCX4HyTqtrigR7jsfPmE7S1Q">Play channel</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
							</ul>
						</nav>
					</div>
				</div>
				 <!--End Mobile Menu -->
				<div class="mobile-menu d-block d-lg-none">
				</div>
				<!-- Mobile Menu -->
			</div>
		</header>
				<!-- Start Search Popup -->
		<div class="brown--color box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search results here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->