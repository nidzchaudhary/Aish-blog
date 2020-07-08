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
<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-left wow fadeInDown contact-grid1"  data-wow-duration=".8s" data-wow-delay=".2s">
				<h4 style="color: #fff; font-size: 1.7em;">About Us</h4>
				<ul>
                  <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> Office : 8126062908</li>
                  <li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Mobile : 8126062908</li>
                  <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <a href="#"></a><a href="mailto:aishwarya.tripathi@healingaddict.com">aishwarya.tripathi@healingaddict.com</a></li>
                  <!-- <li><i class="glyphicon glyphicon-print" aria-hidden="true"></i> Fax : 0091-789-456100</li> -->
                </ul>
			</div>
			
			<div class="col-md-4 footer-right wow fadeInDown footer-menu"  data-wow-duration=".8s" data-wow-delay=".2s">
				<h4>Categories</h4>
							<div class="clearfix"> </div>
							<?php
		wp_nav_menu( array( 
		'theme_location' => 'footer-menu', 
		'container' => 'ul',
        'items_wrap'      => '<ul class="">%3$s</ul>',		) ); 
		?>

			</div>
			<div class="col-md-4 footer-middle wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
			<h4>Our vide</h4>
			<div class="mid-btm">
				<ul>
				<?php 
              $args = array(
                'post_type'=> 'youtube_video',
                'orderby'    => 'ID',
                'post_status' => 'publish',
                'order'    => 'DESC',
                'posts_per_page' => 6 // this will retrive all the post that is published 
                );
                $query = new WP_Query( $args );
              while ( $query->have_posts() ) {
                        $query->the_post();
              ?>
              
              	<li>
              	   <?php the_content(); ?>
              </li>
              	
             
              <?php }  ?>
		 </ul>
			</div>
		</div>
			<div class="clearfix"></div>
		</div>
			<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.4.min.js"></script>
			<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
			<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>
