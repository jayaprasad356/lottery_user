<?php session_start();include('header.php');$je8701ad48ba05a91=$_SESSION['user_id'];$ad7b5164029f94431=$_SESSION[base64_decode('dXNlcg==')];$q40c27bdce4fa810f=$_SESSION[base64_decode('dXNlcl9lbWFpbA==')];if($_SESSION[base64_decode('dXNlcg==')]==base64_decode('dXNlcg==')){$g91ec1f9324753048=mysqli_query($m0c1d0e2ef91d68bd,"SELECT * FROM `user` WHERE id='$je8701ad48ba05a91'");$a93754cbf78dd4c0c=mysqli_fetch_assoc($g91ec1f9324753048);}elseif($_SESSION[base64_decode('dXNlcg==')]==base64_decode('YXV0aG9y')){$g91ec1f9324753048=mysqli_query($m0c1d0e2ef91d68bd,"SELECT * FROM `author` WHERE id='$je8701ad48ba05a91'");$a93754cbf78dd4c0c=mysqli_fetch_assoc($g91ec1f9324753048);}if($_SESSION['user_id']!=''){$qffbc4675f864e0e9=mysqli_query($m0c1d0e2ef91d68bd,"SELECT * FROM `user_author` WHERE id='$je8701ad48ba05a91'");$g18326bbff683e39c=mysqli_fetch_assoc($qffbc4675f864e0e9);}?>
<?php $ib80bb7740288fda1=base64_decode($_REQUEST[base64_decode('cHJvX2lk')]);$gf5bf48aa40cad789=mysqli_query($m0c1d0e2ef91d68bd,"SELECT * FROM product WHERE id='$ib80bb7740288fda1'");$l1a0ed3acc309cd31=mysqli_fetch_assoc($gf5bf48aa40cad789);if(isset($_POST['cart'])){date_default_timezone_set('Asia/Kolkata');$c5fc732311905cb27=date('Y-m-d');$g07cc694b9b3fc636=date(base64_decode('aDppIEE='));$j9bea82def865d4d0=$l1a0ed3acc309cd31['id'];$o2c4738d24c422be5=$l1a0ed3acc309cd31[base64_decode('c2VsbGluZ19wcmljZQ==')];$ze2942a04780e223b=base64_decode('MQ==');$h72d590ffa648d8ec=($o2c4738d24c422be5*$ze2942a04780e223b);if(isset($_SESSION['user_id'])){$x00d6a050bbd51fea="INSERT INTO `add_cart`(`user_id`, `product_id`, `quantity`,`selling_price`,`total`) VALUES ('$je8701ad48ba05a91','$j9bea82def865d4d0','1','$o2c4738d24c422be5','$h72d590ffa648d8ec')";$q1e5a6ce1ad51f54a=mysqli_query($m0c1d0e2ef91d68bd,$x00d6a050bbd51fea);if($q1e5a6ce1ad51f54a){?>
           
<?php echo base64_decode('PHNjcmlwdCB0eXBlPSd0ZXh0L2phdmFzY3JpcHQnPnN3YWwoJycsJ1Byb2R1Y3QgYWRkZWQgdG8geW91ciBjYXJ0Jywnc3VjY2VzcycpOzwvc2NyaXB0Pg==');echo base64_decode('PG1ldGEgaHR0cC1lcXVpdj0ncmVmcmVzaCcgY29udGVudD0nMTt1cmw9Y2FydC5waHAnPg==');}else{?>
           
<?php echo base64_decode('PHNjcmlwdCB0eXBlPSd0ZXh0L2phdmFzY3JpcHQnPnN3YWwoJycsJ3NvcnJ5IFNvbWV0aGluZyB3ZW50IHdyb25nJywnaW5mbycpOzwvc2NyaXB0Pg==');}}else{echo base64_decode('PHNjcmlwdD5hbGVydCgiTG9naW4gRmlyc3QhIik7PC9zY3JpcHQ+');echo base64_decode('PG1ldGEgaHR0cC1lcXVpdj0icmVmcmVzaCIgY29udGVudD0iMDt1cmw9bG9naW4ucGhwIj4=');}}?>

