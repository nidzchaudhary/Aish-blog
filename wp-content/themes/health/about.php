<?php get_header(); 

/* Template Name: About us */ 
?>
<div class="cat-slider">
<?php
  if( get_field('catagory_slider')){ ?>

    <?php $count = 1; ?>
    
    <div class="owl-carousel owl-theme ">
      <?php while( the_repeater_field('catagory_slider')){
      // vars
      $catsliderimg = get_sub_field('cat-sl-img');
      $catslidertext = get_sub_field('cat-sl-text');
      //print_r($catsliderimg);
    ?>
      <div class="item">
        <img src="<?php echo $catsliderimg['url']; ?>" alt="">
      </div>
      <?php $count++; ?>
    <?php } ?>
    
  </div>
<?php } ?>
</div>
<!-- inner page banner -->
<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
		<div class="w3agile-1">
			<div class="welcome">
				<div class="welcome-top heading">
					<h2 class="w3">WELCOME</h2>
					<div class="welcome-bottom">
						<img src="images/t4.jpg" class="img-responsive" alt="">

						 <?php
    while ( have_posts() ) : the_post(); ?>
    	
            <?php the_content(); ?> 

    <?php
    endwhile; 
    wp_reset_query(); 
    ?>

    <?php ?>  
					</div>
				</div>
			</div>
			<div class="team">	
				<h3 class="team-heading">Meet our team</h3>
				<?php
	if( get_field('member')  ){ ?>
	<?php $count = -1; ?>
				<div class="team-grids">
				<?php while( the_repeater_field('member') ){
							// vars
							$memberimage = get_sub_field('member_image');
							$membername = get_sub_field('member_name');
							$memberdesignation = get_sub_field('member_designation');
							$member_fb_profile = get_sub_field('fb_profile');
							$member_twitter_profile = get_sub_field('twitter_profile');
							$member_insta_profile = get_sub_field('insta_profile');
						?>
					<div class="col-md-6 team-grid">
						<div class="team-grid1">
							<img src="<?php echo $memberimage['url']; ?>" alt=" " class="img-responsive">
							<div class="p-mask">
								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
								
							</div>
						</div>
						<h5><?php echo $membername; ?><span><?php echo $memberdesignation; ?></span></h5>
						<ul class="social">
							<li><a class="social-facebook" href="<?php echo $member_fb_profile; ?>">
								<i></i>
								<div class="tooltip"><span>Facebook</span></div>
								</a></li>
							<li><a class="social-twitter" href="<?php echo $member_twitter_profile; ?>">
								<i></i>
								<div class="tooltip"><span>Twitter</span></div>
								</a></li>
							<li><a class="social-google" href="<?php echo $member_insta_profile; ?>">
								<i></i>
								<div class="tooltip"><span>Google+</span></div>
								</a></li>
						</ul>
					</div>
					<?php $count++; ?>
		<?php }?>
					
					<div class="clearfix"> </div>
				</div>
					<?php } ?>			
			</div>
			</div>
		</div>
		<!-- technology-right -->
		<?php include 'sidebar.php';?>
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>
<!-- //team -->
<?php get_footer(); ?>