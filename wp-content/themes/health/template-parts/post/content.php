<?php
/**
* Template part for displaying posts
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.2
*/
?>
<div class="agileinfo single-post-stye">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
		if ( is_sticky() && is_home() ) :
			echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
		endif;
		?>
		<header class="entry-header">
			<?php
			
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} elseif ( is_front_page() && is_home() ) {
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
			?>
			</header><!-- .entry-header -->
			<?php if ( has_post_thumbnail() ):?>
			<div class="featured-image-wrap"><?php the_post_thumbnail(); ?></div>
			<?php endif; ?>
			<div class="entry-content">
				<?php
				if ( 'post' === get_post_type() ) {
					echo '<div class="entry-meta">';
							if ( is_single() ) {
								twentyseventeen_posted_on();
							} else {
								echo twentyseventeen_time_link();
								twentyseventeen_edit_link();
							};
					echo '</div><!-- .entry-meta -->';
					};
					/* translators: %s: Name of current post */
					the_content( sprintf(
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
					get_the_title()
					) );
					wp_link_pages( array(
					'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
					'after'       => '</div>',
					'link_before' => '<span class="page-number">',
					'link_after'  => '</span>',
					) );
					?>
					</div><!-- .entry-content -->
					<div class="response">
						<h4>Responses</h4>
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/images/sin1.jpg" class="img-responsive" alt="">
								</a>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>Jun 21, 2016</li>
									<li><a href="#">Reply</a></li>
								</ul>
								<div class="media response-info">
									<div class="media-left response-text-left">
										<a href="#">
											<img src="<?php echo get_template_directory_uri(); ?>/images/sin2.jpg" class="img-responsive" alt="">
										</a>
									</div>
									<div class="media-body response-text-right">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										<ul>
											<li>July 17, 2016</li>
											<li><a href="#">Reply</a></li>
										</ul>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/images/sin1.jpg" class="img-responsive" alt="">
								</a>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>Jul 22, 2016</li>
									<li><a href="#">Reply</a></li>
								</ul>
								<div class="media response-info">
									<div class="media-left response-text-left">
										<a href="#">
											<img src="<?php echo get_template_directory_uri(); ?>/images/sin2.jpg" class="img-responsive" alt="">
										</a>
									</div>
									<div class="media-body response-text-right">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										<ul>
											<li>Aug 01, 2016</li>
											<li><a href="#">Reply</a></li>
										</ul>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="coment-form">
						<h4>Leave your comment</h4>
						<form action="#" method="post">
							<input type="text" value="Name " name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
							<input type="email" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
							<input type="submit" value="Submit Comment">
						</form>
					</div>
				</article>
				</div><!-- #post-## -->