<?php if(isset($_POST[base64_decode('d2lzaA==')])){$dd759c36d787cc3db=$l1a0ed3acc309cd31['id'];if(isset($_SESSION['user_id'])){$ka2ba5fe5612c28bc="INSERT INTO `wishlist`(`product_id`,`user_id`) VALUES ('$dd759c36d787cc3db','".$_SESSION['user_id'].base64_decode('Jyk=');$w3a7c5f6a9ff0c1ab=mysqli_query($m0c1d0e2ef91d68bd,$ka2ba5fe5612c28bc);if($w3a7c5f6a9ff0c1ab){?>
           <div class="alert alert-success alert-dismissible show fade">
	          <div class="alert-body">
	            <button class="close" data-dismiss="alert">
	              <span>&times;</span>
	            </button>
	            Success !! Product  Added To Wishlist succesfully !
	          </div>
	        </div>
<?php echo base64_decode('PG1ldGEgaHR0cC1lcXVpdj0ncmVmcmVzaCcgY29udGVudD0nMTt1cmw9d2lzaGxpc3QucGhwJz4=');}else{?>
           <div class="alert alert-info alert-dismissible show fade">
	          <div class="alert-body">
	            <button class="close" data-dismiss="alert">
	              <span>&times;</span>
	            </button>
	            Error !!Something Wrong  !
	          </div>
	        </div>
<?php }}else{echo base64_decode('PHNjcmlwdD5hbGVydCgiTG9naW4gRmlyc3QhIik7PC9zY3JpcHQ+');echo base64_decode('PG1ldGEgaHR0cC1lcXVpdj0icmVmcmVzaCIgY29udGVudD0iMDt1cmw9bG9naW4ucGhwIj4=');}}?>
<!-- Start Bradcaump area -->
		<!-- Start Slider area -->
		<div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
		
		</div>
		<!-- End Slider area -->
		<!-- End Bradcaump area -->
		<!-- Start main Content -->
		<?php $ib80bb7740288fda1=base64_decode($_REQUEST[base64_decode('cHJvX2lk')]);$rf26b0d8f252a76f2=mysqli_query($m0c1d0e2ef91d68bd,"SELECT * FROM product WHERE id='$ib80bb7740288fda1'");$qaacb8bcfa383aee5=mysqli_fetch_assoc($rf26b0d8f252a76f2);$gdc1599bfb58369f5=$qaacb8bcfa383aee5[base64_decode('c3ViY2F0X2lk')];$t05e7bb577f40bf12=$qaacb8bcfa383aee5[base64_decode('Y2F0X2lk')];$ueec34d804c9ce6c8=$qaacb8bcfa383aee5[base64_decode('Ym9va19wZGY=')];$q14b8f509a1e0e269=$qaacb8bcfa383aee5[base64_decode('Ym9va19jb250ZW50')];$j080a38f3c1d8b442=$qaacb8bcfa383aee5[base64_decode('Z2VucmVfaWQ=')];$vb3a3072739064bac=mysqli_query($m0c1d0e2ef91d68bd,"SELECT * FROM `genre` WHERE id='$j080a38f3c1d8b442'");$m8517e7d1ee2befc7=mysqli_fetch_assoc($vb3a3072739064bac);$f4f331e2fa932c4f9=$qaacb8bcfa383aee5[base64_decode('YXV0aG9yX2lk')];$pbaceebebc179d3cd=mysqli_query($m0c1d0e2ef91d68bd,"SELECT * FROM `user_author` WHERE id='$f4f331e2fa932c4f9'");$e96a8b6c82555b25b=mysqli_fetch_assoc($pbaceebebc179d3cd);$o2604cbea3d2283bd=$qaacb8bcfa383aee5[base64_decode('cHVibGlzaGVyX2lk')];$c3a21cd7317e1445b=mysqli_query($m0c1d0e2ef91d68bd,"SELECT * FROM `publisher` WHERE id='$o2604cbea3d2283bd'");$i23045d26a2f89315=mysqli_fetch_assoc($c3a21cd7317e1445b);$n815be97df65d6c4b=mysqli_query($m0c1d0e2ef91d68bd,"SELECT * FROM sub_category WHERE id='$gdc1599bfb58369f5'");$e7d0db380a5b95a8b=mysqli_fetch_assoc($n815be97df65d6c4b);$qbcf399e0e0214d8b=mysqli_query($m0c1d0e2ef91d68bd,"SELECT * FROM category WHERE id='$t05e7bb577f40bf12'");$sf7464f07cb6488e4=mysqli_fetch_assoc($qbcf399e0e0214d8b);$eb9e92fc576df818f=mysqli_query($m0c1d0e2ef91d68bd,"SELECT * FROM `stock` WHERE product_id='$ib80bb7740288fda1'");$kcf6044d6c439bd34=mysqli_fetch_assoc($eb9e92fc576df818f);$x7c90188ab52d464c=$kcf6044d6c439bd34[base64_decode('cHJvZHVjdF9pZA==')];?>
		<div class="maincontent bg--white pt--80 pb--55">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="wn__single__product">
							<div class="row">
								<div class="col-md-6  col-12 fotoramamaincng">
									<!--<div class="wn__fotorama__wrapper">-->
									<!--	<div class="fotorama wn__fotorama__action" data-nav="thumbs">-->
										    
											<div><img src="book_image/<?=$qaacb8bcfa383aee5['image'];?>" class="img-fluid w-100" alt="img"></div>
											
										
									<!--	</div>-->
									<!--</div>-->
								</div>
								
								<div class="col-lg-6 col-12">
								    <form method="post">
									<div class="product__info__main">
										<h1><?=$qaacb8bcfa383aee5[base64_decode('cHJvZHVjdF9uYW1l')];?></h1>
										<div class="product-reviews-summary d-flex">
										
										</div>
											<?php $u33816f2aa85a1bda=mysqli_query($m0c1d0e2ef91d68bd,"SELECT * FROM library WHERE product_id='$ib80bb7740288fda1' AND user_id='$je8701ad48ba05a91'");$df95f4a96a7fdc231=mysqli_fetch_assoc($u33816f2aa85a1bda);if($df95f4a96a7fdc231[base64_decode('cHJvZHVjdF9pZA==')]!=''){?>
                                         <ul class="prize d-flex">
												<li>Free</li>
												<!--<li class="old_prize">₹35.00</li>-->
											</ul>
                                        <?php }elseif($qaacb8bcfa383aee5[base64_decode('cHJpY2U=')]==base64_decode('cGFpZA==')){?>
										<div class="price-box">
											<span>₹<?=$qaacb8bcfa383aee5[base64_decode('c2VsbGluZ19wcmljZQ==')];?></span>
											<!--<span class="old_prize">₹<?=$qaacb8bcfa383aee5[base64_decode('YWN0dWFsX3ByaWNl')];?></span>-->
										</div>
										<?php }elseif($qaacb8bcfa383aee5[base64_decode('cHJpY2U=')]==base64_decode('ZnJlZQ==')){?>
											 	<div class="price-box">
											<span>Free</span>
										</div>
											 <?php }?>
										<div class="product__overview">
											<p><?=$qaacb8bcfa383aee5[base64_decode('YXV0aG9yX2Rlc2NyaXB0aW9u')];?></p>
										</div>
										<div class="box-tocart d-flex">
											<!--<span>Qty</span>-->
											<!--<input id="qty" class="input-text qty" name="qty" min="1" value="1"-->
											<!--	title="Qty" type="number">-->
											
											

										
