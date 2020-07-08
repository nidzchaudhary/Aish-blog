<?php
/**
* Template Name: Index Page
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.0
*/

get_header(); ?>
<?php
/*
echo get_the_ID();
if( get_field('banner_slider', 63) ) {
echo '<ul>';
			while( the_repeater_field('banner_slider', 63) ) {
			echo '<li>sub_field_1 = ' . get_sub_field('heading') . ', sub_field_2 = ' . get_sub_field('heading') .', etc</li>';
			}
echo '</ul>';
}
*/
?>
<?php
		$args = array(
	'orderby' => 'DESC',
	'post_type' => 'post',
);
?>
<!--Slider-->
<?php /* $query = new WP_Query( array( 'post_type' => 'banner_slider', 'posts_per_page' => '-1' ) ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); */?>
<section>
	<?php
	if( get_field('banner_slider', 63)  ){ ?>
	<?php $count = 1; ?>
	<div class="owl-carousel owl-theme" id="home-banner">
		<?php while( the_repeater_field('banner_slider', 63) ){
			// vars
			$homebannerimage = get_sub_field('image');
			$homebannerheading = get_sub_field('heading');
			$homebannercaption = get_sub_field('sub_heading');
			$homebannertext = get_sub_field('cta_btn_text');
			$homebannerlink = get_sub_field('cta_btn_link');
			$headingcolor = get_sub_field('heading_color');
			$subheading_color = get_sub_field('sub_heading_color');
		?>
		<div class="item">
			<div class="banner">
				<img src="<?php echo $homebannerimage['url']; ?>">
				<div class="overlay-text">
					<h3 style="color:<?php echo $headingcolor; ?> "><?php echo $homebannerheading; ?></h3>
					<!-- <p style="color:<?php echo $subheading_color; ?> "><?php echo $homebannercaption; ?></p> -->
					<!-- <a href="<?php echo $homebannerlink; ?>"><?php echo $homebannertext; ?></a> -->
				</div>
			</div>
		</div>
		<?php $count++; ?>
		<?php }?>
	</div>
	<div class="clearfix"></div>
	<?php } ?>
