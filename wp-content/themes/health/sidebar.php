<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
?>
<!-- technology-right -->
    <div class="col-md-3 technology-right">
        
        
        <div class="blo-top1">
              
          <div class="tech-btm">
          <div class="search-1 wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
              <form action="#" method="post">
                <input type="search" name="Search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
                <input type="submit" value=" ">
              </form>
            </div>

          <h4>Popular Posts </h4>
          <?php 
              $args = array(
                'post_type'=> 'post',
                'orderby'    => 'ID',
                'post_status' => 'publish',
                'Author_ID' => 'post_author',
                'order'    => 'ASC',
                'posts_per_page' => -1 // this will retrive all the post that is published 
                );
                $query = new WP_Query( $args );
              while ( $query->have_posts() ) {
                        $query->the_post();
              ?>
            <div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
              <div class="blog-grid-left">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
              </div>
              <div class="blog-grid-right">
                
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h5>
              </div>
              <div class="clearfix"> </div>
            </div>
            <?php }  ?>

           <!--  <div class="insta wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
          <h4>Instagram</h4>
            <ul>
               <?//php 
              $args = array(
                //'post_type'=> 'post',
                //'orderby'    => 'ID',
                //'post_status' => 'publish',
                //'Author_ID' => 'post_author',
                //'order'    => 'DESC',
                //'posts_per_page' => -1 // this will retrive all the post that is published 
                );
                //$query = new WP_Query( $args );
              //while ( $query->have_posts() ) {
                        //$query->the_post();
              ?>
              <li><a href="<?//php the_permalink(); ?>"><? //php the_post_thumbnail(); ?></a></li>
              <? //php }  ?>
            </ul>
          </div>
          <div class="twt">
          
            <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-hashtag-button twitter-hashtag-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.b7de008f493a5185d8df1aedd62d77c6.en.html#button_hashtag=TwitterStories&amp;dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Fduplex%2Fweb%2F&amp;size=l&amp;time=1467721486626&amp;type=hashtag" style="position: static; visibility: visible; width: 166px; height: 28px;" data-hashtag="TwitterStories"></iframe>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
          </div>
          </div>  -->
       
        <div class="multiple-widget">
            <div class="widget-show-btns">
              <ul>
                <li><a href="javascript:;" class="social-btn fb" traget-div="facebook-w"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                <li><a href="javascript:;" class="social-btn" traget-div="instagram-w"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li style="display: none;"><a href="javascript:;" class="social-btn"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            <div class="widget-content">
              <div class="social-w" id="facebook-w">
                <div class="fb-page" data-href="https://www.facebook.com/nishant21198/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/nishant21198/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/nishant21198/">TR news</a></blockquote></div>
              </div>
              <div class="social-w v-hidden" id="instagram-w">
                <?php 
              $args = array(
                'post_type'=> 'insta_feed',
                'orderby'    => 'ID',
                'post_status' => 'publish',
                'order'    => 'DESC',
                'posts_per_page' => -1 // this will retrive all the post that is published 
                );
                $query = new WP_Query( $args );
              while ( $query->have_posts() ) {
                        $query->the_post();
              ?>
              <div><?php the_content(); ?></div>
              <?php }  ?>
                
              </div>
            </div>
          </div> 
          </div>   
    </div>
    <div class="clearfix"></div>
    <!-- technology-right -->
<!-- <aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'twentyseventeen' ); ?>">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside #secondary -->
 