<?php if(($qaacb8bcfa383aee5[base64_decode('cHJpY2U=')]==base64_decode('ZnJlZQ=='))){?>
<div class="mr-3 addtocart__actions">
<button class="tocart" type="submit" title="Read"><a class="view-pdf" href="book_pdf/<?php echo $ueec34d804c9ce6c8;?>"  target="_blank">Read</a></button>

</div>
<?php }else{if(isset($_SESSION['user_id'])){?>
<?php if(($f4f331e2fa932c4f9==$je8701ad48ba05a91)||($df95f4a96a7fdc231[base64_decode('cHJvZHVjdF9pZA==')]!='')){?>
<div class="mr-3 addtocart__actions">
<button class="tocart" type="submit" title="Read"><a class="view-pdf" href="book_pdf/<?php echo $ueec34d804c9ce6c8;?>"  target="_blank">Read</a></button>

</div>
<?php }elseif(($qaacb8bcfa383aee5[base64_decode('cHJpY2U=')]==base64_decode('cGFpZA=='))){?>	
<div class="addtocart__actions">
<button class="tocart" type="submit" title="Add to Cart" name="cart">Add to Cart</button>
</div>
<?php }}else{?>
<div class="addtocart__actions">
    <span class="tocart"><i class="fa fa-shopping-basket"></i><input  type="button" name="no_pin_submitt" id="no_pin_submitt" class="tocart" value="Add To Cart"></span>  
</div>
<?php }}?>

											
		<?php if(isset($_SESSION['user_id'])){?>
       <form method="post">
           
       <div class="addtocart__actions clearfix">
<!--<a href="#" class="wishlist"> <span class="icon_heart_alt"></span> </a>-->
<button class="tocart" name="wish" type="submit"><span><i class="fa fa-heart-o"></i> Add to Wishlist </span></button>
</div>
		</form>
		<?php }else{?>
		<form method="post">
       <div class="product-addto-links clearfix">
<a href="login.php" class="wishlist"> </a>
</div>
		</form>
		<?php }?>
												<div class="ml-3 addtocart__actions">
