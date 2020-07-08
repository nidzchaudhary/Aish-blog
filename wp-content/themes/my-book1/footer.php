<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<!-- footer -->
<section class="agile-footer w3ls-section py-5">
	<div class="container">
		<div class="list-footer">
		
						<?php
		wp_nav_menu( array( 
		'theme_location' => 'footer-menu', 
		'container' => 'ul',
        'items_wrap'      => '<ul class="footer-nav text-center">%3$s</ul>',		) ); 
		?>
			<!--<ul class="footer-nav text-center">
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="services.html">Services</a>
				</li>
				<li>
					<a href="property.html">Properties</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>-->
		</div>
		<div class="agileits_w3layouts-footer-bottom">
			<div class="row w3_agile-footer-grids py-5 my-4">
				<div class="col-lg-3 col-sm-12 w3_agile-footer1 f1">
					<h2 class="mb-3">
						<a href="index.html">Success path</a>
					</h2>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem atus error sit volupt unde.</p>
				</div>
				<div class="col-lg-7 col-sm-12 row w3_agile-footer1 f2">
					<div class="col-lg-4  col-sm-4 inner-li">
						<h5 class="mb-3">Partners</h5>
						
						<?php
 
							$args = array(
								'post_type'      => 'page', //write slug of post type
								'posts_per_page' => -1,
								'post_parent'    => '402', //place here id of your parent page
								'order'          => 'ASC',
								'orderby'        => 'menu_order'
							 );
							 
							$childrens = new WP_Query( $args );
							 
							if ( $childrens->have_posts() ) : ?>
 
								<?php while ( $childrens->have_posts() ) : $childrens->the_post(); ?>
									<ul class="w3ls-footer-bottom-list">
												<li><a class="page-scroll" href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
												</ul>
								<?php    endwhile; 
										endif; 
									wp_reset_query(); 
								?>
						
						
					</div>
						<div class="col-lg-4  col-sm-4 inner-li">
						<h5 class="mb-3">ABOUT US</h5>
						
					<?php
 
							$args = array(
								'post_type'      => 'page', //write slug of post type
								'posts_per_page' => -1,
								'post_parent'    => '32', //place here id of your parent page
								'order'          => 'ASC',
								'orderby'        => 'menu_order'
							 );
							 
							$childrens = new WP_Query( $args );
							 
							if ( $childrens->have_posts() ) : ?>
 
								<?php while ( $childrens->have_posts() ) : $childrens->the_post(); ?>
									<ul class="w3ls-footer-bottom-list">
												<li><a class="page-scroll" href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
												</ul>
								<?php    endwhile; 
										endif; 
									wp_reset_query(); 
								?>
					</div>
					<div class="col-lg-4  col-sm-4 inner-li">
						<h5 class="mb-3">Support</h5>
						
					<?php
 
							$args = array(
								'post_type'      => 'page', //write slug of post type
								'posts_per_page' => -1,
								'post_parent'    => '406', //place here id of your parent page
								'order'          => 'ASC',
								'orderby'        => 'menu_order'
							 );
							 
							$childrens = new WP_Query( $args );
							 
							if ( $childrens->have_posts() ) : ?>
 
								<?php while ( $childrens->have_posts() ) : $childrens->the_post(); ?>
									<ul class="w3ls-footer-bottom-list">
												<li><a class="page-scroll" href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
												</ul>
								<?php    endwhile; 
										endif; 
									wp_reset_query(); 
								?>
					</div>
				</div>
				<div class="col-lg-2 col-sm-4  w3_agile-footer1 f3">
					<h5 class="mb-3">Need Help?</h5>
					<?php
 
							$args = array(
								'post_type'      => 'page', //write slug of post type
								'posts_per_page' => -1,
								'post_parent'    => '408', //place here id of your parent page
								'order'          => 'ASC',
								'orderby'        => 'menu_order'
							 );
							 
							$childrens = new WP_Query( $args );
							 
							if ( $childrens->have_posts() ) : ?>
 
								<?php while ( $childrens->have_posts() ) : $childrens->the_post(); ?>
									<ul class="w3ls-footer-bottom-list">
												<li><a class="page-scroll" href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
												</ul>
								<?php    endwhile; 
										endif; 
									wp_reset_query(); 
								?>
					
			</div>
		</div>
		<div class="agileits_w3layouts-copyright text-center">
			<p>© 2018 Success path. All Rights Reserved | Design by
				<a href="http://w3layouts.com/" target="=_blank"> W3layouts </a>
			</p>
		</div>
	</div>
</section>
<!-- //footer -->

<!-- Vertically centered Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-uppercase text-center" id="exampleModalLongTitle"> Success path</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<img src="<?php echo get_template_directory_uri(); ?>/images/ban11.jpg" class="img-fluid mb-3" alt="Modal Image" />
        Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum, ut auctor turpis cursus. Sed sed odio pharetra, aliquet velit cursus, vehicula enim. Mauris porta aliquet magna, eget laoreet ligula.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- //Vertically centered Modal -->
<?php wp_footer(); ?>

<!-- js -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!-- Banner Responsive slider -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- // Banner Responsive slider -->
	<!-- script for responsive tabs -->						
<script src="<?php echo get_template_directory_uri(); ?>/js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--script for responsive tabs -->
<!-- Calendar -->
				<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
<!-- stats -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.waypoints.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
	<!-- flexSlider --><!-- for testimonials -->
	<script defer src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //flexSlider --><!-- for testimonials -->

	<!-- start-smoth-scrolling -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scroslling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>

</body>
</html>
