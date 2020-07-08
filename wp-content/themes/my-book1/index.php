<?php
/**
 * The main template file
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

<!--Slider-->

  <?php $query = new WP_Query( array( 'post_type' => 'home_page', 'posts_per_page' => '-1' ) ); ?>
	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>	
	
	<div class="slider">
	<div class="callbacks_container">
	

	
	 
		    <?php if( have_rows('home-banner') ): ?>	
			<?php $count = 1; ?>	
			<ul class="rslides callbacks callbacks1" id="slider4">
	<?php while( have_rows('home-banner') ): the_row(); 
		// vars
		$homebannerimage = get_sub_field('home-banner-image');
		$homebannerheading = get_sub_field('home-banner-heading');
		$homebannercaption = get_sub_field('home-banner-caption');
		$homebannerlink = get_sub_field('home-banner-link');
		?>
		<li>
				<div class="slider-img<?php echo ($count);?>" style="background: url(<?php echo $homebannerimage; ?>) no-repeat; background-size: 100%;">
					<div class="dot">
						<div class="container">
							<div class="slider_banner_info_w3ls">
								<h4 class="text-uppercase mb-3"><?php echo $homebannerheading; ?></h4>
								<p><?php echo $homebannercaption; ?></p>

								<a href="<?php echo $homebannerlink; ?>" class="read">Read more </a>
							</div>
						</div>
					</div>
				</div>
			</li>
			  <?php $count++; ?>
	<?php endwhile; ?>
	</ul>
	<div class="clearfix"></div>
<?php endif; ?>
</div>
</div>
<div class="clearfix"></div>
	<div class="about-3 py-5">
		<div class="container py-md-3">
		<div class="w3-head-all mb-3">
		         <h3><?php the_field('home-welcome-heading'); ?></h3>
		       </div>
			<div class="d-flex">
				<div class="about1"> 
					<h4><?php the_field('welcome-sup-heading'); ?></h4>
					<p class="details"><?php the_field('welcome-short-detail'); ?></p>
					
					
					
					 <?php if( have_rows('home-banner') ): ?>	
			<?php $count = 1; ?>	
			<ul class="about-list" >
	<?php while( have_rows('welcome-listing') ): the_row(); 
		// vars
		$welcomelistingicon = get_sub_field('welcome-listing-icon');
		$welcomelistingheading = get_sub_field('welcome-listing-heading');
		$welcomelistingdetail = get_sub_field('welcome-listing-detail');
		?>
		
			      <li>
					<span class="<?php echo $welcomelistingicon; ?>" aria-hidden="true"></span>
							<div class="in-block">
								<h5><?php echo $welcomelistingheading; ?></h5>
								<p><?php echo $welcomelistingdetail; ?></p>
							</div>
						</li>
			  <?php $count++; ?>
	<?php endwhile; ?>
	</ul>
<?php endif; ?>	
				</div>
				<div class="about2" style="background: url(<?php the_field('welcome-right-image'); ?>) no-repeat;">
					
				</div>
			</div>
			
		</div>
	</div>
	<!-- //About us -->
	
	<div class="programs py-5">
<div class="w3-head-all mb-3">
		         <h3><?php the_field('our-programs-heading'); ?></h3>
		       </div>
	<div class="grids_sec_2">
	<?php if( have_rows('home-banner') ): ?>	
			<?php $count = 1; ?>
		<div class="row style-grids_main">
		<?php while( have_rows('our-programs-content') ): the_row(); 
		// vars
		$ourpgrogramsubheading = get_sub_field('our-pgrogram-subheading');
		$ourprogramshortdscption = get_sub_field('our-program-short-dscption');
		$ourprogramshortlink = get_sub_field('our-program-short-link');
		$ourprogramimage = get_sub_field('our-program-image');
		$even = $count%2;
		if($even==0){ ?>
		
		<div class="col-md-6 style-image-2 second" style="style="background: url(<?php the_field('our-program-image'); ?>) no-repeat;"">
			</div>
			<div class="col-md-6 grid_sec_info">
				<div class="style-grid-2-text_info" data-aos="fade-right">
					<h3><?php echo $ourpgrogramsubheading ?></h3>
					<p><?php echo $ourprogramshortdscption ?></p>
					<div class="bnr-button">
						<a href="<?php echo $ourprogramshortlink ?>" class="read" role="button">Read more </a>
					</div>

				</div>
			</div>
		<?php }else{ ?>
			<div class="col-md-6 grid_sec_info">
				<div class="style-grid-2-text_info" data-aos="fade-right">
					<h3><?php echo $ourpgrogramsubheading ?></h3>
					<p><?php echo $ourprogramshortdscption ?></p>
					<div class="bnr-button">
						<a href="<?php echo $ourprogramshortlink ?>" class="read" role="button">Read more </a>
					</div>

				</div>
			</div>
			<div class="col-md-6 style-image-2" style="style="background: url(<?php the_field('our-program-image'); ?>) no-repeat;">
			</div>
			
		<?php }?>
			
			 <?php $count++; ?>
	<?php endwhile; ?>
	<?php endif; ?>	

		</div>
	</div>
	</div>
	
	
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>


<!--//Slider-->

<!-- /services-home -->

	<!-- //services-home -->
<!-- features -->

  <?php $query = new WP_Query( array( 'post_type' => 'our_training', 'posts_per_page' => '-1' ) ); ?>
	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>	
	<div class="features py-5">  
		<div class="container-fluid  py-md-3">  
	<div class="w3-head-all mb-3">
		         <h3><?php the_field('our-training-main-heading'); ?></h3>
		       </div>
		<div class="tabs w3-agileits-tabs"> 
			<!-- Nav tabs -->
			 <?php if( have_rows('our-training-tab') ): ?>	
			<?php $count = 1; ?>	
			<ul class="nav nav-tabs" role="tablist">
	      <?php while( have_rows('our-training-tab') ): the_row(); 
		// vars
		$tab = get_sub_field('tab');
		
		?>
			
				<li class="<?php echo ($count==1)?'active':'';?>"><a href="#<?php echo str_replace(' ','_',$tab).'_'.$count; ?>" aria-controls="home" data-toggle="tab"><span><?php echo $tab ?></span></a></li>
				<?php $count++; ?>
	<?php endwhile; ?>
<?php endif; ?>		
			</ul>
			<!-- Tab panes --> 
			<div class="tab-content">
			<?php if( have_rows('our-training-tab') ): ?>	
			<?php $count = 1; ?>
			<?php while( have_rows('our-training-tab') ): the_row();
			$tab = get_sub_field('tab');
			$tabtagline = get_sub_field('tab-tag-line');
		$tabheading = get_sub_field('tab-heading');
		$tabdiscription = get_sub_field('tab-discription');
		$tabheading = get_sub_field('tab-heading');
		$tableimage = get_sub_field('table-image');?>
				<div role="tabpanel" class="tab-pane <?php echo ($count==1)?'active':'';?> row" id="<?php echo str_replace(' ','_',$tab).'_'.$count; ?>">
				
					<div class="col-lg-6  col-md-12 features-right">
						<div class="agileits-mid"> 
							<h6><?php echo $tabtagline ?></h6>
							<h3><?php echo $tabheading ?></h3>
						</div>
						<p><?php echo $tabdiscription ?></p>
					</div>
					<div class="col-lg-6 col-md-12 features-left agileinfo-img" style="background: url(<?php echo $tableimage; ?>) no-repeat; background-size:100%;">
					
					</div>
					<div class="clearfix"> </div>
				</div>
				<?php $count++; ?>
				<?php endwhile; ?>
                <?php endif; ?>	
				
			</div> 
		</div>
		<!-- /tabs -->  
	</div>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>	
	
	<!-- //features --> 
	<!-- agile_testimonials -->
	<!-- Clients -->
	 <section class="clients-main py-5" id="testimonials">
		<div class="container py-md-3">
	<div class="w3-head-all mb-3">
		         <h3>CLIENTS REVIEWS</h3>
		       </div>
			<div class="cli-ent">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
						<?php $query = new WP_Query( array( 'post_type' => 'clients_reviews', 'posts_per_page' => '-1' ) ); ?>
	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>	
							<li>
								<div class="item g1">
									<div class="agile-dish-caption">
									<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive lazyOwl responsive--full', 'title' => 'Feature image']);
?>
										<h5 class="text-capitalize font-italic"><?php echo the_excerpt(); ?></h5>
										<h4 class="text-capitalize"><?php echo the_title(); ?></h4>
									</div>
									
									<div class="clearfix"></div>
									<?php echo the_content(); ?> <?php ?>
									
								</div>
							</li>
							
												
	
<?php endwhile; ?>
	<?php endif; ?>
	
       
	
						</ul>
					</div>
				</section>
			</div>
			<!--// Owl-Carousel -->
		</div>
</section>
	
	
	
<!--// Clients -->

<!-- //agile_testimonials -->
	<!-- stats -->
	<?php $query = new WP_Query( array( 'post_type' => 'home_page', 'posts_per_page' => '-1' ) ); ?>
	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>	
	   
	   <div class="stats" style="background: url(<?php the_field('professional-education-banner'); ?>) no-repeat 0px 0px; background-size:100%;">
		<div class="container">
		<div class="wthree_head_section stats_head">
					<h3><?php the_field('professional-education'); ?></h3>
				</div>
		<div class="row">
		<?php if( have_rows('professional-education-content') ): ?>	
			<?php $count = 1; ?>
			<?php while( have_rows('professional-education-content') ): the_row();
			$educationcontenticon = get_sub_field('education-content-icon');
		    $educationcontentnumber = get_sub_field('education-content-number');
		    $educationcontenttagline = get_sub_field('education-content-tagline');
		    ?>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 w3layouts_stats_left w3_counter_grid">
				<span class="<?php echo $educationcontenticon ?>" aria-hidden="true"></span>
				<p class="counter"><?php echo $educationcontentnumber ?></p>	
				<h3><?php echo $educationcontenttagline ?></h3>
			</div>
		<?php $count++; ?>
				<?php endwhile; ?>
                <?php endif; ?>		
		
			<div class="clearfix"> </div>
		</div>
			</div>
	</div>
	   
	<?php endwhile; ?>
	<?php endif; ?>
	
	<!-- //stats -->


<!-- appointment -->
<div class="appointment" id="appointment">
<div class="container-fluid  py-md-3">
<div class="row">
<div class="col-md-5 about-bottoml-agileits">
		</div>
		<div class="col-md-7 about-bottomr-agileits">
			<div class="appointment_head">
				<h3>Make An Appointment </h3>
			</div>
				<div class="form-agileits">
			
			
			
			
			
			<?php echo do_shortcode(' [contact-form-7 id="152" title="Make An Appointment"] '); ?>
			
			
			
			
			
				</div>
		</div>
		<div class="clearfix"> </div>
		</div>
		</div>
</div>
<!-- //appointment -->

<?php get_footer();