<button class="tocart" type="submit" title="Read"><a class="view-pdf" href="book_pdf/<?php echo $q14b8f509a1e0e269;?>"  target="_blank">Preview</a></button>

</div>
											
										</div>
										
									
										
										<div class="product_meta">
											<span class="posted_in">Categories:
											<a href="#"><?php echo $e7d0db380a5b95a8b[base64_decode('bmFtZQ==')];?></a>,
											<a href="#"><?php echo $sf7464f07cb6488e4[base64_decode('bmFtZQ==')];?></a>,
											<a href="#"><?php echo $m8517e7d1ee2befc7[base64_decode('bmFtZQ==')];?></a>
											</span>
										</div>
										<div class="product_meta">
											<span class="posted_in">Author:
											<a href="#"><?php echo $e96a8b6c82555b25b[base64_decode('bmFtZQ==')];?></a>
											</span>
										</div>
										<div class="product_meta">
											<span class="posted_in">Publisher:
											<a href="#"><?php echo $i23045d26a2f89315[base64_decode('bmFtZQ==')];?></a>
											</span>
										</div>
									
									</div>
									</form>
								</div>
								
							</div>
						</div>
						<div class="product__info__detailed">
							<div class="pro_details_nav nav justify-content-start" role="tablist">
								<a class="nav-item nav-link active" data-toggle="tab" href="#nav-details"
									role="tab">Details</a>
										<a class="nav-item " data-toggle="tab" href="#nav-Review"
									role="tab">Review</a>
								<!--<a class="nav-item nav-link" data-toggle="tab" href="#nav-review" role="tab">Reviews</a>-->
							</div>
							<div class="tab__container">
								<!-- Start Single Tab Content -->
								<div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
									<div class="description__attribute">
							<p><?php echo $qaacb8bcfa383aee5[base64_decode('ZGVzY3JpcHRpb24=')];?></p>
							 
									
									</div>
								</div>
								<div class="pro__tab_label tab-pane fade show active" id="nav-Review" role="tabpane2">
									<div class="description__attribute">
						                <div class="">
						                    <!--<h2>2 reviews for Akshar Sharadiya 1423</h2>-->
						                    <?php $h7fad390d6652f304=mysqli_query($m0c1d0e2ef91d68bd,"SELECT * FROM `user_rating` WHERE book_id='$ib80bb7740288fda1'");while($nb604ca993c2e7be5=mysqli_fetch_array($h7fad390d6652f304)){$c5fc732311905cb27=date_create($nb604ca993c2e7be5[base64_decode('ZGF0ZQ==')]);$k119a66f4806594eb=date_format($c5fc732311905cb27,base64_decode('TSAgZCAsIFk='));$y07793d54abc031d5=$nb604ca993c2e7be5[base64_decode('c3Rhcg==')];?>
    						                        <div class="media mt-3">
                                                      <img class="mr-3" src="https://secure.gravatar.com/avatar/0ea29bcd527bd85f42130de16c8a4d3b?s=60&amp;d=mm&amp;r=g" alt="Generic placeholder image">
                                                     <div class="media-body p-3" style="border: 1px solid #d4d4d4;">
                                                        <h5 class="mt-0"><?=$nb604ca993c2e7be5[base64_decode('bmFtZQ==')]?> – <?=$k119a66f4806594eb?></h5>
                                                       <h6><?=$nb604ca993c2e7be5[base64_decode('cmV2aWV3')]?></h6>
                                                       <?php for($y865c0c0b4ab0e063=1;$y865c0c0b4ab0e063<=$y07793d54abc031d5;$y865c0c0b4ab0e063++){?>
            									        <i class="fa fa-star" aria-hidden="true" style="color:orange"></i>
            									        <?php }$adabe6e597b70e576=5-$y07793d54abc031d5;for($pfbade9e36a3f36d3=1;$pfbade9e36a3f36d3<=$adabe6e597b70e576;$pfbade9e36a3f36d3++){?>
            									        <i class="fa fa-star" aria-hidden="true"></i>
            									        <?php }?>
                                                      </div>
                                                  
                                                    </div>
						                        <?php }?>
						                    
						                    <!--<div class="media mt-3">
                                              <img class="mr-3" src="https://secure.gravatar.com/avatar/0ea29bcd527bd85f42130de16c8a4d3b?s=60&amp;d=mm&amp;r=g" alt="Generic placeholder image">
                                             <div class="media-body p-3" style="border: 1px solid #d4d4d4;">
                                                <h5 class="mt-0">user – Sep 14</h5>
                                               <h6>Nice collection!!!</h6>
                                              </div>
                                              
                                            </div>-->
                                            
                                            
                                            <h6 class="pt-3 pb-3">Add a review</h6>
                                            <?php if($_SESSION['user_id']!=''){?>
                                                <input class="p-2" id="author" name="author" type="hidden" value="<?=$g18326bbff683e39c[base64_decode('bmFtZQ==')]?>" size="30" required="" >
                                            
                                            <input class="p-2" id="email" name="email" type="hidden" value="<?=$g18326bbff683e39c[base64_decode('ZW1haWw=')]?>" size="30" required="">
                                                <?php }else{?>
                                                <p class="comment-form-author"><label for="author">Name&nbsp;<span class="required">*</span></label>
                                            <input class="p-2" id="author" name="author" type="text" value="<?=$g18326bbff683e39c[base64_decode('bmFtZQ==')]?>" size="30" required="" ></p>
                                            <p class="comment-form-email"><label for="email">Email&nbsp;<span class="required">*</span></label>
                                            <input class="p-2" id="email" name="email" type="email" value="<?=$g18326bbff683e39c[base64_decode('ZW1haWw=')]?>" size="30" required=""></p>
                                                
                                                <?php }?>
                                            
                                            
                                            
                                            <svg style="display: none;">
                                              <symbol id="star" viewBox="0 0 98 92">
                                              <title>star</title>
                                              <path stroke="#000" stroke-width="5" d="M49 73.5L22.55 87.406l5.05-29.453-21.398-20.86 29.573-4.296L49 6l13.225 26.797 29.573 4.297-21.4 20.86 5.052 29.452z" fill-rule="evenodd"></path>
                                            </symbol></svg>
                                            <label>Your rating *</label>
                                            <div class="rating has--rating">
                                            	<a href="javascript:;" class="rating__button" value="1"><svg class="rating__star"><use xlink:href="#star"></use></svg></a>
                                            	<a href="javascript:;" class="rating__button" value="2"><svg class="rating__star"><use xlink:href="#star"></use></svg></a>
                                            	<a href="javascript:;" class="rating__button" value="3"><svg class="rating__star"><use xlink:href="#star"></use></svg></a>
                                            	<a href="javascript:;" class="rating__button" value="4"><svg class="rating__star"><use xlink:href="#star"></use></svg></a>
                                            	<a href="javascript:;" class="rating__button is--active" value="5"><svg class="rating__star"><use xlink:href="#star"></use></svg></a>
                                            	
                                            	
                                            </div>
                                            <input type="hidden" value="5" id="count_star">
                                             <p class="comment-form-comment"><label for="comment">Your review&nbsp;<span class="required">*</span></label>
                                             <textarea id="comment" name="comment" cols="3" rows="8" required="" style="width: 100%;"></textarea></p>
                                            <button type="button" class="btn btn-primary" style="background: #b89d4f;border-radius: 50px;border: navajowhite;" id="add_review" onclick="sent_review()">submit</button>
						                </div>
							 
									
									</div>
								</div>
							</div>
						</div>
						<div class="wn__related__product pt--80 pb--50">
							<div class="section__title text-center">
								<h2 class="title__be--2">Related Products</h2>
							</div>
							<div class="row mt--60">
								<div class="productcategory__slide--2 arrows_style owl-carousel owl-theme">
									<!-- Start Single Product -->
									<?php $l46d3759cf3594539=mysqli_query($m0c1d0e2ef91d68bd,"SELECT * FROM `product` WHERE cat_id='$t05e7bb577f40bf12' ORDER BY id DESC LIMIT 6");$k54a2bf8c09ace67d=1;while($g9e37f475e1da39f3=mysqli_fetch_assoc($l46d3759cf3594539)){$t05e7bb577f40bf12=$g9e37f475e1da39f3[base64_decode('Y2F0X2lk')];$w95822f3cc0b69c98=mysqli_query($m0c1d0e2ef91d68bd,"SELECT * FROM `category` WHERE  id='$t05e7bb577f40bf12'");$o8041c1116214519b=mysqli_fetch_assoc($w95822f3cc0b69c98);?>
									<div class="product product__style--3 col-lg-3 col-md-3 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="pdfmain.php?pro_id=<?=base64_encode($g9e37f475e1da39f3['id']);?>"><img
													src="book_image/<?=$g9e37f475e1da39f3['image'];?>" alt="product image"></a>
											<a class="second__img animation1" href="pdfmain.php?pro_id=<?=base64_encode($g9e37f475e1da39f3['id']);?>"><img
													src="book_image/<?=$g9e37f475e1da39f3['image'];?>" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label"><?php echo $o8041c1116214519b[base64_decode('bmFtZQ==')];?></span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="pdfmain.php?pro_id=<?=base64_encode($g9e37f475e1da39f3['id']);?>"><?=$g9e37f475e1da39f3[base64_decode('cHJvZHVjdF9uYW1l')];?></a></h4>
											<?php if($g9e37f475e1da39f3[base64_decode('cHJpY2U=')]==base64_decode('cGFpZA==')){?>
											<ul class="prize d-flex">
												<li>₹<?=$g9e37f475e1da39f3[base64_decode('c2VsbGluZ19wcmljZQ==')];?></li>
												<li class="old_prize">₹<?=$g9e37f475e1da39f3[base64_decode('YWN0dWFsX3ByaWNl')];?></li>
											</ul>
											<?php }elseif($g9e37f475e1da39f3[base64_decode('cHJpY2U=')]==base64_decode('ZnJlZQ==')){?>
											<ul class="prize d-flex">
												<li>Free</li>
												<!--<li class="old_prize">₹35.00</li>-->
											</ul>
											<?php }?>
											
										</div>
									</div>
								<?php }?>
								
								</div>
							</div>
						</div>
					
					</div>
				
				</div>
			</div>
		</div>
		<!-- End main Content -->
		<!-- Start Search Popup -->
		<!--<div class="box-search-content search_active block-bg close__top">-->
		<!--	<form id="search_mini_form--2" class="minisearch" action="#">-->
		<!--		<div class="field__search">-->
		<!--			<input type="text" placeholder="Search entire store here...">-->
		<!--			<div class="action">-->
		<!--				<a href="#"><i class="zmdi zmdi-search"></i></a>-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</form>-->
		<!--	<div class="close__wrap">-->
		<!--		<span>close</span>-->
		<!--	</div>-->
		<!--</div>-->
		<!-- End Search Popup -->
