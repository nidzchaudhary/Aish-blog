<?php get_header(); 

/* Template Name: gallery */ 
?>
<!--Slider-->
<section class="innerpage_banner py-5">
	<div class="dot1">
		
	</div>
</section>
<div class="banner-bottom gallery py-5">
		<div class="container  py-md-3">
		<div class="w3-head-all mb-3">
		         <h3>Our Gallery</h3>
		       </div>
	
			<div class="w3ls_gallery_grids row">					   
            <?php $query = new WP_Query( array( 'post_type' => 'our_gallery', 'posts_per_page' => '-1' ) ); ?>
	        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>	
			<?php if( have_rows('upload-gallery-image') ): ?>	
			    <?php $count = 1; ?>
				<?php while( have_rows('upload-gallery-image') ): the_row(); 
				// vars
		$images = get_sub_field('images');
		?>
				<div class="col-lg-4  w3_agile_gallery_grid">

					<div class="agile_gallery_grid" style="flaot:left;">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="<?php echo $images; ?>" class="img-fluid">
							<div class="agile_gallery_grid1">
								<img src="<?php echo $images; ?>" alt=" " class="img-responsive img-fluid">
								<div class="w3layouts_gallery_grid1_pos">
									<h3>Success</h3>
									<p> Path</p>
								</div>
							</div>
						</a>
					</div>
					</div>
				<?php $count++; ?>
	<?php endwhile; ?>
	
<?php endif; ?>

				
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
            <?php endwhile; endif; ?>

<!--//Slider-->

<?php get_footer(); ?>