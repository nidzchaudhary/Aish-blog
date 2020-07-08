<?php

get_header(); 
$categories = get_the_category();
//print_r($categories);
$term = get_queried_object();
//print_r($term);
//$image = get_sub_field('cat-sl-img', 'category_'.$term->term_id);
?>
<div class="cat-slider">
<?php
  if( get_field('catagory_slider', 'category_'.$term->term_id)  ){ ?>

    <?php $count = 1; ?>
    
    <div class="owl-carousel owl-theme ">
      <?php while( the_repeater_field('catagory_slider', 'category_'.$term->term_id) ){
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
<div class="technology">
  <div class="container">
    <div class="col-md-9 technology-left">
      <div class="tech-no">
        <!-- technology-top -->
        <?php
              $args = array(
                'category_name'=> $categories[0]->slug ,
                'orderby'    => 'ID',
                'post_status' => 'publish',
                'Author_ID' => 'post_author',
                'order'    => 'DESC',
                'posts_per_page' => 9 // this will retrive all the post that is published
                );
              if ( ! empty( $categories ) ) {
                  $categories[0]->name ;

                $query = new WP_Query( $args );

              while ( $query->have_posts() ) {
                        $query->the_post();
        
           ?>
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

          <?php } ?> 
          <?php  } ?>
          
          <div class="clearfix"></div>
          <!-- technology-top -->
        </div>
      </div>
      <?php include 'sidebar.php';?>
    </div>
  </div>
  <?php get_footer();