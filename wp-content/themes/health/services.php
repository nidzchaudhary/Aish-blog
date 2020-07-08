<?php get_header(); 

/* Template Name: service */ 
?>
<!--Slider-->
<section class="innerpage_banner py-5">
	<div class="dot1">
		
	</div>
</section>
<!-- /inner_content -->
	<div class="inner_content_info_agileits py-5">
		<div class="container  py-md-3">
		<div class="w3-head-all mb-3">
		         <h3><?php the_field('services-heading'); ?></h3>
		       </div>
			<div class="inner_sec_grids_info_w3ls row">
				<div class="col-md-6 banner_bottom_left">
					<h4><?php the_field('sub-heading'); ?></h4>
					<p><?php the_field('detail-service'); ?></p>
					<ul class="some_agile_facts">
					<?php if( have_rows('service-type') ): ?>	
			<?php $count = 1; ?>
			<?php while( have_rows('service-type') ): the_row();
			$servicetypeicon = get_sub_field('service-type-icon');
			$servicetypename = get_sub_field('service-type-name');
		    ?>
						<li><span class="<?php echo $servicetypeicon ?>" aria-hidden="true"></span> <?php echo $servicetypename ?></li>
						<?php $count++; ?>
			<?php endwhile; ?>
            <?php endif; ?>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 banner_bottom_right">
					<div class="agileits_w3layouts_banner_bottom_grid">
						<img src="<?php the_field('service-side-image'); ?>" alt=" " class="img-responsive img-fluid" />
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //inner services page -->
<!-- choose -->
	<div class="jarallax w3-agileits-choose py-5" style="background: url(<?php the_field('new-service-bg'); ?>) no-repeat 0px 0px;background-size: cover;">
			<div class="container  py-md-3">
				<div class="w3-head-all mb-3 w3_choose_head">
		         <h3><?php the_field('new-service-heading'); ?></h3>
		       </div>
				<div class="agile-choose-grids row">
				<?php if( have_rows('new-service-type') ): ?>	
			<?php $count = 1; ?>
			<?php while( have_rows('new-service-type') ): the_row();
			$iconimage = get_sub_field('icon-image');
			$servicetitle = get_sub_field('service-title');
			$newservicedetail = get_sub_field('new-service-detail');
		    ?>
					<div class="col-lg-4 agile-choose-grid">
						<div class="choose-icon">
							<i class="<?php echo $iconimage ?>" aria-hidden="true"></i>
						</div>
						<div class="choose-info">
							<h4><?php echo $servicetitle ?></h4>
							<p><?php echo $newservicedetail ?></p>
						</div>
					</div>
			<?php $count++; ?>
			<?php endwhile; ?>
            <?php endif; ?>
				</div>	
			</div>
	</div>
	<!-- //choose -->
<!-- stats -->
	<?php $query = new WP_Query( array( 'post_type' => 'home_page', 'posts_per_page' => '-1' ) ); ?>
	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>	
	   
	   <div class="stats" style="background: url(<?php the_field('professional-education-banner'); ?>) no-repeat 0px 0px; background-size:100%;    background-attachment: fixed;">
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

<?php get_footer(); ?>