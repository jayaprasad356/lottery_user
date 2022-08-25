<?php 
include('header.php');
$je8701ad48ba05a91=$_SESSION['user_id'];
// $yc8525fbd29cdb77e=mysqli_fetch_array(mysqli_query("SELECT * FROM `banner`"));?>
<style>
[class~=modal]{display:none;}[class~=close]:hover,.close:focus{color:#000;}[class~=close]:hover,.close:focus{text-decoration:none;}.close:focus,[class~=close]:hover{cursor:pointer;}[class~=modal]{position:fixed;}[class~=modal]{z-index:1;}[class~=modal]{padding-top:6.25pc;}[class~=modal]{left:0;}[class~=modal]{top:0;}[class~=modal]{width:100%;}[class~=modal]{height:100%;}[class~=modal]{overflow:auto;}[class~=modal]{background-color:#000;}[class~=modal]{background-color:rgba(0,0,0,.4);}[class~=modal-content]{background-color:#fefefe;}[class~=modal-content]{margin-left:auto;}[class~=modal-content]{margin-bottom:auto;}[class~=modal-content]{margin-right:auto;}[class~=modal-content]{margin-top:auto;}[class~=modal-content]{padding-left:.208333333in;}[class~=modal-content]{padding-bottom:.208333333in;}[class~=modal-content]{padding-right:.208333333in;}[class~=modal-content]{padding-top:.208333333in;}[class~=modal-content]{border-left-width:.75pt;}[class~=modal-content]{border-bottom-width:.75pt;}[class~=modal-content]{border-right-width:.75pt;}[class~=modal-content]{border-top-width:.75pt;}[class~=modal-content]{border-left-style:solid;}[class~=modal-content]{border-bottom-style:solid;}[class~=modal-content]{border-right-style:solid;}[class~=modal-content]{border-top-style:solid;}[class~=modal-content]{border-left-color:#888;}[class~=modal-content]{border-bottom-color:#888;}[class~=modal-content]{border-right-color:#888;}[class~=modal-content]{border-top-color:#888;}[class~=modal-content]{border-image:none;}[class~=modal-content]{width:80%;}[class~=close]{color:#aaa;}[class~=close]{float:right;}[class~=close]{font-size:.291666667in;}[class~=close]{font-weight:bold;}
</style>
   	<!-- Start Bradcaump area -->
   		<!-- Start Slider area -->
		<!--<div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">-->
			<!-- Start Single Slide -->
			<!--<div class="slide animation__style10 bg-image--1 fullscreen align__center--left">-->
			
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
							<h2 class="bradcaump-title" style="color: #fff;font-size: 25px; font-family: san-sarif;line-height: 2rem;"><b>CHECK</b></h2>
							<!--<nav class="bradcaump-content">-->
							<!--	<a class="breadcrumb_item" href="index.php">Home</a>-->
							<!--	<span class="brd-separetor">/</span>-->
							<!--	<span class="breadcrumb_item active">OLD RESULT</span>-->
							<!--</nav>-->
							<input type="date" name="input_date" id="input_date" class="result_date" >
							<p style="color: #fff;font-size: 25px; font-family: san-sarif;line-height: 2rem;"><b>YOUR RESULT</b></p>
						</div>
					</div>
				</div>
			</div>
		   </div>
		<!--</div>-->
			
		<!--</div>-->
		<div class="container">
      <div class="content_info">
       <div class="section-title-01">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="background-color: #000;">
                        <!--<h3>About Us</h3>-->
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
		<!-- Trigger/Open The Modal -->
        <button id="myBtn" style="display:none;">Open Modal</button>

<!-- The Modal -->
        <div id="myModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            
            <img src="admin/user_img/<?=$yc8525fbd29cdb77e['image']?>"  width="100%" height="100%">
          </div>
        </div>
<?php include('footer.php');?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3399636376620475"
     crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('$(".3").4(2(){5 0=$(6).7();$.8({9:\'a.b\',c:\'d\',1:{0:0},e:2(1){$(\'#f\').g(1)}})});',17,17,'input_date|data|function|result_date|change|let|this|val|ajax|url|result_response|php|type|post|success|respose_result|html'.split('|'),0,{}))
</script>
<script>
eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('4 1=3.8("f");4 9=3.8("a");4 b=3.g("h")[0];9.5=2(){1.6.7="i"}b.5=2(){1.6.7="c"}j.5=2(d){k(d.l==1){1.6.7="c"}}</e><e>$("3").m(2(){n(2(){$("#a").o(\'p\')},q)});',27,27,'|modal|function|document|var|onclick|style|display|getElementById|btn|myBtn|span|none|event|script|myModal|getElementsByClassName|close|block|window|if|target|ready|setTimeout|trigger|click|1000'.split('|'),0,{}))
</script>