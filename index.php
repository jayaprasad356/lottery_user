<?php session_start();
include_once('includes/crud.php');
$db = new Database();
$db->connect();
$db->sql("SET NAMES 'utf8'");
include_once('includes/custom-functions.php');
$fn = new custom_functions;

if (isset($_POST['btnAdd'])) {
	$name = $db->escapeString($fn->xss_clean($_POST['name']));
	$email = $db->escapeString($fn->xss_clean($_POST['email']));
	$message = $db->escapeString($fn->xss_clean($_POST['message']));
	$sql_query = "INSERT INTO contact_us (name,email,message)VALUES('$name','$email','$message')";
	$db->sql($sql_query);
	$result = $db->getResult();
	if (!empty($result)) {
		$result = 0;
	} else {
		$result = 1;
	}

	if ($result == 1) {
		echo '<script>alert("Send Details Successfully")</script>';
	} else {
		echo '<script>alert("Failed")</script>';
	}

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/bootstrap-popover-x.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Singapore - Online Lotto & Lottery HTML Template</title>


</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->

    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <header class="top-header">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-area-inner">
                            <a href="index.php" class="logo">
                            <?php 
                                $sql="SELECT * FROM `company`";
                                $db->sql($sql);
                                $result = $db->getResult();
                                ?>
                                <img src="http://admin.andamanlottery.com/<?php echo $result[0]['image'] ?>"  height="50px" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-section">
            <div class="container">
                <div class="header-wrapper">
                    <ul class="menu">
                        <li>
                            <a class="nav-link scrollto" href="index.php" class="active">Home</a>
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="#livedraw">Live Draw</a>
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="#checkresults">Results</a>
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="#contact">Contact Us</a>
                        </li>
                    </ul>
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Register Area -->
    <div class="modal fade log-reg-modal-wrapper" id="registerModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                    <div class="log-reg-inner">
                        <h2 class="title">
                            Create an Account
                        </h2>
                        <div class="main-content">
                            <form action="#">
                                <div class="form-group">
                                    <label>Your Email</label>
                                    <input type="email" class="my-form-control" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="my-form-control" placeholder="Enter Your Password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="text" class="my-form-control"
                                        placeholder="Enter Your Confirm Password">
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">
                                        I agree to the <a href="#">Terms, Privacy Policy and Fees</a>
                                    </label>
                                </div>
                                <div class="button-wrapper">
                                    <button type="submit" class="custom-button2">Register Now</button>
                                    <p class="or-signup">
                                        Already have an account? <a href="#" data-toggle="modal"
                                            data-target="#loginModal">
                                            Login
                                        </a>
                                    </p>
                                </div>
                                <div class="or">
                                    <p>OR</p>
                                </div>
                                <div class="socials">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-google"></i>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Area -->

    <!-- Login Area -->
    <div class="modal fade log-reg-modal-wrapper log" id="loginModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                    <div class="log-reg-inner">
                        <h2 class="title">
                            Welcome to <?php echo $result[0]['name'] ?>
                        </h2>
                        <div class="main-content">
                            <form action="#">
                                <div class="form-group">
                                    <label>Your Email</label>
                                    <input type="email" class="my-form-control" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="my-form-control" placeholder="Enter Your Password">
                                </div>
                                <p class="f-pass">
                                    Forgot your password? <a href="#">recover password</a>
                                </p>
                                <div class="button-wrapper">
                                    <button type="submit" class="custom-button2">Sign In</button>
                                </div>
                                <div class="or log">
                                    <p>OR</p>
                                </div>
                                <div class="or-content">
                                    <p>Sign up with your email</p>
                                    <a href="#" class="or-btn"><img src="assets/images/google.png" alt=""> Sign Up with
                                        Google</a>
                                    <p class="or-signup">
                                        Don't have an account? <a href="#" data-toggle="modal"
                                            data-target="#registerModal">
                                            Sign up here
                                        </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Area -->
    <!-- ==========Header-Section========== -->

    <!-- ==========Banner-Section========== -->
    <section class="banner-section" id="livedraw">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <?php 
						  $sql="SELECT * FROM `about_us`";
						  $db->sql($sql);
						  $res = $db->getResult();
                          echo $res[0]['description'];
						  ?>
                    <h1 class="banner-title">
                        Mega Jackpot
                    </h1>
                    <marquee attribute_name = "attribute_value"....more attributes>
                          <?php 
						  $sql="SELECT * FROM `marque`";
						  $db->sql($sql);
						  $res = $db->getResult();
						  ?>
                          <span class="text"><?=$res[0]['home_marque']?></span>
                        </marquee>
                    
                    <a target="_blank" href="https://www.youtube.com/channel/UCX4HyTqtrigR7jsfPmE7S1Q" class="custom-button2">Play Channel</a>

                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Draw-Section========== -->
    <section class="draw-section">
        <div class="container">
            <div class="row">
                <?php 
                    $sql="SELECT * FROM `live_draw`";
                    $db->sql($sql);
                    $res = $db->getResult();
                    foreach ($res as $row) {?>
                <div class="col-lg-12">
                    <div class="draw-slider owl-carousel">
                        <div class="item">
                            <div class="single-draw">
                                <!-- <img class="overlay" src="assets/images/overlaymask.png" alt=""> -->
                                <!-- <div class="icon">
                                    <img src="assets/images/d2.png" alt="">
                                </div> -->
                                <h4>
                                <?php echo $row['name'];?>
                                </h4>
                                <!-- <a href="#" class="custom-button1">Play Now</a> -->
                                <div class="next-draw">
                                    <span class="text">Next Draw :</span>
                                    <div class="time">
                                        <img src="assets/images/time.png" alt="">
                                        <h6><?php echo $row['date'] .' - '. $row['time']; ?></h6>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- ==========Feature-Section========== -->

    <!-- ==========Features-Section========== -->
    <section class="features-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-feature">
                        <div class="icon">
                            <img src="assets/images/f1.png" alt="">
                        </div>
                        <h4 class="title">Trust</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-feature">
                        <div class="icon">
                            <img src="assets/images/f2.png" alt="">
                        </div>
                        <h4 class="title">Safe & Security</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-feature">
                        <div class="icon">
                            <img src="assets/images/f3.png" alt="">
                        </div>
                        <h4 class="title">Zero commission</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-feature">
                        <div class="icon">
                            <img src="assets/images/f4.png" alt="">
                        </div>
                        <h4 class="title">24/7 Support</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Features-Section========== -->

    <section id="checkresults" class="check-number">
        <img class="img-left" src="assets/images/check-num-left.png" alt="">
        <img class="img-right" src="assets/images/check-num-right.png" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="content">
                        <div class="section-header">

                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="content">
                        <div class="section-header">
                            <h2 class="title">
                                Check your results
                            </h2>
                            <p class="text">
                                Are you holding on to a winning ticket? Here's an
                                easy way to find out.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="check-box">
                        <h4 class="title">Pick a Date</h4>
                        <div class="form-area">
                            <input id="input_date" type="date" onchange="getData(this.value, 'respose_result')">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">

                </div>
            </div>
        </div>
    </section>
    <!-- ==========Lottery-Result-Section========== -->
    <section class="lottery-result">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="result-box">
                        <div class="result-list" id="respose_result">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Lottery-Result-Section========== -->

    <!-- ==========Check-Number-Section========== -->
    <section class="breadcrumb-area">
        <img class="contact" src="assets/images/contact-b-icon.png" alt="">
        <div class="container">
            <div class="content">

            </div>
        </div>
    </section>
    <!-- ==========Check-Number-Section========== -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-7">
                    <div class="contact-box">
                        <h4 class="title">
                            Get In Touch
                        </h4>
                        <form method="post">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input name = "name" type="text" placeholder="Enter Your Name">
                            </div>
                            <div class="form-group">
                                <label>Your Email</label>
                                <input name="email" type="email" placeholder="Enter Your Email ">
                            </div>
                            <div class="form-group last">
                                <label>Your Message</label>
                                <textarea name="message" placeholder="Enter Your Message"></textarea>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">I agree to receive emails,
                                    newsletters and promotional messages</label>
                            </div>
                            	
                            <button type="submit" class="custom-button1" name="btnAdd">Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-area">
                        <div class="faq-block">
                            <h4 class="title">Have questions?</h4>
                            <p>
                                If you have any questions or queries,
                                our helpful support team will be
                                more than happy to assist you.
                            </p>
                            <a href="#">
                                Read F.A.Q <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <div class="contact-info">
                            <div class="single-info">
                                <img src="assets/images/eicom.png" alt="">
                                <div class="content">
                                    <h4>Email Us</h4>
                                    <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="41282f272e0107202f3533206f222e2c">[email&#160;protected]</a></p>
                                </div>
                            </div>
                            <div class="single-info">
                                <img src="assets/images/picon.png" alt="">
                                <div class="content">
                                    <h4>Call Us</h4>
                                    <p>+1 (987) 435-32-11</p>
                                    <p>+1 (987) 453-31-11</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Newslater-Section========== -->
    <footer class="footer-section">
        <div class="container">

            <div class="copyright-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <hr class="hr2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="copyr-text">
                            <span>
                                Copyright © 2020.All Rights Reserved By
                            </span>
                            <a href="#">Lottery</a>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <ul class="footer-social-links">
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==========Newslater-Section========== -->
    <!-- All js link starts hear -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/bootstrap-popover-x.min.js"></script>
    <script src="assets/js/amd.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript">
            function getData(empid, divid){
                $.ajax({
                    url: 'result_response.php?input_date='+empid, 
                    success: function(html) {
                        var ajaxDisplay = document.getElementById(divid);
                        ajaxDisplay.innerHTML = html;
                    }
                });
            }
        </script>
</body>

</html>

