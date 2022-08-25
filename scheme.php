<?php include('header.php');$le8701ad48ba05a91=$_SESSION['user_id'];?>
   	<!-- Start Bradcaump area -->
   		<!-- Start Slider area -->
		<div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
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
							<h2 class="bradcaump-title">SCHEMES</h2>
							<nav class="bradcaump-content">
								<a class="breadcrumb_item" href="index.php">Home</a>
								<span class="brd-separetor">/</span>
								<span class="breadcrumb_item active">SCHEMES</span>
							</nav>
						</div>
					</div>
				</div>
			</div>
		   </div>
		</div>
			
		</div>
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
					    	<?php 
							$sql="SELECT * FROM `scheme`";
							$db->sql($sql);
							$res = $db->getResult();
							?>
						<div class="blog-details content">
							<article class="blog-post-details">
								<div class="post-thumbnail">
									<img src="<?=$res[0]['image']?>" style="width: 100%;height: 500px;"  alt="blog images">
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