<?php include('footer.php');?>
<script>
	$(function(){
	
	$('.rating__button').on('click', function(e){
		var $t = $(this), // the clicked star
				$ct = $t.parent(); // the stars container
				//alert($t);
		var spon = $(this).attr('value');
		//alert(spon);
		$("#count_star").val(spon)
		// add .is--active to the user selected star 
		$t.siblings().removeClass('is--active').end().toggleClass('is--active');
		//alert($t.siblings().removeClass('is--active'));
		// add .has--rating to the rating container, if there's a star selected. remove it if there's no star selected.
		$ct.find('.rating__button.is--active').length ? $ct.addClass('has--rating') : $ct.removeClass('has--rating');
	});
	
});

 function sent_review(){
        var tot_star = $("#count_star").val();
        var pro_id = '<?=base64_decode($_REQUEST[base64_decode('cHJvX2lk')])?>';
        var review = $("#comment").val();
        var author = $("#author").val();
        var email = $("#email").val();
        $.ajax({
            url: "api/user_review.php",
            type: "POST",
            data: {tot_star: tot_star,pro_id:pro_id,review:review,author:author,email:email},
           
            success: function(res) {
                location.reload()
                
               
               
                
        }
    
      })
    }
	</script>
<script>
    $('#no_pin_submitt').click(function(){
    //Some code
    
    swal("Error!", "Please Register/login First  to insert product into your cart!", "info");
});

</script>