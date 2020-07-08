<?php get_header(); 

/* Template Name: about */ 
?>
<!-- inner page banner -->
<section class="innerpage_banner py-5">
	<div class="dot1">
		
	</div>
</section>
<!-- //inner page banner -->
<!-- about -->
	<div class="about py-5">
		<div class="container  py-md-3">
			<div class="w3-head-all mb-3">
		         <h3>About More</h3>
		       </div>
			<div class="agile_about_grids row">
				<div class="col-md-6 agile_about_grid_left">
				<div class="row">
					<div class="col-md-6 agile_about_grid_left1">
						<img src="http://localhost/my-first-wordpress/wp-content/uploads/2018/09/ab1.jpg" alt=" " class="img-responsive img-fluid" />
					</div>
					<div class="col-md-6 agile_about_grid_left1">
						<img src="http://localhost/my-first-wordpress/wp-content/uploads/2018/09/ab2.jpg" alt=" " class="img-responsive img-fluid" />
					</div>
					</div>
					<div class="clearfix"> </div>
					<img class="agile_about_grid_left_img img-responsive img-fluid" src="http://localhost/my-first-wordpress/wp-content/uploads/2018/09/ab3.jpg" alt=" " />
				</div>
				<div class="col-md-6 agile_about_grid_right">
					<h4>voluptatibus maiores alias consequatur</h4>
					<p>Et harum quidem rerum facilis est et expedita <span>distinctio</span>. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id <span>quod</span> maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus <span>autem</span> quibusdam et autofficiis debitis.<i>impedit quo minus id <span>quod</span> maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus <span>autem</span> quibusdam et aut officiis debitis.</i></p>
					<div class="about_more">
						<a href="#" class="read" data-toggle="modal" data-target="#exampleModalCenter" role="button">Read more </a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
<!-- Latest -->
<div class="latest py-5">
	<div class="container  py-md-3">
	<div class="w3-head-all mb-3">
		         <h3>Our plans</h3>
		       </div>
<?php $query = new WP_Query( array( 'post_type' => 'plan_news_team', 'posts_per_page' => '-1' ) ); ?>
	<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>	   
		<div class="news_grids row">
		    <?php if( have_rows('plans-hover-content') ): ?>	
			<?php $count = 1; ?>
			<?php while( have_rows('plans-hover-content') ): the_row();
			$bgimages = get_sub_field('bg-images');
			$filldate = get_sub_field('fill-date');
			$heading = get_sub_field('heading');
		    $shorttext = get_sub_field('short-text');
		    $readbtn = get_sub_field('read-btn');
		    ?>
			<div class="col-lg-4">
				<div class="news_grid1" style="background:url(<?php echo $bgimages ?>); background-size: cover; margin-bottom: 30px;">
					<div class="news_grid_info" >
						<p class="date"><?php echo $filldate ?></p>
						<h3><?php echo $heading ?></h3>
						<p><?php echo $shorttext ?></p>
						<a href="#" class="read" data-toggle="modal" data-target="#exampleModalCenter" role="button"><?php echo $readbtn ?></a>
					</div>
				</div>
			</div>
			<?php $count++; ?>
			<?php endwhile; ?>
            <?php endif; ?>
			
		</div>
			<?php endwhile; ?>
	<?php endif; ?>	

	</div>
	<div class="clearfix"> </div>
</div>
   </div>
			
	<div class="offers py-5">
		<div class="container  py-md-3">
		
			<div class="w3-head-all mb-3 news_head">
		         <h3>Latest News</h3>
		    <?php $query = new WP_Query( array( 'post_type' => 'plan_news_team', 'posts_per_page' => '-1' ) ); ?>
	        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>	   
			<div class="offers-grids row">
			
				<div class="col-md-6 wthree-offers-left">

					<div class="offers-left-heading">
						<h4><?php the_field('new-sub-heading'); ?></h4>
					</div>
			<?php if( have_rows('news-number-listing') ): ?>	
			<?php $count = 1; ?>
			<?php while( have_rows('news-number-listing') ): the_row();
			$itemnumber = get_sub_field('item-number');
			$numberlisttext = get_sub_field('number-list-text');
		    ?>
					<div class="offers-left-grids" style="margin:2em 0;">
						<div class="offers-number">
							<p><?php echo $itemnumber ?></p>
						</div>
						<div class="offers-text">
							<p><?php echo $numberlisttext ?></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					
			<?php $count++; ?>
			<?php endwhile; ?>
            <?php endif; ?>
					
				</div>
				<div class="col-md-6 wthree-offers-right">
				<?php if( have_rows('para-content') ): ?>	
			<?php $count = 1; ?>
			<?php while( have_rows('para-content') ): the_row();
			$boldpara = get_sub_field('bold-para');
			$lightpara = get_sub_field('light-para');
		    ?>
					<h5><?php echo $boldpara ?></h5>
					<p><?php echo $lightpara ?></p>
			<?php $count++; ?>
			<?php endwhile; ?>
            <?php endif; ?>		
					<ul>
					<?php if( have_rows('list-news') ): ?>	
			<?php $count = 1; ?>
			<?php while( have_rows('list-news') ): the_row();
			$news = get_sub_field('news');
			$referlink = get_sub_field('refer-link');
		    ?>
						<li><a href="<?php echo $referlink ?>" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $news ?></a></li>
					
					<?php $count++; ?>
			<?php endwhile; ?>
            <?php endif; ?>
			</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>	
	<!-- offers -->
	<!-- team -->
	
<div class="team py-5">
	<div class="container  py-md-3">
		<div class="w3-head-all mb-3">
		         <h3>Our Team</h3>
		       </div>
			   <?php $query = new WP_Query( array( 'post_type' => 'plan_news_team', 'posts_per_page' => '-1' ) ); ?>
	        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>	
		<div class="teamgrids row">
		    <?php if( have_rows('person-details') ): ?>	
			<?php $count = 1; ?>
			<?php while( have_rows('person-details') ): the_row();
			$personimage = get_sub_field('person-image');
			$personname = get_sub_field('person-name');
			$persondesignation = get_sub_field('person-designation');
			$personcontact = get_sub_field('person-contact');
		    ?>
			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 teamgrid1">
				<img src="<?php echo $personimage ?>" class="img-responsive img-fluid" alt="" />
				<div class="teaminfo">
					<h3><?php echo $personname ?></h3>
					<div class="team-social">
					<?php if( have_rows('person-social-links') ): ?>	
			<?php $count = 1; ?>
			<?php while( have_rows('person-social-links') ): the_row();
			$socialicon = get_sub_field('social-icon');
			$socallinks = get_sub_field('socal-links');
		    ?>
						<a href="<?php echo $socallinks ?>"><i class="<?php echo $socialicon ?>"></i></a>
						
			<?php $count++; ?>
			<?php endwhile; ?>
            <?php endif; ?>			
					</div>
					<p><i class="fas fa-dot-circle" aria-hidden="true"></i><?php echo $persondesignation ?></p>
					<p><i class="fas fa-phone" aria-hidden="true"></i> <?php echo $personcontact ?></p>
	
				</div>
			</div>
			<?php $count++; ?>
			<?php endwhile; ?>
            <?php endif; ?>
			
			<div class="clearfix"></div>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>
	</div>
</div>
<!-- //team -->
<?php get_footer(); ?>