<?php include('header.php');
$ue8701ad48ba05a91=$_SESSION['user_id'];
date_default_timezone_set('Asia/Kolkata');$t9a0158ba8d84e593=date('Y-m-d');?>

   	<!-- Start Bradcaump area -->
   		<!-- Start Slider area -->
		<!--<div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">-->
			<!-- Start Single Slide -->
			<div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
			
					<div class="row">
						
						<div class="col-md-5 col-lg-12">
						<img src="Singapore Lottary.jpg" class="responsive" style="width: 100%;height: 600px;  ">
					
						</div>
					</div>
				<div class="slidercontant">
				<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="bradcaump__inner text-center">
							<h2 class="bradcaump-title">TODAY RESULT</h2>
							<nav class="bradcaump-content">
								<a class="breadcrumb_item text-center" href="index.php">Home</a>
								<span class="brd-separetor">/</span>
								<span class="breadcrumb_item active text-center">TODAY RESULT</span>
							</nav>
							<!--<input type="date" name="input_date" id="input_date" class="result_date">-->
							<!--<p style="color:red; text-center">PLEASE CHANGE THE DATE TO SEE RESULT</p>-->
						</div>
					</div>
				</div>
			</div>
		   </div>
		</div>
			
		<!--</div>-->
		<div class="container">
      <div class="content_info">
       <div class="section-title-01">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"style="background-color: #000;">
                        <!--<h3>About Us</h3>-->
                        <!--<h5>Great Company</h5>-->
                        <h5 style="color: #fff;font-size: 25px; font-family: san-sarif;text-align: left;line-height: 2rem;">Play SingaporeLottary</h5>
                        <marquee attribute_name = "attribute_value"....more attributes>
                          <?php 
						  $sql="SELECT * FROM `marque`";
						  $db->sql($sql);
						  $res = $db->getResult();
						  ?>
                          <span style="font-size: 20px;color: #FF0000;"><?=$res[0]['home_marque']?></span>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
      </div>
      </div>
		<div class="page-blog-details section-padding--lg bg--white">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="blog-details content">
							<article class="blog-post-details">
								<div class="post-thumbnail"  id="respose_result">
									<?php
									$todaydate = date('Y-m-d H:i:s');
									$sql = "SELECT * FROM draw_resultfiles WHERE date = '$todaydate' ";
									$db->sql($sql);
									$res = $db->getResult();
									foreach ($res as $row) {
									?>
                                    <div class="media mt-3">
                                      <div class="media-body p-3" style="border: 1px solid #d4d4d4;">
                                        <h4 style="color:#000080;text-align:center;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                              <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                            </svg>:<?php echo $row['time'] ?>
                                            </br>
                                            </br>
                                            <?php echo $row['name'] ?>
                                            </br>
                                            </br>
                                            <?php echo $row['day'] ?>
                                            </h4>
                                            <h4 style="color:#000080;text-align:center;font-size: 20px;"><span style="color:#000080;font-size: 15px;">First Prize</span></br> <?php echo $row['prize'] ?></h4>
                                            <h4 style="text-align:center;"><a href="admin/result/" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download Result" class="btn btn-primary" target="_blank"><i class="fa fa-download" aria-hidden="true"></i>Download</a></h4>
                                      </div>
                                    </div>
									<?php } ?>
                                   
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3399636376620475"
     crossorigin="anonymous"></script>
<?php include('footer.php');?>