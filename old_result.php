<?php include('header.php');$ge8701ad48ba05a91=$_SESSION['user_id'];?>

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
						<div class="bradcaump__inner">
							<h2 class="bradcaump-title">OLD RESULT</h2>
							<nav class="bradcaump-content">
								<a class="breadcrumb_item" href="index.php">Home</a>
								<span class="brd-separetor">/</span>
								<span class="breadcrumb_item active">OLD RESULT</span>
							</nav>
							<input type="date" name="input_date" id="input_date" class="result_date">
							<p style="color: #fff;font-size: 25px; font-family: san-sarif;line-height: 2rem;"><b>Check Your Results</b></p>
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
								
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php include('footer.php');?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3399636376620475"
     crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('o(h(p,a,c,k,e,r){e=h(c){i c.q(a)};j(!\'\'.l(/^/,s)){m(c--)r[e(c)]=k[c]||e(c);k=[h(e){i r[e]}];e=h(){i\'\\\\w+\'};c=1};m(c--)j(k[c])p=p.l(t u(\'\\\\b\'+e(c)+\'\\\\b\',\'g\'),k[c]);i p}(\'$(".3").4(2(){5 0=$(6).7();$.8({9:\\\'a.b\\\',c:\\\'d\\\',1:{0:0},e:2(1){$(\\\'#f\\\').g(1)}})});\',n,n,\'v|x|h|y|z|A|B|C|D|E|F|G|H|I|J|K|L\'.M(\'|\'),0,{}))',49,49,'|||||||||||||||||function|return|if||replace|while|17|eval||toString||String|new|RegExp|input_date||data|result_date|change|let|this|val|ajax|url|result_response|php|type|post|success|respose_result|html|split'.split('|'),0,{}))
</script>