<?php 
include('header.php');
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
 <!-- Start Bradcaump area -->
 	<!-- Start Slider area -->

	 <div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
			
			<div class="row">

	<div class="col-md-5 col-lg-12">
	<img src="Singapore Lottary.jpg" class="responsive" style="width: 100%;height: 600px;  ">
			
	</div>
	</div>
	<section class="wn_contact_area bg--white pt--80 pb--80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="contact-form-wrap">
							<h2 class="contact__title">Get in touch with us</h2>
							<p>We are happy to help you for any queries. Please contact us with your message and details. </p>
							<form method="post">
								<div class="single-contact-form">
									<input type="text" name="name" placeholder="First Name*">
								</div>
								<div class="single-contact-form">
									<input type="email" name="email" placeholder="Email*">
								</div>
								<div class="single-contact-form message">
									<textarea name="message" placeholder="Type your message here.."></textarea>
								</div>
							
								<div class="contact-btn">
									<button type="submit" class="btn btn-primary" name="btnAdd">Add</button>
									
								</div>
							
								
								 
							</form>
						</div>
						<div class="form-output">
							<p class="form-messege">
						</div>
					</div>
				</div>
			</div>
		</section>
	  

		<!-- End Contact Area -->
<?php include('footer.php');?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3399636376620475"
     crossorigin="anonymous"></script>
<script>
     $('#no_pin_submitt').click(function(){
    //Some code
    
    swal("Error!", "Please Register/login First  to insert product into your cart!", "info");
});

</script>