</section>
<!-- <div class="services w3l wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					<div class="container">
									<div class="grid_3 grid_5">
													<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
																	<ul id="myTab" class="nav nav-tabs" role="tablist">
																					<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">FASHION</a></li>
																					<li role="presentation" class=""><a href="#safari" role="tab" id="safari-tab" data-toggle="tab" aria-controls="safari">TRAVEL</a></li>
																					<li role="presentation" class=""><a href="#trekking" role="tab" id="trekking-tab" data-toggle="tab" aria-controls="trekking">MUSIC</a></li>
																	</ul>
																	<div id="myTabContent" class="tab-content">
																					<div role="tabpanel" class="tab-pane fade" id="expeditions" aria-labelledby="expeditions-tab">
																									
																									<div class="col-md-4 col-sm-5 tab-image">
							<img src="<?php echo get_template_directory_uri(); ?>/images/f2.jpg" class="img-responsive" alt="Wanderer">
						</div>
						<div class="col-md-4 col-sm-5 tab-image">
							<img src="<?php echo get_template_directory_uri(); ?>/images/f4.jpg" class="img-responsive" alt="Wanderer">
						</div>
						<div class="col-md-4 col-sm-5 tab-image">
							<img src="<?php echo get_template_directory_uri(); ?>/images/f3.jpg" class="img-responsive" alt="Wanderer">
						</div>
						<div class="clearfix"></div>
					</div>
					
					
					<div role="tabpanel" class="tab-pane fade" id="safari" aria-labelledby="safari-tab">
						<div class="col-md-4 col-sm-5 tab-image">
							<img src="<?php echo get_template_directory_uri(); ?>/images/t1.jpg" class="img-responsive" alt="Wanderer">
						</div>
						<div class="col-md-4 col-sm-5 tab-image">
							<img src="<?php echo get_template_directory_uri(); ?>/images/t2.jpg" class="img-responsive" alt="Wanderer">
						</div>
						<div class="col-md-4 col-sm-5 tab-image">
							<img src="<?php echo get_template_directory_uri(); ?>/images/t3.jpg" class="img-responsive" alt="Wanderer">
						</div>
						<div class="clearfix"></div>
					</div>
					<div role="tabpanel" class="tab-pane fade active in" id="trekking" aria-labelledby="trekking-tab">
						<div class="col-md-4 col-sm-5 tab-image">
							<img src="<?php echo get_template_directory_uri(); ?>/images/m2.jpg" class="img-responsive" alt="Wanderer">
						</div>
						<div class="col-md-4 col-sm-5 tab-image">
							<img src="<?php echo get_template_directory_uri(); ?>/images/m1.jpg" class="img-responsive" alt="Wanderer">
						</div>
						<div class="col-md-4 col-sm-5 tab-image">
							<img src="<?php echo get_template_directory_uri(); ?>/images/m3.jpg" class="img-responsive" alt="Wanderer">
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->
<!-- technology-left -->
<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div class="tech-no">
				<!-- technology-top -->
				
				<?php
							$args = array(
								'post_type'=> 'post',
								'orderby'    => 'ID',
								'post_status' => 'publish',
								'Author_ID' => 'post_author',
								'order'    => 'DESC',
								'posts_per_page' => 6 // this will retrive all the post that is published
								);
							$counter = 1;
								$query = new WP_Query( $args );
							while ( $query->have_posts() ) {
												$query->the_post();
				if( $counter == 1){ ?>
				<div class="tc-ch wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					<div class="tch-img">
						<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?></a>
					</div>
					
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<h6>BY <a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?> </a><?php the_time('F jS, Y'); ?>.</h6>
					
					<p>
						<?php
						echo wp_trim_words( get_the_content(), 90, '...<span class="meta-nav">&nbsp</span>' );
						?>
					</p>
					<div class="bht1">
						<a href="<?php the_permalink(); ?>">Continue Reading</a>
					</div>
					<div class="soci">
						<?php echo do_shortcode('[Sassy_Social_Share style=""]'); ?>
					</div>
					
					<div class="clearfix"></div>
				</div>
				<?php } elseif($counter == 2 || $counter == 3) { ?>
				<div class="col-md-6 w3ls-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					<div class="tc-ch">
						<div class="tch-img">
							<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(); ?></a>
						</div>
						
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<h6>BY <a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?> </a><?php the_time('F jS, Y'); ?>.</h6>
						<p class="show-text">
							<?php echo wp_trim_words( get_the_content(), 30, '...<span class="meta-nav">&nbsp</span>' );?></p>
							<div class="bht1">
								<a href="<?php the_permalink(); ?>">Read More</a>
							</div>
							<div class="soci">
								<?php echo do_shortcode('[Sassy_Social_Share style=""]'); ?>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>

					<?php } else{ ?>
						<div class="clearfix"></div>
					<div class="wthree">
						<div class="col-md-6 wthree-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
							<div class="tch-img">
								<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(); ?></a>
							</div>
						</div>
						<div class="col-md-6 wthree-right wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<h6>BY <a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?> </a><?php the_time('F jS, Y'); ?>.</h6>
							<p><?php echo wp_trim_words( get_the_content(), 30, '...<span class="meta-nav">&nbsp</span>' );?></p>
							<div class="bht1">
								<a href="<?php the_permalink(); ?>">Read More</a>
							</div>
							<div class="soci">
								<ul>
									<?php echo do_shortcode('[Sassy_Social_Share style=""]') ?>
								</ul>
							</div>
							<div class="clearfix"></div>
							
						</div>
						<div class="clearfix"></div>
					</div>
					<?php  }  ?>
					<?php $counter++; } ?>
					
					<div class="clearfix"></div>
					<!-- technology-top -->
				</div>
			</div>
			<?php include 'sidebar.php';?>
		</div>
	</div>
	<?php get_footer();