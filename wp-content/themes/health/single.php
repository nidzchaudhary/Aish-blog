<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="banner-1" >
	
</div>
<div class="technology">

	<div class="container">
		<div class="col-md-9 technology-left">
			

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				

			endwhile; // End of the loop.
			?>

	</div><!-- #primary -->
	<?php include 'sidebar.php';?>
</div><!-- .wrap -->
</div><!-- .wrap -->

<?php get_footer(); ?>