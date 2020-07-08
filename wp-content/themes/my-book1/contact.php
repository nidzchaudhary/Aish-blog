<?php get_header(); 

/* Template Name: contact */ 
?>
<!--Slider-->
<section class="innerpage_banner py-5">
	<div class="dot1">
		
	</div>
</section>
<div class="mail py-5" id="contact">
					<div class="container-fluid  py-md-3">	
						<div class="w3-head-all mb-3">
							<h3>Contact Us</h3>
							</div>
						   <div class="w3-agile_info row">
							<div class="col-lg-4 col-sm-6 col-xs-12 mail-agileits-w3layouts">
								<i class="fas fa-mobile-alt" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Phone</p><span>+1 (100)222-23-33</span>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 col-xs-12 mail-agileits-w3layouts">
								<i class="far fa-envelope" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Email</p><a href="mailto:info@example.com">info@example.com</a>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 col-xs-12 mail-agileits-w3layouts mail-agileits-w3layouts1">
								<i class="fas fa-map-marker" aria-hidden="true"></i>
								<div class="contact-right">
									<p>Address</p><span>7784 Diamonds street, California, US.</span>
								</div>
							</div>
							<div class="clearfix"></div>
							 </div>
						</div>
	<div class="container-fluid">	
			<div class="row">
				<div class="col-lg-7 map ">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28062.593787724218!2d77.0737037!3d28.45471470000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1537266514170" style="border:0" allowfullscreen></iframe>
				</div>
					<div class="col-lg-5 mail-grid1-form ">
						<h3 class="tittle-w3"><span>Send a </span>Message</h3>
						<?php echo do_shortcode(' [contact-form-7 id="320" title="contact-us-page-form"] '); ?>
					</div>
					<div class="clearfix"></div>
				</div>
				</div>
				</div>

<?php get_footer(); ?>